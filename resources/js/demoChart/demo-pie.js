$("#top-sales-by-category").ready(function () {
  if (!$("#top-sales-by-category").length) return;
  var ctxDoughnut = document.getElementById('top-sales-by-category')
  var myDoughnutChart = new Chart(ctxDoughnut, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: [10, 20, 30, 32, 54],
        backgroundColor: ['indigo', 'blue', 'green', 'tan', 'lightgreen']
      }],
      labels: ['Footwear', 'Menswear', 'Bags', 'Sports', 'Gaming']
    }
  })
})
