$("#sales").ready(function () {
  if (!$("#sales").length) return;
  let ctxArea = document.getElementById('sales')

  var dataArea = {
    labels: ["Jan", "Feb", "March", "April", "May", "June"],
    datasets: [{
      label: 'Sales',
      data: [20, 10, 40, 50, 75, 80],
      backgroundColor: '#6CCC64'
    }, {
      label: 'Add to Cart',
      data: [40, 30, 54, 60, 60, 99],
      backgroundColor: '#FDD638'
    }]
  }

  var myAreaChart = new Chart(ctxArea, {
    type: 'line',
    data: dataArea
  })
})
