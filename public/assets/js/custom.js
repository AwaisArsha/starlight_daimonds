
// $(".navbar-toggler").click(function(){
//   $(".navbar-toggler").toggleClass("showtoggle");
// });	


  $(document).ready(function(){
    $("#mobile_menu").click(function(){
        $("#mobile_menu_dv").slideToggle();
    });
});



// // Chart 1

// /* Chart JS https://www.chartjs.org */
// const ctx = document.querySelector("#myChart").getContext("2d");
// const ctx2 = document.querySelector("#myChart2").getContext("2d");

// let delayed;

// // Gradient fill
// let gradient = ctx.createLinearGradient(0, 0, 0, 400); // from the bottom to the top
// gradient.addColorStop(0, "#B76E79");
// gradient.addColorStop(1, "#ffcfd6");

// const labels = [
//   "2012",
//   "2013",
//   "2014",
//   "2015",
//   "2016",
//   "2017",
//   "2018",
//   "2019",
//   "2020"
// ];

// const data = {
//   labels,
//   datasets: [
//     {
//       data: [211, 326, 165, 350, 420, 370, 500, 375, 415],
//       label: "Order Book",
//       fill: true,
//       backgroundColor: gradient,
//       borderColor: "#fff",
//       pointBackgroundColor: "rgba(189,195,199,.4)"
//     }
//   ]
// };

// const config = {
//   type: "line",
//   data: data,
//   options: {
//     radius: 5,
//     hitRadius: 30,
//     hoverRadius: 12,
//     responsive: true,
//     animation: {
//       // from https://www.chartjs.org/docs/latest/samples/animations/delay.html  --> Delay Tab
//       onComplete: () => {
//         delayed = true;
//       },
//       delay: (context) => {
//         let delay = 0;
//         if (context.type === "data" && context.mode === "default" && !delayed) {
//           delay = context.dataIndex * 300 + context.datasetIndex * 100;
//         }
//         return delay;
//       }
//     },
//     scales: {
//       y: {
//         ticks: {
//           callback: function (value) {
//             return "₹" + value + "m";
//           }
//         }
//       }
//     }
//   }
// };

// const myChart = new Chart(ctx, config);














const ctx = document.getElementById('myChart');
const ctx2 = document.getElementById('myChart2');
const ctx3 = document.getElementById('myChart3');
const ctx4 = document.getElementById('myChart4');


const myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['211', '311', '411', '511', '600', '700'],
    datasets: [{
      label: 'Order Book',
      data: [12, 19, 3, 5, 2, 3],
      fill: true,
     backgroundColor: "#06094c",
     pointBackgroundColor: "#363b71",
      borderWidth: 1,
    }]
  },
});

const myChart2 = new Chart(ctx2, {
  type: 'line',
  data: {
   labels: ['211', '311', '411', '511', '600', '700'],
    datasets: [{
      label: 'Total Order',
      data: [12, 19, 3, 5, 2, 3],
      fill: true,
      backgroundColor: "#06094c",
      pointBackgroundColor: "#363b71",
      borderWidth: 1,
    }]
  },
});


const myChart3 = new Chart(ctx3, {
  type: 'line',
  data: {
   labels: ['211', '311', '411', '511', '600', '700'],
    datasets: [{
      label: 'Products',
      data: [12, 19, 3, 5, 2, 3],
      fill: true,
      backgroundColor: "#06094c",
      pointBackgroundColor: "#363b71",
      borderWidth: 1,
    }]
  },
});


const myChart4 = new Chart(ctx4, {
  type: 'line',
  data: {
   labels: ['211', '311', '411', '511', '600', '700'],
    datasets: [{
      label: 'Customers',
      data: [12, 19, 3, 5, 2, 3],
      fill: true,
      backgroundColor: "#06094c",
      pointBackgroundColor: "#363b71",
      borderWidth: 1,
    }]
  },
});
