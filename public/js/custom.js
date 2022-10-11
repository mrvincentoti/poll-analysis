var electionData = getElectionData();
var electionDataByState = getElectionDataByState();

var obamaColorScale = anychart.scales.linearColor(
    '#138750'
);
var obamaLegendItem = {
    iconType: 'square',
    iconFill: '#138750',
    iconStroke: null
};

// McCain series color settings
var mcCainColorScale = anychart.scales.linearColor(
    '#ff0000'
);
var mcCainLegendItem = {
    iconType: 'square',
    iconFill: '#ff0000',
    iconStroke: null
};

// global settings
var preloader;

var map;

anychart.onDocumentReady(function () {
    // set chart theme
    //anychart.theme('lightBlue');
    preloader = anychart.ui.preloader();
    preloader.render(document.getElementById('container'));

    // creates root map
    map = anychart.map();
    chart = anychart.pie();

    // sets geo data
    map.geoData('anychart.maps.nigeria');
    map.background().fill({
        keys: ["#343a40", "#343a40", "#343a40"],
        angle: 130,
    });

    map.padding([10, 10, 10, 10]);
    map.interactivity().selectionMode('none');

    var menu = map.contextMenu();
    // add item DrillUp for context menu
    menu.itemsFormatter(function (items) {
        var path = map.getDrilldownPath();

        items['drill-up'] = {
            index: 0,
            text: 'Drill Up',
            action: function () {
                map.drillUp();
            }
        };

        items['drill-up'].enabled = path.length > 1;

        return items;
    });

    // set map legend settings
    map
        .legend()
        .enabled(true)
        .position('center-top')
        .padding([0, 0, 20, 0]);


    // create choropleth series based on Obama data
    var obamaSeries = createSeries(
        map,
        'Over 1.5M votes', {
        value: 'value'
    },
        filterFunction2(electionData, 'value', 1500000)
    );
    obamaSeries
        .labels()
        .enabled(true)
        .fontSize(10)
        .fontColor('#FFFFFF')
        .format('{%state}')
    // .textShadow({
    //     color: '#ffffff',
    //     offsetX: '1px',
    //     offsetY: '1px',
    //     blurRadius: '1px'
    // });

    obamaSeries.colorScale(obamaColorScale).legendItem(obamaLegendItem);

    // create choropleth series based on McCain data
    var mcCainSeries = createSeries(
        map,
        'Less than 1.5M votes', {
        value: 'value'
    },
        filterFunction3(electionData, 'value', 1499000)
    );
    mcCainSeries
        .labels()
        .enabled(true)
        .fontSize(10)
        .fontColor('#FFFFFF')
        .format('{%state}')

    mcCainSeries.colorScale(mcCainColorScale).legendItem(mcCainLegendItem);


    map
        .tooltip()
        .useHtml(true)
        .format(function () {
            return (
                '<span style="font-size: 13px">' +
                this.value +
                ' Registered PVCs</span> <br/>'
            );
        });

    // set pointClick event listener
    map.listen('pointClick', updateController);
    //map.listen('pointClick', onPointClickHandler);

    // set container id for the map
    map.container('container');

    // initiate map drawing
    map.draw();
});

function updateController(evt) {
    var point = evt.point;

    // get state data using data from the point
    var pvcs = point.get('value');
    var stateId = point.get('id');
    var state = point.get('state');
    var lgas = point.get('lgas');
    var wards = point.get('wards');
    var pdp = point.get('PDP');
    var apc = point.get('APC');

    var registered_v = point.get('RV');
    var collected_pvc = point.get('CP');

    var stateName = document.getElementById('tstate');
    var totalPvc = document.getElementById('tpvc');
    var totalLga = document.getElementById('tlga');
    var totalWards = document.getElementById('tward');

    var pdp_perc = document.getElementById('pdp');
    var apc_perc = document.getElementById('apc');

    var state_name_ = document.getElementById('state_name');

    // pdp_perc.innerHTML = ""; pdp_perc.innerHTML = registered_v + '%';
    // apc_perc.innerHTML = ""; apc_perc.innerHTML = collected_pvc + '%';

    pdp_perc.innerHTML = ""; pdp_perc.innerHTML = registered_v;
    apc_perc.innerHTML = ""; apc_perc.innerHTML = collected_pvc;
    state_name_.innerHTML = ""; state_name_.innerHTML = state;
    console.log(state_name_);

    // stateName.innerHTML = ""; stateName.innerHTML = 'Summary for ' + state;
    // totalPvc.innerHTML = ""; totalPvc.innerHTML = pvcs;
    // totalLga.innerHTML = ""; totalLga.innerHTML = lgas;
    // totalWards.innerHTML = ""; totalWards.innerHTML = wards;

    // var stateData = electionDataByState[stateId];
    // if (stateData != undefined && stateData.length > 0) {
    //     // $("#lga-ul").html("");
    //     // $.each(stateData, function (key, value) {
    //     //     $("#lga-ul").append('<li>' + value.name + ' <span class="pull-right label-danger label-1 label">' + value.value + '</span></li>');
    //     // });
    //     $("#state-details").show();
    // } else {
    //     $("#state-details").hide();
    // }
}

