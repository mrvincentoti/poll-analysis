var columnChartWidget,
    columnChartWidgetoptions = {
        series: [
            { name: "Positive", data: generateRandomNumber(2400, 6000, 3) },
            { name: "Negative", data: generateRandomNumber(1400, 2000, 3) }
        ],
        chart: {
            type: "bar",
            height: 316,
            stacked: !1,
            columnWidth: "70%",
            toolbar: { show: !1 },
            zoom: { enabled: !1 }
        },
        theme: { mode: colors.chartTheme },
        dataLabels: { enabled: !1 },
        plotOptions: {
            bar: { horizontal: !1, columnWidth: "10%", radius: 20, enableShades: !1, endingShape: "rounded" }
        },
        xaxis: {
            type: "text",
            categories: ["Obi", "Tinubu", "Atiku"],
            labels: { show: 1 },
            axisTicks: { show: !1 },
            axisBorder: { show: !1 }
        },
        yaxis: {
            labels: { show: 1 }
        },
        legend: {
            position: 'top',
            show: 1,
        },
        labels: {
            colors: ['#3ad29f', '#dc3545'],
            useSeriesColors: false
        },
        // fill: {
        //     opacity: 1,
        //     colors: ['#3ad29f', '#E91E63'],
        //     image: {
        //         src: ['../assets/images/atiku.jpg', '../assets/images/atiku.jpg', '../assets/images/atiku.jpg'],
        //         width: undefined,
        //         height: undefined
        //     },
        // },
        grid: { show: 1, padding: { top: 0, right: 0, bottom: 0, left: -15 } }
    },
    columnChartWidgetCtn = document.querySelector("#sentimentByCandidateChart-2");
columnChartWidgetCtn && (columnChartWidget = new ApexCharts(columnChartWidgetCtn, columnChartWidgetoptions)).render();

// donutChart
var donutchart,
    donutChartOptions = {
        series: [178, 161, 99],
        chart: {
            type: "donut", height: 305, zoom: { enabled: !1 }
        },
        theme: {
            mode: ['#343a40']
        },
        plotOptions: {
            pie: {
                donut: { size: "40%" },
                expandOnClick: 1
            }
        },
        labels: ["Obi", "Tinubu", "Atiku"],
        legend: {
            position: "bottom", fontFamily: base.defaultFontFamily, fontWeight: 400,
            labels: { colors: ['#3ad29f', '#E91E63', '#1b68ff'], useSeriesColors: !1 },
            horizontalAlign: "left", fontFamily: base.defaultFontFamily,
            markers: { width: 10, height: 10, strokeWidth: 0, strokeColor: "#fff", radius: 6 },
            itemMargin: { horizontal: 10, vertical: 2 },
            onItemClick: { toggleDataSeries: !0 },
            onItemHover: { highlightDataSeries: !0 }
        },
        stroke: {
            colors: ['#3ad29f', '#E91E63', '#1b68ff'], width: 1
        },
    },
    donutchartCtn = document.querySelector("#mostPopularHashtag");
donutchartCtn && (donutchart = new ApexCharts(donutchartCtn, donutChartOptions)).render();

