$("#chartjs-line-area").ready(function () {
  if (!$("#chartjs-line-area").length) return;
  let ctxArea = document.getElementById('chartjs-line-area')

  var dataArea = {
    labels: ["Jan", "Feb", "March", "April", "May", "June"],
    datasets: [{
      label: 'Purchase',
      data: [20, 10, 40, 50, 75, 80],
      backgroundColor: '#24235C'
    }, {
      label: 'Add to Cart',
      data: [40, 30, 54, 60, 60, 99],
      backgroundColor: '#47467A'
    }]
  }

  var myAreaChart = new Chart(ctxArea, {
    type: 'line',
    data: dataArea
  })
})
