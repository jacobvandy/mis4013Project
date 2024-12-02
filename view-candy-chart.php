<h1>Candy Price Pie Chart</h1>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      datasets: [{
        data: [
<?php
while ($candys = $candy->fetch_assoc()) {
    echo $candys['Candy_Count'] . ", ";
}
?>
        ]
      }],
      labels: [
<?php
$candy = SelectCandy();
while ($candys = $candy->fetch_assoc()) {
    echo "'" . $candys['Name'] . "', ";
}
?>
      ]
    },
    options: {
      plugins: {
        legend: {
          labels: {
            font: {
              size: 14, // Font size
              style: 'bold' // Bold font style
            }
          }
        }
      }
    }
  });
</script>