function onPointClickHandler(evt) {
    // get point data from event
    var point = evt.point;

    // get state data using data from the point
    var stateId = point.get('id');
    var state = point.get('state');

    if (typeof state === 'undefined') return;

    var stateNormalized = state.toLowerCase().replace(' ', '_');
    //var stateUrl = stateBaseUrl + stateNormalized + '/' + stateNormalized + '.json';
    var stateUrl = 'js/' + stateNormalized + '.json';
    if (checkFileExist(stateUrl) == false) return;

    // The data that have been used for this sample can be taken from the CDN
    // https://cdn.anychart.com/maps-data/US_presidential_election_2008.js
    var stateData = electionDataByState[stateId];
    var obamaStateData = filterFunction2(stateData, 'value', 100000);
    var mcCainStateData = filterFunction3(stateData, 'value', 99000);

    // load state Geo data in JSON format from AnyChart CDN using jQuery
    $.ajax({
        type: 'GET',
        url: stateUrl,
        dataType: 'json',
        beforeSend: function () {
            // set timeout to prevent preloader in case of browser cached geo data
            preloader.visible(true);
        },
        success: function (geoData) {
            // create map fro drill down
            var drillMap = anychart.map();
            drillMap.geoIdField('id');


            // set drill down map title setting
            var noDataText = stateData ? '' : ' - <b>No Data</b>';

            drillMap
                .title()
                .enabled(true)
                .useHtml(true)
                .padding([0, 0, 10, 0])
                .text(
                    'Nigeria presidential election, 2009<br/>' +
                    '<span style="color:#212121; font-size: 13px;">In ' +
                    state +
                    ' by Lgas' +
                    noDataText +
                    '<br> ' +
                    'To drill up Press Backspace button or use context menu</span>'
                );

            // set drill down map Geo Data settings
            drillMap
                .geoData(geoData)
                // set drill down map padding settings
                .padding([10, 10, 10, 10]);

            // create choropleth series based on Obama data
            var obamaSeries = createSeries(
                drillMap,
                'Above 100K PVCs', {
                id: 'id',
                value: 'value'
            },
                obamaStateData
            );
            obamaSeries.colorScale(obamaColorScale).legendItem(obamaLegendItem);

            // create choropleth series based on McCain data
            var mcCainSeries = createSeries(
                drillMap,
                'Below 100K PVCs', {
                id: 'id',
                value: 'value'
            },
                mcCainStateData
            );
            mcCainSeries
                .colorScale(mcCainColorScale)
                .legendItem(mcCainLegendItem);

            drillMap
                .tooltip()
                .titleFormat(tooltipTitleFormatter)
                .format(tooltipTextFormatter);

            drillMap
                .labels()
                .enabled(true)
                .fontSize(14)
                .fontColor('#FFFFFF')
                .format('{%value}')
                .textShadow({
                    color: '#ffffff',
                    offsetX: '1px',
                    offsetY: '1px',
                    blurRadius: '1px'
                });

            // initiate drill down
            map.drillTo(stateId, drillMap);

            // hide preloader
            preloader.visible(false);
        },
        error: function (data) {
            console.log('Error: ', data);
        }
    });
}

function createSeries(targetMap, seriesName, mapping, data) {
    // create data set with passed data
    var dataSet = anychart.data.set(data);

    // create data mapping with passed settings
    var seriesMapping = dataSet.mapAs(mapping);

    // create choropleth series
    var series = targetMap.choropleth(seriesMapping);

    // sets common settings
    series.name(seriesName).stroke('1.5 #fff').labels(false);

    // sets tooltip settings
    series.tooltip().useHtml(true).padding([8, 13, 10, 13]).fontSize(13);

    return series;
}

function tooltipTitleFormatter() {
    return this.state || this.getData('state');
}