// lineChart daily tweet
var lineChart,
    lineChartoptions = {
        series: [
            {
                name: "Obi",
                data: generateRandomNumber(1, 1987, 10),
            },
            {
                name: "Tinubu",
                data: generateRandomNumber(1, 1789, 10),
            },
            {
                name: "Atiku",
                data: generateRandomNumber(1, 900, 10),
            }
        ],
        chart: {
            height: 350, type: "line",
            background: !1, zoom: { enabled: !1 },
            toolbar: { show: !1 }
        },
        theme: {
            mode: colors.chartTheme
        },
        stroke: {
            show: !0,
            curve: "smooth",
            lineCap: "round",
            colors: chartColors,
            width: [3, 2, 3],
            dashArray: [0, 0, 0]
        },
        dataLabels: { enabled: !1 },
        responsive: [
            {
                breakpoint: 480, options: { legend: { position: "bottom", offsetX: -10, offsetY: 0 } }
            }
        ],
        markers: {
            size: 4,
            colors: base.primaryColor,
            strokeColors: colors.borderColor,
            strokeWidth: 2, strokeOpacity: .9,
            strokeDashArray: 0,
            fillOpacity: 1,
            discrete: [],
            shape: "circle",
            radius: 2,
            offsetX: 0,
            offsetY: 0,
            onClick: void 0,
            onDblClick: void 0,
            showNullDataPoints: !0,
            hover: { size: void 0, sizeOffset: 3 }
        },
        xaxis: {
            type: "datetime",
            categories: generateDate(),
            labels: {
                show: !0, trim: !1, minHeight: void 0, maxHeight: 120, style: { colors: colors.mutedColor, cssClass: "text-muted", fontFamily: base.defaultFontFamily }
            },
            axisBorder: { show: !1 }
        },
        yaxis: {
            labels: {
                show: !0, trim: !1, offsetX: -10, minHeight: void 0, maxHeight: 120,
                style: {
                    colors: colors.mutedColor, cssClass: "text-muted", fontFamily: base.defaultFontFamily
                }
            }
        },
        legend: {
            position: "top", fontFamily: base.defaultFontFamily, fontWeight: 400,
            labels: { colors: colors.mutedColor, useSeriesColors: !1 },
            markers: {
                width: 10, height: 10, strokeWidth: 0, strokeColor: colors.borderColor,
                fillColors: chartColors, radius: 6, customHTML: void 0, onClick: void 0, offsetX: 0, offsetY: 0
            },
            itemMargin: { horizontal: 10, vertical: 0 },
            onItemClick: { toggleDataSeries: !0 }, onItemHover: { highlightDataSeries: !0 }
        },
        grid: {
            show: !0, borderColor: colors.borderColor, strokeDashArray: 0,
            position: "back", xaxis: { lines: { show: !1 } },
            yaxis: { lines: { show: !0 } }, row: { colors: void 0, opacity: .5 }, column: { colors: void 0, opacity: .5 }, padding: { top: 0, right: 0, bottom: 0, left: 0 }
        }
    }, lineChartCtn = document.querySelector("#dailyTweet");
lineChartCtn && (lineChart = new ApexCharts(lineChartCtn, lineChartoptions)).render();


function padTo2Digits(num) {
    return num.toString().padStart(2, '0');
}

function formatDate(date = new Date()) {
    return [
        padTo2Digits(date.getMonth() + 1),
        padTo2Digits(date.getDate()),
        date.getFullYear()
    ].join('/');
}

function padTo2Digits(num) {
    return num.toString().padStart(2, '0');
}

function generateDate() {
    var result = [];
    x = 1;
    while (x <= 10) {
        var date = new Date();
        var subdate = date.setDate(date.getDate() - x);
        var newDate = new Date(subdate);
        result.push('"' + formatDate(newDate) + ' GMT"');
        x = x + 1;
    }
    return result;
}

function generateRandomNumber(min, max, loop) {
    var result = [];
    x = 1;
    while (x <= loop) {
        var data = Math.floor(Math.random() * (max - min) + min);
        result.push(data);
        x = x + 1;
    }
    return result;
}

// projected vote chart
var radialbarChart,
    radialbarOptions = {
        series: [71],
        chart: { height: 200, type: "radialBar" },
        plotOptions: {
            radialBar: {
                hollow: { size: "75%" },
                track: { background: colors.borderColor },
                dataLabels: {
                    show: !0,
                    name: {
                        fontSize: "0.875rem",
                        fontWeight: 400,
                        offsetY: -10, show: !0,
                        color: colors.mutedColor,
                        fontFamily: base.defaultFontFamily
                    },
                    value: {
                        formatter: function (e) { return parseInt(e) },
                        color: colors.headingColor,
                        fontSize: "1.53125rem",
                        fontWeight: 700,
                        fontFamily: base.defaultFontFamily,
                        offsetY: 5,
                        show: !0
                    },
                    total: {
                        show: !0,
                        fontSize: "0.875rem",
                        fontWeight: 400,
                        offsetY: -10,
                        label: "Percent",
                        color: colors.mutedColor,
                        fontFamily: base.defaultFontFamily
                    }
                }
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                shade: "light", type: "diagonal2", shadeIntensity: .2,
                gradientFromColors: [extend.primaryColorLighter],
                gradientToColors: [extend.primaryColorDark],
                inverseColors: !0,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [20, 100]
            }
        },
        stroke: { lineCap: "round" },
        labels: ["CPU"]
    },
    radialbar = document.querySelector("#radialbar-1");
radialbar && (radialbarChart = new ApexCharts(radialbar, radialbarOptions)).render();

