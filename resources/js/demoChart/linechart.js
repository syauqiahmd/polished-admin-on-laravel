$("#chartjs-line").ready(function () {
  if (!$("#chartjs-line").length) return;
  var ctxLine = document.getElementById('chartjs-line')
  var dataLine = {
    labels: ["Jan", "Feb", "March", "April", "May", "June"],
    datasets: [{
      label: 'Purchase',
      data: [20, 10, 40, 50, 75, 80],
      borderColor: '#B5BCF3'
    }, {
      label: 'Add to Cart',
      data: [40, 30, 54, 60, 60, 99],
      borderColor: '#47467A'
    }]
  }

  var myLineChart = new Chart(ctxLine, {
    type: 'line',
    data: dataLine
  })
})
