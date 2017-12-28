$('document').ready(function(){

  //Scrollbar
  $('#scrollbar-three').tinyscrollbar();
  
});

// Flot Charts
var updateInterval = 500;

$("#updateInterval").val(updateInterval).change(function () {
  var v = $(this).val();
  if (v && !isNaN(+v)) {
    updateInterval = +v;
    if (updateInterval < 1)
      updateInterval = 1;
    if (updateInterval > 2000)
      updateInterval = 2000;
    $(this).val("" + updateInterval);
  }
});

var data = [], totalPoints = 200;
function getRandomData() {
  if (data.length > 0)
    data = data.slice(1);

  // do a random walk
  while (data.length < totalPoints) {
    var prev = data.length > 0 ? data[data.length - 1] : 50;
    var y = prev + Math.random() * 10 - 5;
    if (y < 0)
      y = 0;
    if (y > 100)
      y = 100;
    data.push(y);
  }

  // zip the generated y values with the x values
  var res = [];
  for (var i = 0; i < data.length; ++i)
    res.push([i, data[i]])
  return res;
}

if($("#serverLoad").length){
  var options = {
    series: { shadowSize: 1 },
    lines: { show: true, lineWidth: 3, fill: true, fillColor: { colors: [ { opacity: 0.5 }, { opacity: 0.5 } ] }},
    yaxis: { min: 0, max: 200, tickFormatter: function (v) { return v + "%"; }},
    xaxis: { show: false },
    colors: ["#3660aa"],
    grid: { tickColor: "#f2f2f2",
      borderWidth: 0, 
    },
  };
  var plot = $.plot($("#serverLoad"), [ getRandomData() ], options);
  function update() {
    plot.setData([ getRandomData() ]);
    // since the axes don't change, we don't need to call plot.setupGrid()
    plot.draw();
    setTimeout(update, updateInterval);
  }
  update();
}

if($("#realtimechart").length){
  var options = {
    series: { shadowSize: 1 },
    lines: { lineWidth: 1, fill: true, fillColor: { colors: [ { opacity: 1 }, { opacity: 0.1 } ] }},
    yaxis: { min: 0, max: 200 },
    xaxis: { show: false },
    colors: ["#3660aa"],
    grid: { tickColor: "#eeeeee",
      borderWidth: 0 
    },
  };
  var plot = $.plot($("#realtimechart"), [ getRandomData() ], options);
  function update() {
    plot.setData([ getRandomData() ]);
    // since the axes don't change, we don't need to call plot.setupGrid()
    plot.draw();
    setTimeout(update, updateInterval);
  }
  update();
}


//Selection Charts

$(function() {

  var data = [{
    label: "Facebook",
    data: [[1999, 2], [2000, 32], [2001, 58], [2002, 38], [2003, 26], [2004, 163], [2005, 26], [2006, 49], [2007, 12], [2008, 45], [2009, 78], [2010, 10], [2011, 34], [2012, 58], [2013, 113]]
  },
  {
    label: "Google+",
    data: [[1999, 1], [2000, 8], [2001, 34], [2002, 6], [2003, 10], [2004, 17], [2005, 60], [2006, 21], [2007, 86], [2008, 19], [2009, 22], [2010, 74], [2011, 38], [2012, 13], [2013, 237]]
  }];

  var options = {
    series: {
      lines: { show: true,
        lineWidth: 2,
        fill: false,
        },
      points: { show: true, 
        lineWidth: 2 
        },
      shadowSize: 0
    },
    grid: { hoverable: true, 
      clickable: true, 
      tickColor: "#eeeeee",
      borderWidth: 0
    },
    legend: {
      noColumns: 3
    },
    colors: ["#3b5a9b", "#d3503e"],
     xaxis: {ticks:12, tickDecimals: 0},
     yaxis: {ticks:3, tickDecimals: 0},
    selection: {
      mode: "x"
    }
  };

  var placeholder = $("#selectionCharts");

  placeholder.bind("plotselected", function (event, ranges) {

    $("#selection").text(ranges.xaxis.from.toFixed(1) + " to " + ranges.xaxis.to.toFixed(1));

    var zoom = $("#zoom").attr("checked");

    if (zoom) {
      plot = $.plot(placeholder, data, $.extend(true, {}, options, {
        xaxis: {
          min: ranges.xaxis.from,
          max: ranges.xaxis.to
        }
      }));
    }
  });

  placeholder.bind("plotunselected", function (event) {
    $("#selection").text("");
  });

  var plot = $.plot(placeholder, data, options);

  $("#clearSelection").click(function () {
    plot.clearSelection();
  });

  $("#setSelection").click(function () {
    plot.setSelection({
      xaxis: {
        from: 1994,
        to: 1995
      }
    });
  });
  // Add the Flot version string to the footer
  $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
});


// Calendar
$(document).ready(function() {

  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
  
  var calendar = $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    selectable: true,
    selectHelper: true,
    select: function(start, end, allDay) {
      var title = prompt('Event Title:');
      if (title) {
        calendar.fullCalendar('renderEvent',
          {
            title: title,
            start: start,
            end: end,
            allDay: allDay
          },
          true // make the event "stick"
        );
      }
      calendar.fullCalendar('unselect');
    },
    editable: true,
    events: [
      {
        title: 'All Day Event',
        start: new Date(y, m, 1)
      },
      {
        id: 999,
        title: 'Repeating Event',
        start: new Date(y, m, d-3, 16, 0),
        allDay: false
      },
      {
        title: 'Meeting',
        start: new Date(y, m, d, 10, 30),
        allDay: false
      },
      {
        title: 'Lunch',
        start: new Date(y, m, d, 12, 0),
        end: new Date(y, m, d, 14, 0),
        allDay: false
      },
      {
        title: 'Birthday Party',
        start: new Date(y, m, d+1, 19, 0),
        end: new Date(y, m, d+1, 22, 30),
        allDay: false
      }
    ]
  });
});

// Morris Charts and Graphs
function socialGraph(){
  Morris.Donut({
    element: 'socialGraph',
    data: [
      {value: 47, label: 'Facebook'},
      {value: 28, label: 'Twitter'},
      {value: 17, label: 'Google+'},
      {value: 8, label: 'Linkedin'}
    ],
    labelColor: '#0b62a4',
    formatter: function (x) { return x + "%"}
  });
}
$(document).ready(function () {
  socialGraph();
});

//Resize charts and graphs on window resize
$(document).ready(function () {
  $(window).resize(function(){
    socialGraph();
  });
});