// column chart
var columnChart,
    columnChartoptions = {
        series: [
            {
                name: "PVCs", data: [32]
            },
            {
                name: "Visitors", data: [7]
            }
        ],
        chart: {
            type: "bar",
            height: 350,
            stacked: !1,
            columnWidth: "70%",
            zoom: { enabled: !0 },
            toolbar: { show: !1 },
            background: "transparent"
        },
        dataLabels: { enabled: !1 },
        theme: { mode: colors.chartTheme },
        responsive: [
            {
                breakpoint: 480, options: { legend: { position: "bottom", offsetX: -10, offsetY: 0 } }
            }
        ],
        plotOptions: {
            bar: { horizontal: !1, columnWidth: "40%", radius: 30, enableShades: !1, endingShape: "rounded" }
        },
        xaxis: {
            type: "datetime",
            categories: ["01/01/2020 GMT"],
            labels: {
                show: !0,
                trim: !0,
                minHeight: void 0,
                maxHeight: 120,
                style: { colors: colors.mutedColor, cssClass: "text-muted", fontFamily: base.defaultFontFamily }
            },
            axisBorder: { show: !1 }
        },
        yaxis: {
            labels: {
                show: !0,
                trim: !1,
                offsetX: -10,
                minHeight: void 0,
                maxHeight: 120,
                style: {
                    colors: colors.mutedColor,
                    cssClass: "text-muted",
                    fontFamily: base.defaultFontFamily
                }
            }
        },
        legend: {
            position: "top",
            fontFamily: base.defaultFontFamily,
            fontWeight: 400,
            labels: { colors: colors.mutedColor, useSeriesColors: !1 },
            markers: {
                width: 10,
                height: 10,
                strokeWidth: 0,
                strokeColor: "#fff",
                fillColors: [extend.primaryColor, extend.primaryColorLighter],
                radius: 6, customHTML: void 0, onClick: void 0, offsetX: 0, offsetY: 0
            },
            itemMargin: {
                horizontal: 10, vertical: 0
            },
            onItemClick: { toggleDataSeries: !0 },
            onItemHover: { highlightDataSeries: !0 }
        },
        fill: {
            opacity: 1,
            colors: [base.primaryColor, extend.primaryColorLighter]
        },
        grid: {
            show: !0,
            borderColor: colors.borderColor,
            strokeDashArray: 0,
            position: "back",
            xaxis: { lines: { show: !1 } },
            yaxis: { lines: { show: !0 } },
            row: { colors: void 0, opacity: .5 },
            column: { colors: void 0, opacity: .5 },
            padding: { top: 0, right: 0, bottom: 0, left: 0 }
        }
    },
    columnChartCtn = document.querySelector("#columnChart-1");
columnChartCtn && (columnChart = new ApexCharts(columnChartCtn, columnChartoptions)).render();


// pieChart
var pieChartWidget,
    pieChartWidgetOptions = {
        series: [15191847, 1262978],
        chart: {
            type: "donut",
            height: 160,
            zoom: { enabled: !1 },
            toolbar: { show: !1 }
        },
        theme: {
            mode: colors.chartTheme
        },
        plotOptions: {
            pie: {
                donut: { size: "0" },
                expandOnClick: !1
            }
        },
        labels: ["YOUR PARTY", "OTHERS"],
        dataLabels: {
            enabled: !0,
            style: { fontSize: "10px", fontFamily: base.defaultFontFamily, fontWeight: "300" }
        },
        legend: { show: !1 },
        stroke: {
            show: !1, colors: extend.primaryColorLight, width: 1, dashArray: 0
        },
        fill: { opacity: 1, colors: chartColors }
    },
    pieChartWidgetCtn = document.querySelector("#pieChartWidget-11");
pieChartWidgetCtn && (pieChartWidget = new ApexCharts(pieChartWidgetCtn, pieChartWidgetOptions)).render();


// Tweets based on region
var columnChartWidgetRegion,
    columnChartWidgetoptionsRegion = {
        series: [
            { name: "Obi", data: generateRandomNumber(2400, 6000, 3) },
            { name: "Tinubu", data: generateRandomNumber(1400, 2000, 3) },
            { name: "Atiku", data: generateRandomNumber(1400, 2000, 3) },
        ],
        chart: {
            type: "bar",
            height: 316,
            stacked: !1,
            columnWidth: "70%",
            toolbar: { show: !1 },
            zoom: { enabled: !1 }
        },
        theme: { mode: colors.chartTheme },
        dataLabels: { enabled: !1 },
        plotOptions: {
            bar: { horizontal: !1, columnWidth: "10%", radius: 20, enableShades: !1, endingShape: "rounded" }
        },
        xaxis: {
            type: "text",
            categories: ["North Central", "North West", "South South", "North East", "South East", "South West"],
            labels: { show: 1 },
            axisTicks: { show: !1 },
            axisBorder: { show: !1 }
        },
        yaxis: {
            labels: { show: 1 }
        },
        legend: {
            position: 'top',
            show: 1,
        },
        labels: {
            colors: ['#3ad29f', '#E91E63'],
            useSeriesColors: true
        },
        fill: {
            opacity: 1,
            colors: ['#3ad29f', '#E91E63'],
            image: {
                src: ['../assets/images/atiku.jpg', '../assets/images/atiku.jpg', '../assets/images/atiku.jpg'],
                width: undefined,
                height: undefined
            },
        },
        grid: { show: 1, padding: { top: 0, right: 0, bottom: 0, left: -15 } }
    },
    columnChartWidgetCtnRegion = document.querySelector("#tweetsPerRegion");
