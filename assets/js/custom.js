$(function(){

// customized
$('#datepicker-range, #datepicker-component, #datepicker-component2').datepicker();

$('#datepicker-embeded').datepicker({
  daysOfWeekDisabled: "0,1"
});

$('#daterangepicker').daterangepicker({
  timePicker: true,
  timePickerIncrement: 30,
  format: 'MM/DD/YYYY h:mm A'
}, function(start, end, label) {
  console.log(start.toISOString(), end.toISOString(), label);
});

$("#TelpPas").mask("(99) 999-9999-9999");
$("#TelpDokter").mask("(99) 999-9999-9999");
$("#TelpPeg").mask("(99) 999-9999-9999");
$("#Dosis").mask("9x9");
$('.cs-placeholder').text('Pilih');

$('#jk').val('L');
  //Autonumeric plug-in - automatic addition of dollar signs,etc controlled by tag attributes
  $('.autonumeric').autoNumeric('init');
  
  // $('#JamMulai').timepicker().on('show.timepicker', function(e) {
  //   // pengaturan AM/PM di js timepicker bagian showMeridian
  //   var widget = $('.bootstrap-timepicker-widget');
  //   widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
  //   widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
  // });

  // $('#JamSelesai').timepicker().on('show.timepicker', function(e) {
  //   // pengaturan AM/PM di js timepicker bagian showMeridian
  //   var widget = $('.bootstrap-timepicker-widget');
  //   widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
  //   widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
  // });

  $.extend( true, $.fn.dataTable.defaults, {
    language: {"url": "../../assets/json/Indonesian.json"}
  });

  $('#table').DataTable({
    "language": {
      "url": "../../assets/json/Indonesian.json"
    }
  });
  $('#table2').DataTable({
    "language": {
      "url": "../../assets/json/Indonesian.json"
    }
  });
  $('#table3').DataTable({
    "language": {
      "url": "../../assets/json/Indonesian.json"
    }
  });

  // Draws a realtime Rickshaw Chart
  (function() {
    var container = '#rickshaw-realtime';
    var seriesData = [
    [],
    [],
    []
    ];
    // var url = "./?/home/getpasien1";
    // $.getJSON(url,function(data){
    //   $.each(data,function(i,j){
    //     series.addData(j.no)
    //   });
    // });

    var random = new Rickshaw.Fixtures.RandomData(50);
    for (var i = 0; i < 50; i++) {
      random.addData(seriesData);
    }
    var graph = new Rickshaw.Graph({
      element: document.querySelector(container),
      height: 500,
      width: $(container).width(),
      renderer: 'area',
      padding: {
        top: 0.5
      },
      series: [{
        data: seriesData[0],
                    color: $.Pages.getColor('success-light', .5), // Get Pages contextual color
                    name: 'DB Server'
                  }, {
                    data: seriesData[1],
                    color: $.Pages.getColor('master-light'), // Get Pages contextual color
                    name: 'Web Server'
                  }]
                });

    var y_axis = new Rickshaw.Graph.Axis.Y({
      graph: graph,
      orientation: 'right',
      tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
      element: document.getElementById('rickshaw-realtime_y_axis'),
    });

    var hoverDetail = new Rickshaw.Graph.HoverDetail({
      graph: graph
    });

            // Update the graph with realtime data. 
            setInterval(function() {
              random.removeData(seriesData);
              random.addData(seriesData);
              graph.update();
            }, 1000);

            d3.selectAll('#rickshaw-realtime_y_axis .tick.major line').attr('x2', '7');
            d3.selectAll('#rickshaw-realtime_y_axis .tick.major text').attr('x', '12');

            $(window).resize(function() {
              graph.configure({
                width: $(container).width(),
                height: 500
              });
              graph.render()
            });

            $(container).data('chart', graph);

          })();


        // Draws a stacked bar chart using Rickshaw
        (function() {
          var container = '#rickshaw-stacked-bars';

          var seriesData = [
          [],
          []
          ];
          var random = new Rickshaw.Fixtures.RandomData(40);
          for (var i = 0; i < 40; i++) {
            random.addData(seriesData);
          }

          var graph = new Rickshaw.Graph({
            renderer: 'bar',
            element: document.querySelector(container),
            height: 500,
            width: 700,
            padding: {
              top: 0.5
            },
            series: [{
              data: seriesData[0],
                    color: $.Pages.getColor('complete-light'), // Get Pages contextual color
                    name: "New users"
                  }, {
                    data: seriesData[1],
                    color: $.Pages.getColor('master-light'), // Get Pages contextual color
                    name: "Returning users"

                  }]

                });

          var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
            formatter: function(series, x, y) {
              var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
              var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
              var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
              return content;
            }
          });

          graph.render();


          $(window).resize(function() {
            graph.configure({
              width: $(container).width(),
              height: 500
            });
            graph.render()
          });

          $(container).data('chart', graph);

        })();


        // Renders an area chart with a slider option using Rickshaw
        (function() {

          var seriesData = [
          []
          ];
          var random = new Rickshaw.Fixtures.RandomData(50);

          for (var i = 0; i < 75; i++) {
            random.addData(seriesData);
          }

          var graph = new Rickshaw.Graph({
            element: document.querySelector("#rickshaw-slider .chart"),
            renderer: 'multi',
            dotSize: 5,
            height: 500,
            width: 700,
            padding: {
              left: 0.5
            },
            series: [{
              name: 'Temperature',
              data: seriesData.shift(),
                    color: $.Pages.getColor('success-light', .5), // Get Pages contextual color
                    opacity: 0,
                    renderer: 'stack'
                  }]
                });

          var y_ticks = new Rickshaw.Graph.Axis.Y({
            graph: graph,
            orientation: 'left',
            pixelsPerTick: 50,
            tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
            element: document.querySelector('#rickshaw-slider .y_axis')
          });

          var x_ticks = new Rickshaw.Graph.Axis.Time({
            graph: graph,
            timeFixture: new Rickshaw.Fixtures.Time()
          });

          var slider = new Rickshaw.Graph.RangeSlider.Preview({
            graph: graph,
            height: 100,
            element: document.querySelector('#rickshaw-slider .slider')
          });

          var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
            formatter: function(series, x, y) {
              var date = '<span class="date">' + new Date(x * 1000).toUTCString() + '</span>';
              var swatch = '<span class="detail_swatch" style="background-color: ' + series.color + '"></span>';
              var content = swatch + series.name + ": " + parseInt(y) + '<br>' + date;
              return content;
            }
          });

          graph.render();

          $(window).resize(function() {
            graph.configure({
              width: $('#rickshaw-slider .chart').width(),
              height: $('#rickshaw-slider .chart').height()
            });

            graph.render()
          });

          $('#rickshaw-slider .rickshaw-chart').data('chart', graph);

        })();



      });