function tooltipTextFormatter() {
    var stateID = this.getData('id');
    var notice = !electionDataByState[stateID] ?
        '<br/><br/><span style="font-size: 11px; color: #cbcbcb">No data by counties for the state</span>' :
        '<br/><br/><span style="font-size: 11px; color: #fafafa">Click to see results by counties</span>';

    return (
        '<span style="font-size: 12px; color: #cbcbcb">LGA Name:</span> ' +
        this.getData('name') +
        '<span style="font-size: 12px; color: #cbcbcb"></span><br/>' +
        '<span style="font-size: 12px; color: #cbcbcb">PVCs:</span> ' +
        this.getData('value') +
        '<span style="font-size: 12px; color: #cbcbcb"></span>' +
        notice
    );
}

function filterFunction(data, field1, field2) {
    var result = [];
    if (data) {
        for (var i = 0; i < data.length; i++) {
            // console.log(data[i][field1]);
            // console.log(data[i][field2]);
            if (data[i][field1] >= data[i][field2]) result.push(data[i]);
        }
    }
    return result;
}

function filterFunction2(data, field1, field2) {
    var result = [];
    if (data) {
        for (var i = 0; i < data.length; i++) {
            if (data[i][field1] >= field2) result.push(data[i]);
        }
    }
    return result;
}

function filterFunction3(data, field1, field2) {
    var result = [];
    if (data) {
        for (var i = 0; i < data.length; i++) {
            if (data[i][field1] <= field2) result.push(data[i]);
        }
    }
    return result;
}


function checkFileExist(urlToFile) {
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', urlToFile, false);
    xhr.send();

    if (xhr.status == "404") {
        return false;
    } else {
        return true;
    }
}

$('.counter-count').each(function () {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 5000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

// geographic map
var candidateData = getCandidateData();

var obiColorScale = anychart.scales.linearColor(
    '#138750'
);
var obiLegendItem = {
    iconType: 'square',
    iconFill: '#138750',
    iconStroke: null
};

var atikuColorScale = anychart.scales.linearColor(
    '#eea303'
);
var atikuLegendItem = {
    iconType: 'square',
    iconFill: '#eea303',
    iconStroke: null
};

// McCain series color settings
var tinubuColorScale = anychart.scales.linearColor(
    '#17a2b8'
);
var tinubuLegendItem = {
    iconType: 'square',
    iconFill: '#17a2b8',
    iconStroke: null
};

// global settings
var candidateMap;
anychart.onDocumentReady(function () {
    // creates root map
    candidateMap = anychart.map();
    candidateMap.geoData('anychart.maps.nigeria');
    candidateMap.background().fill({
        keys: ["#343a40", "#343a40", "#343a40"],
        angle: 130,
    });

    // sets map padding and interactivity settings
    candidateMap.padding([10, 10, 10, 10]);
    candidateMap.interactivity().selectionMode('none');

    // set map legend settings
    candidateMap
        .legend()
        .enabled(true)
        .position('center-top')
        .padding([0, 0, 20, 0]);


    // create choropleth series based on Obi data
    var obiSeries = createSeries(
        candidateMap,
        'Obi', {
        value: 'value'
    },
        filterFunction(candidateData, 'LP', 'APC')
    );

    obiSeries
        .labels()
        .enabled(true)
        .fontSize(10)
        .fontColor('#FFFFFF')
        .format('{%state}')

    obiSeries.colorScale(obiColorScale).legendItem(obiLegendItem);


    // create choropleth series based on atiku data
    var atikuSeries = createSeries(
        candidateMap,
        'Atiku', {
        value: 'value'
    },
        filterFunction(candidateData, 'PDP', 'APC')
    );

    atikuSeries
        .labels()
        .enabled(true)
        .fontSize(10)
        .fontColor('#FFFFFF')
        .format('{%state}')

    atikuSeries.colorScale(atikuColorScale).legendItem(atikuLegendItem);

    // create choropleth series based on tinubu data
    var tinubuSeries = createSeries(
        candidateMap,
        'Tinubu', {
        value: 'value'
    },
        filterFunction(candidateData, 'PDP', 'APC')
    );

    tinubuSeries
        .labels()
        .enabled(true)
        .fontSize(10)
        .fontColor('#FFFFFF')
        .format('{%state}')

    tinubuSeries.colorScale(tinubuColorScale).legendItem(tinubuLegendItem);

    // set container id for the map
    candidateMap.container('geographic-map');

    // initiate map drawing
    candidateMap.draw();
});

//console.log('anychart.map');