columnChartWidgetCtnRegion && (columnChartWidgetRegion = new ApexCharts(columnChartWidgetCtnRegion, columnChartWidgetoptionsRegion)).render();


var columnChartWidget3,
    columnChartWidgetoptions3 = {
        series: [
            { name: "Positive", data: generateRandomNumber(2400, 6000, 3) },
            { name: "Negative", data: generateRandomNumber(1400, 2000, 3) }
        ],
        chart: {
            type: "bar",
            height: 316,
            stacked: !1,
            columnWidth: "70%",
            toolbar: { show: !1 },
            zoom: { enabled: !1 }
        },
        theme: { mode: colors.chartTheme },
        dataLabels: { enabled: !1 },
        plotOptions: {
            bar: { horizontal: !1, columnWidth: "10%", radius: 20, enableShades: !1, endingShape: "rounded" }
        },
        xaxis: {
            type: "text",
            categories: ["Obi", "Tinubu", "Atiku"],
            labels: { show: 1 },
            axisTicks: { show: !1 },
            axisBorder: { show: !1 }
        },
        yaxis: {
            labels: { show: 1 }
        },
        legend: {
            position: 'top',
            show: 1,
        },
        labels: {
            colors: ['#3ad29f', '#dc3545'],
            useSeriesColors: false
        },
        // fill: {
        //     opacity: 1,
        //     colors: ['#3ad29f', '#E91E63'],
        //     image: {
        //         src: ['../assets/images/atiku.jpg', '../assets/images/atiku.jpg', '../assets/images/atiku.jpg'],
        //         width: undefined,
        //         height: undefined
        //     },
        // },
        grid: { show: 1, padding: { top: 0, right: 0, bottom: 0, left: -15 } }
    },
    columnChartWidgetCtn3 = document.querySelector("#sentimentByCandidateChart-3");
columnChartWidgetCtn3 && (columnChartWidget3 = new ApexCharts(columnChartWidgetCtn3, columnChartWidgetoptions3)).render();


// chart 4
var columnChartWidget,
    columnChartWidgetoptions = {
        series: [
            { name: "Positive", data: generateRandomNumber(2400, 6000, 4) },
            { name: "Negative", data: generateRandomNumber(1400, 2000, 4) }
        ],
        chart: {
            type: "bar",
            height: 316,
            stacked: !1,
            columnWidth: "70%",
            toolbar: { show: !1 },
            zoom: { enabled: !1 }
        },
        theme: { mode: colors.chartTheme },
        dataLabels: { enabled: !1 },
        plotOptions: {
            bar: { horizontal: !1, columnWidth: "10%", radius: 20, enableShades: !1, endingShape: "rounded" }
        },
        xaxis: {
            type: "text",
            categories: ["Shehu", " Wali", "Sani Bello", "Sani wushishi"],
            labels: { show: 1 },
            axisTicks: { show: !1 },
            axisBorder: { show: !1 }
        },
        yaxis: {
            labels: { show: 1 }
        },
        legend: {
            position: 'top',
            show: 1,
        },
        labels: {
            colors: ['#3ad29f', '#dc3545'],
            useSeriesColors: false
        },
        grid: { show: 1, padding: { top: 0, right: 0, bottom: 0, left: -15 } }
    },
    columnChartWidgetCtn = document.querySelector("#sentimentByCandidateChart-4");
columnChartWidgetCtn && (columnChartWidget = new ApexCharts(columnChartWidgetCtn, columnChartWidgetoptions)).render();


