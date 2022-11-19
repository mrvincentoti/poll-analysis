<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Salvaafrika - Election Analytics</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="{{asset('css/simplebar.css')}}">
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="{{asset('css/feather.css')}}">
  <link rel="stylesheet" href="{{asset('css/select2.css')}}">
  <link rel="stylesheet" href="{{asset('css/dropzone.css')}}">
  <link rel="stylesheet" href="{{asset('css/uppy.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery.steps.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery.timepicker.css')}}">
  <link rel="stylesheet" href="{{asset('css/quill.snow.css')}}">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
  <!-- App CSS -->
  <link rel="stylesheet" href="{{asset('css/app-light.css')}}" id="lightTheme" disabled>
  <link rel="stylesheet" href="{{asset('css/app-dark.css')}}" id="darkTheme">

  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body class="horizontal dark  ">
  <div class="wrapper">
    @include('partials.nav')
    @yield('content')
  </div> <!-- .wrapper -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/moment.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/simplebar.min.js')}}"></script>
  <script src="{{asset('js/daterangepicker.js')}}"></script>
  <script src="{{asset('js/jquery.stickOnScroll.js')}}"></script>
  <script src="{{asset('js/tinycolor-min.js')}}"></script>
  <script src="{{asset('js/config.js')}}"></script>
  <script src="{{asset('js/d3.min.js')}}"></script>
  <script src="{{asset('js/topojson.min.js')}}"></script>
  <script src="{{asset('js/datamaps.all.min.js')}}"></script>
  <script src="{{asset('js/datamaps-zoomto.js')}}"></script>
  <script src="{{asset('js/datamaps.custom.js')}}"></script>
  <script src="{{asset('js/Chart.min.js')}}"></script>
  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="{{asset('js/gauge.min.js')}}"></script>
  <script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
  <script src="{{asset('js/apexcharts.min.js')}}"></script>
  <script src="{{asset('js/apexcharts.custom.js')}}"></script>
  <script src="{{asset('js/jquery.mask.min.js')}}"></script>
  <script src="{{asset('js/select2.min.js')}}"></script>
  <script src="{{asset('js/jquery.steps.min.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/jquery.timepicker.js')}}"></script>
  <script src="{{asset('js/dropzone.min.js')}}"></script>
  <script src="{{asset('js/uppy.min.js')}}"></script>
  <script src="{{asset('js/quill.min.js')}}"></script>

  <!--script src="js/anychart-core.min.js" type="text/javascript"></script-->
  <script src="{{asset('js/anychart-core.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/anychart-base.min.js')}}"></script>
  <script src="{{asset('js/anychart-cartesian.min.js')}}"></script>
  <script src="{{asset('js/anychart-map.min.js')}}" type="text/javascript"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="{{asset('js/nigeria.js')}}"></script>
  <script src="{{asset('js/proj4.js')}}" data-export="true"></script>
  <script src="{{asset('js/facebook.js')}}" data-export="true"></script>
  <script src="{{asset('js/facebook-region.js')}}" data-export="true"></script>
  <script>
    // create data
    // create a data set
    var data = anychart.data.set([
      ["PDP", 11262978, 12500, "#dc3545", "#dc3545"],
      ["APC", 15191847, 15000, "#1b68ff"],
      ["OTHERS", 869758, 16500, "#3ad29f", "#3ad29f", null, {
        enabled: true
      }],
    ]);

    // map the data
    var seriesData_1 = data.mapAs({
      x: 0,
      value: 1,
      fill: 3,
      stroke: 5,
      label: 6
    });


    // create a chart
    chart = anychart.column();

    chart.background().fill({
      keys: ["#343a40", "#343a40", "#343a40"],
      angle: 130,
    });
    // create series and set the data
    var series1 = chart.column(seriesData_1);

    // enable and configure labels on the series
    series1.labels(true);
    series1.labels().fontColor("white");
    series1.labels().fontWeight(900);
    series1.labels().format("{%value} Votes");


    // set the container id
    chart.container("donutChartWidget-1");

    // initiate drawing the chart
    chart.draw();
  </script>
  <script>
    anychart.onDocumentReady(function() {
      var data = [{
          "id": "NG.BO",
          "value": 2315956,
          "state": "Borno"
        },
        {
          "id": "NG.AB",
          "value": 2006061,
          "state": "Aba",
          "lgas": 17,
          "wards": 184
        },
        {
          "id": "NG.AK",
          "value": 2119727,
          "state": "Akwa Ibom"
        },
        {
          "id": "NG.IM",
          "value": 2272293,
          "state": "Imo"
        },
        {
          "id": "NG.RI",
          "value": 3094311,
          "state": "Rivers"
        },
        {
          "id": "NG.BY",
          "value": 923182,
          "state": "Bayelsa"
        },
        {
          "id": "NG.BE",
          "value": 2480131,
          "state": "Benue"
        },
        {
          "id": "NG.CR",
          "value": 1527289,
          "state": "Cross River"
        },
        {
          "id": "NG.TA",
          "value": 1777105,
          "state": "Taraba"
        },
        {
          "id": "NG.KW",
          "value": 1406457,
          "state": "Kwara"
        },
        {
          "id": "NG.LA",
          "value": 6569997,
          "state": "Lagos"
        },
        {
          "id": "NG.NI",
          "value": 2399035,
          "state": "Niger"
        },
        {
          "id": "NG.OG",
          "value": 2375003,
          "state": "Ogun"
        },
        {
          "id": "NG.ON",
          "value": 1873010,
          "state": "Ondo"
        },
        {
          "id": "NG.EK",
          "value": 969675,
          "state": "Ekiti"
        },
        {
          "id": "NG.OS",
          "value": 1680498,
          "state": "Osun"
        },
        {
          "id": "NG.OY",
          "value": 2653306,
          "state": "Oyo"
        },
        {
          "id": "NG.AN",
          "value": 2447896,
          "state": "Anambra"
        },
        {
          "id": "NG.BA",
          "value": 2462843,
          "state": "Bauchi"
        },
        {
          "id": "NG.GO",
          "value": 1394393,
          "state": "Gombe"
        },
        {
          "id": "NG.DE",
          "value": 2845274,
          "state": "Delta"
        },
        {
          "id": "NG.ED",
          "value": 2210534,
          "state": "Edo"
        },
        {
          "id": "NG.EN",
          "value": 1944016,
          "state": "Enugu"
        },
        {
          "id": "NG.EB",
          "value": 1396730,
          "state": "Ebonyi"
        },
        {
          "id": "NG.KD",
          "value": 4073944,
          "state": "Kaduna"
        },
        {
          "id": "NG.KO",
          "value": 1646350,
          "state": "Kogi"
        },
        {
          "id": "NG.PL",
          "value": 2480455,
          "state": "Plateu"
        },
        {
          "id": "NG.NA",
          "value": 1707786,
          "state": "Nasarawa"
        },
        {
          "id": "NG.JI",
          "value": 2110874,
          "state": "Jigawa"
        },
        {
          "id": "NG.KN",
          "value": 5227125,
          "state": "Kano"
        },
        {
          "id": "NG.KT",
          "value": 3230230,
          "state": "Katsina"
        },
        {
          "id": "NG.SO",
          "value": 1903166,
          "state": "Sokoto"
        },
        {
          "id": "NG.ZA",
          "value": 1717128,
          "state": "Zamfara"
        },
        {
          "id": "NG.YO",
          "value": 1365913,
          "state": "Yobe"
        },
        {
          "id": "NG.KE",
          "value": 1807231,
          "state": "Kebbi"
        },
        {
          "id": "NG.AD",
          "value": 1973083,
          "state": "Adamawa"
        },
        {
          "id": "NG.FC",
          "value": 1344856,
          "state": "FCT"
        }
      ];

      //
      var map = anychart.map();
      map.geoData(anychart.maps.nigeria);

      // set the series
      var series = map.choropleth(data);

      // disable labels
      series.labels(false);

      // set the container
      map.container('container-1');
      map.draw();
    });
  </script>
  <script>
    $('.select2').select2({
      theme: 'bootstrap4',
    });
    $('.select2-multi').select2({
      multiple: true,
      theme: 'bootstrap4',
    });
    $('.drgpicker').daterangepicker({
      singleDatePicker: true,
      timePicker: false,
      showDropdowns: true,
      locale: {
        format: 'MM/DD/YYYY'
      }
    });
    $('.time-input').timepicker({
      'scrollDefault': 'now',
      'zindex': '9999' /* fix modal open */
    });
    /** date range picker */
    if ($('.datetimes').length) {
      $('.datetimes').daterangepicker({
        timePicker: true,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
          format: 'M/DD hh:mm A'
        }
      });
    }
    var start = moment().subtract(10, 'days');
    var end = moment();

    function cb(start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker({
      startDate: start,
      endDate: end,
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      }
    }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000", {
      placeholder: "__/__/____"
    });
    $('.input-zip').mask('00000-000', {
      placeholder: "____-___"
    });
    $('.input-money').mask("#.##0,00", {
      reverse: true
    });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/,
          optional: true
        }
      },
      placeholder: "___.___.___.___"
    });
    // editor
    var editor = document.getElementById('editor');
    if (editor) {
      var toolbarOptions = [
        [{
          'font': []
        }],
        [{
          'header': [1, 2, 3, 4, 5, 6, false]
        }],
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        [{
            'header': 1
          },
          {
            'header': 2
          }
        ],
        [{
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }
        ],
        [{
            'script': 'sub'
          },
          {
            'script': 'super'
          }
        ],
        [{
            'indent': '-1'
          },
          {
            'indent': '+1'
          }
        ], // outdent/indent
        [{
          'direction': 'rtl'
        }], // text direction
        [{
            'color': []
          },
          {
            'background': []
          }
        ], // dropdown with defaults from theme
        [{
          'align': []
        }],
        ['clean'] // remove formatting button
      ];
      var quill = new Quill(editor, {
        modules: {
          toolbar: toolbarOptions
        },
        theme: 'snow'
      });
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
  <script>
    var uptarg = document.getElementById('drag-drop-area');
    if (uptarg) {
      var uppy = Uppy.Core().use(Uppy.Dashboard, {
        inline: true,
        target: uptarg,
        proudlyDisplayPoweredByUppy: false,
        theme: 'dark',
        width: 770,
        height: 210,
        plugins: ['Webcam']
      }).use(Uppy.Tus, {
        endpoint: 'https://master.tus.io/files/'
      });
      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      });
    }
  </script>
  <script src="{{asset('js/apps.js')}}"></script>
  <script src="{{asset('js/statedata.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
  <script src="{{asset('js/custom-chart.js')}}"></script>
  <script src="{{asset('js/region.js')}}"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
  </script>

  <script>
    // create data
    var data = [{
        x: "PDP",
        value: 1262978,
        normal: {
          fill: "#dc3545"
        }
      },
      {
        x: "APC",
        value: 15191847
      },
      {
        x: "OTHERS",
        value: 869758,
        normal: {
          fill: "#3ad29f"
        }
      }
    ];

    // create a chart and set the data
    pie = anychart.pie(data);

    // background
    pie.background().fill({
      keys: ["#343a40", "#343a40", "#343a40"],
      angle: 130,
    });

    // set the container id
    pie.container("pieChartWidget-1");

    // initiate drawing the chart
    pie.draw();
  </script>

  <script>
    var stateData = electionData;
    $('document').ready(function() {
      $.each(stateData, function(key, value) {
        $("#pvcdata").append('<div class="row align-items-center my-2"><div class="col"><p class="mb-0">' + value.state + '</p><span class="my-0 text-muted small">' + ((value.value / 83696863) * 100).toFixed(2) + '%</span></div><div class="col-auto text-right"><span>' + value.value + '</span><br><div class="progress mt-2" style="height: 4px;"><div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div></div></div></div>');
      });
    });
  </script>

  <script>
    // create a data set
    var sentimentByCandidate = anychart.data.set([
      ["Obi", 1600, 387, "#3ad29f", "#ff0000", null, {
        enabled: true
      }],
      ["Tinubu", 1200, 589, "#3ad29f", "#ff0000", null, {
        enabled: true
      }],
      ["Atiku", 560, 247, "#3ad29f", "#ff0000", null, {
        enabled: true
      }]
    ]);

    // map the data
    var seriesData_1 = sentimentByCandidate.mapAs({
      x: 0,
      value: 1,
      fill: 3,
      stroke: 5,
      label: 6
    });

    var seriesData_2 = sentimentByCandidate.mapAs({
      x: 0,
      value: 2,
      fill: 4,
      stroke: 5,
      label: 6
    });

    // create a chart
    sentimentByCandidateChart = anychart.column();

    // create series and set the data
    var serisentimentByCandidateChartes1 = sentimentByCandidateChart.column(seriesData_1);
    var sentimentByCandidateChart2 = sentimentByCandidateChart.column(seriesData_2);

    sentimentByCandidateChart.container('sentimentByCandidateChart');

    // background
    sentimentByCandidateChart.background().fill({
      keys: ["#343a40", "#343a40", "#343a40"],
      angle: 130,
    });

    // set the padding between columns
    sentimentByCandidateChart.barsPadding(-0.2);

    // set the padding between column groups
    sentimentByCandidateChart.barGroupsPadding(2);
    sentimentByCandidateChart.draw();
  </script>
  <script>
    var options = {
      series: [{
        name: 'Net Profit',
        data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 90, 39, 67, 44, 55, 57, 56, 61, 58, 63, 60, 66, 90, 39, 67, 44, 55, 57, 56, 61, 58, 63, 60, 66, 90, 39, 67]
      }],
      chart: {
        type: 'bar',
        height: 350
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '30%',
          endingShape: 'rounded'
        },
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
      },
      xaxis: {
        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Oct', 'Nov', 'Dec',
          'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Oct', 'Nov', 'Dec',
          'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Oct', 'Nov', 'Dec'
        ],
      },
      yaxis: {
        title: {
          text: '$ (thousands)'
        }
      },
      fill: {
        opacity: 1
      },
      tooltip: {
        y: {
          formatter: function(val) {
            return "$ " + val + " thousands"
          }
        }
      }
    };

    var chart = new ApexCharts(document.querySelector("#demographics"), options);
    chart.render();
  </script>
  <!--/comment percentage-->
  <script>
    var total = "<?php echo isset($location->total) ? $location->total : ''; ?>";
    var positive = "<?php echo isset($location->positive) ? $location->positive : ''; ?>";
    var negative = "<?php echo isset($location->negative) ? $location->negative : ''; ?>";
    var neutral = "<?php echo isset($location->neutral) ? $location->neutral : ''; ?>";
    var stateName = "<?php echo isset($location->location_name) ? $location->location_name : ''; ?>";

    var options = {
      series: [Math.floor((negative / total) * 100), Math.floor((positive / total) * 100), Math.floor((neutral / total) * 100)],
      fill: {
        colors: ['#F44336', '#00e396', '#ccc']
      },
      chart: {
        height: 350,
        type: 'radialBar',
      },
      plotOptions: {
        radialBar: {
          dataLabels: {
            name: {
              fontSize: '22px',
            },
            value: {
              fontSize: '16px',
            },
            total: {
              show: true,
              label: 'Total',
              formatter: function(w) {
                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                return total
              }
            }
          }
        }
      },
      labels: ['Negative', 'Positive', 'Neutral'],
    };

    var chart = new ApexCharts(document.querySelector("#total-comments"), options);
    chart.render();
  </script>
  <!--/comment count section-->
  <script>
    var total = "<?php echo isset($location->total) ? $location->total : ''; ?>";
    var positive = "<?php echo isset($location->positive) ? $location->positive : ''; ?>";
    var negative = "<?php echo isset($location->negative) ? $location->negative : ''; ?>";
    var neutral = "<?php echo isset($location->neutral) ? $location->neutral : ''; ?>";
    var stateName = "<?php echo isset($location->location_name) ? $location->location_name : ''; ?>";

    var options = {
      series: [{
        name: 'Negative',
        data: [negative]
      }, {
        name: 'Positive',
        data: [positive]
      }, {
        name: 'Neutral',
        data: [neutral]
      }],
      colors: ['#F44336', '#00e396', '#ccc'],
      chart: {
        type: 'bar',
        height: 350
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '20%',
          endingShape: 'rounded'
        },
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
      },
      xaxis: {
        categories: [stateName],
      },
      yaxis: {
        title: {
          text: ''
        }
      },
      fill: {
        opacity: 1
      },
      tooltip: {
        y: {
          formatter: function(val) {
            return " " + val + " "
          }
        }
      }
    };

    var chart = new ApexCharts(document.querySelector("#comment-count"), options);
    chart.render();
  </script>
  <!--/State distributions-->
  <script>
    $(document).ready(function() {
      var id = "<?php echo isset($location->id) ? $location->id : ''; ?>";
      $.ajax({
        type: "GET",
        cache: false,
        url: "/salvafrika/admin/getStateData/" + id,
        success: function(data) {
          var pos = []
          var neg = []
          var neu = []
          pos.push(data['nc'].split(",")[0])
          neg.push(data['nc'].split(",")[1])
          neu.push(data['nc'].split(",")[2])

          pos.push(data['nw'].split(",")[0])
          neg.push(data['nw'].split(",")[1])
          neu.push(data['nw'].split(",")[2])

          pos.push(data['ss'].split(",")[0])
          neg.push(data['ss'].split(",")[1])
          neu.push(data['ss'].split(",")[2])

          pos.push(data['ne'].split(",")[0])
          neg.push(data['ne'].split(",")[1])
          neu.push(data['ne'].split(",")[2])

          pos.push(data['se'].split(",")[0])
          neg.push(data['se'].split(",")[1])
          neu.push(data['se'].split(",")[2])

          pos.push(data['sw'].split(",")[0])
          neg.push(data['sw'].split(",")[1])
          neu.push(data['sw'].split(",")[2])

          var options = {
            series: [{
                name: 'Negative',
                data: neg
              }, {
                name: 'Positive',
                data: pos
              },
              {
                name: 'Neutral',
                data: neu
              }
            ],
            colors: ['#F44336', '#00E396', '#ccc'],
            chart: {
              type: 'bar',
              height: 350
            },
            plotOptions: {
              bar: {
                horizontal: false,
                columnWidth: '25%',
                endingShape: 'rounded'
              },
            },
            dataLabels: {
              enabled: false
            },
            stroke: {
              show: true,
              width: 2,
              colors: ['transparent']
            },
            xaxis: {
              categories: ['North Central', 'North West', 'South South', 'North East', 'South East', 'South West'],
            },
            yaxis: {
              title: {
                text: ''
              }
            },
            fill: {
              opacity: 1
            },
            tooltip: {
              y: {
                formatter: function(val) {
                  return " " + val + " "
                }
              }
            }
          };

          var chart = new ApexCharts(document.querySelector("#demo-distro"), options);
          chart.render();
        }
      });
    });
  </script>
</body>

</html>