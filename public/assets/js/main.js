var exampleData = {
  'Sai Gold': 55,
  'Ananya Jewels': 99,
   'SMBG': 101,
  'Bijou Raayan': 80,
  'Rohini Diamonds': 26,
  'DFDTC': 55,
  'Shree Diamonds': 30,
  'Marlecha Diamonds': 95,
  'NSSJ': 48,
  'Panchrathnam': 55
};

var exampleOptions = {
  'height': 250,
  'title': '',
  'width': 1,
  'fixPadding': 1,
  'barFont': [0, 12, "bold"],
  'labelFont': [0, 9, 0]
};

graphite(exampleData, exampleOptions, example);






window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,  
  title:{
    //text: "Company Revenue by Year"
  },
  axisY: {
    //title: "Balance History",
    valueFormatString: "#0,,.",
    suffix: "mn",
    prefix: "₹"
  },
  data: [{
    type: "splineArea",
    color: "#06094c",
    markerSize: 5,
    xValueFormatString: "YYYY",
    yValueFormatString: "$#,##0.##",
    dataPoints: [
      { x: new Date(2000, 0), y: 3289000 },
      { x: new Date(2001, 0), y: 3830000 },
      { x: new Date(2002, 0), y: 2009000 },
      { x: new Date(2003, 0), y: 2840000 },
      { x: new Date(2004, 0), y: 2396000 },
      { x: new Date(2005, 0), y: 1613000 },
      { x: new Date(2006, 0), y: 2821000 },
      { x: new Date(2007, 0), y: 2000000 },
      { x: new Date(2008, 0), y: 1397000 },
      { x: new Date(2009, 0), y: 2506000 },
      { x: new Date(2010, 0), y: 2798000 },
      { x: new Date(2011, 0), y: 3386000 },
      { x: new Date(2012, 0), y: 6704000},
      { x: new Date(2013, 0), y: 6026000 },
      { x: new Date(2014, 0), y: 2394000 },
      { x: new Date(2015, 0), y: 1872000 },
      { x: new Date(2016, 0), y: 2140000 }
    ]
  }]
  });
chart.render();

}