// donutChart
var donutchart,
    donutChartOptions = {
        series: [178, 161, 99, 49],
        chart: {
            type: "donut", height: 305, zoom: { enabled: !1 }
        },
        theme: {
            mode: ['#343a40']
        },
        plotOptions: {
            pie: {
                donut: { size: "40%" },
                expandOnClick: 1
            }
        },
        labels: ["Shehu", "Wali", "Sani Bello", "Sani Wushishi"],
        legend: {
            position: "bottom", fontFamily: base.defaultFontFamily, fontWeight: 400,
            labels: { colors: ['#3ad29f', '#E91E63', '#1b68ff', '#1b68fe'], useSeriesColors: !1 },
            horizontalAlign: "left", fontFamily: base.defaultFontFamily,
            markers: { width: 10, height: 10, strokeWidth: 0, strokeColor: "#fff", radius: 6 },
            itemMargin: { horizontal: 10, vertical: 2 },
            onItemClick: { toggleDataSeries: !0 },
            onItemHover: { highlightDataSeries: !0 }
        },
        stroke: {
            colors: ['#3ad29f', '#E91E63', '#1b68ff', '#1b68fe'], width: 1
        },
    },
    donutchartCtn = document.querySelector("#mostPopularHashtag-4");
donutchartCtn && (donutchart = new ApexCharts(donutchartCtn, donutChartOptions)).render();

// daily tweets
// lineChart daily tweet
var lineChart,
    lineChartoptions = {
        series: [
            {
                name: "Shehu",
                data: generateRandomNumber(1, 1987, 10),
            },
            {
                name: "Wali",
                data: generateRandomNumber(1, 1789, 10),
            },
            {
                name: "Sani Bello",
                data: generateRandomNumber(1, 900, 10),
            },
            {
                name: "Sani Wushishi",
                data: generateRandomNumber(1, 497, 10),
            }
        ],
        chart: {
            height: 350, type: "line",
            background: !1, zoom: { enabled: !1 },
            toolbar: { show: !1 }
        },
        theme: {
            mode: colors.chartTheme
        },
        stroke: {
            show: !0,
            curve: "smooth",
            lineCap: "round",
            colors: chartColors,
            width: [3, 2, 3],
            dashArray: [0, 0, 0]
        },
        dataLabels: { enabled: !1 },
        responsive: [
            {
                breakpoint: 480, options: { legend: { position: "bottom", offsetX: -10, offsetY: 0 } }
            }
        ],
        markers: {
            size: 4,
            colors: base.primaryColor,
            strokeColors: colors.borderColor,
            strokeWidth: 2, strokeOpacity: .9,
            strokeDashArray: 0,
            fillOpacity: 1,
            discrete: [],
            shape: "circle",
            radius: 2,
            offsetX: 0,
            offsetY: 0,
            onClick: void 0,
            onDblClick: void 0,
            showNullDataPoints: !0,
            hover: { size: void 0, sizeOffset: 3 }
        },
        xaxis: {
            type: "datetime",
            categories: generateDate(),
            labels: {
                show: !0, trim: !1, minHeight: void 0, maxHeight: 120, style: { colors: colors.mutedColor, cssClass: "text-muted", fontFamily: base.defaultFontFamily }
            },
            axisBorder: { show: !1 }
        },
        yaxis: {
            labels: {
                show: !0, trim: !1, offsetX: -10, minHeight: void 0, maxHeight: 120,
                style: {
                    colors: colors.mutedColor, cssClass: "text-muted", fontFamily: base.defaultFontFamily
                }
            }
        },
        legend: {
            position: "top", fontFamily: base.defaultFontFamily, fontWeight: 400,
            labels: { colors: colors.mutedColor, useSeriesColors: !1 },
            markers: {
                width: 10, height: 10, strokeWidth: 0, strokeColor: colors.borderColor,
                fillColors: chartColors, radius: 6, customHTML: void 0, onClick: void 0, offsetX: 0, offsetY: 0
            },
            itemMargin: { horizontal: 10, vertical: 0 },
            onItemClick: { toggleDataSeries: !0 }, onItemHover: { highlightDataSeries: !0 }
        },
        grid: {
            show: !0, borderColor: colors.borderColor, strokeDashArray: 0,
            position: "back", xaxis: { lines: { show: !1 } },
            yaxis: { lines: { show: !0 } }, row: { colors: void 0, opacity: .5 }, column: { colors: void 0, opacity: .5 }, padding: { top: 0, right: 0, bottom: 0, left: 0 }
        }
    }, lineChartCtn = document.querySelector("#dailyTweet-4");
lineChartCtn && (lineChart = new ApexCharts(lineChartCtn, lineChartoptions)).render();