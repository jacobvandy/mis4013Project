<h1>Number of Employees per Taco Bell</h1>

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
    
  });
</script>
 
