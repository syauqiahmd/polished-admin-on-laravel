$("#chartjs-doughnut").ready(function () {
  if (!$("#chartjs-doughnut").length) return;
  var ctxDoughnut = document.getElementById('chartjs-doughnut')
  var myDoughnutChart = new Chart(ctxDoughnut, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: [10, 20, 30],
        backgroundColor: ['#24235C', '#47467A', 'indigo']
      }],
      labels: ['April', 'May', 'June']
    }
  })
})
