<?php
require_once('util-db.php'); // Ensure this file includes the database connection

// Existing logic for prices and chart
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.11.0/math.min.js"></script>
<script src="https://cdn.plot.ly/plotly-2.20.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<h1>Max and Min Prices</h1>

<div id="priceSummary">
    <h3>Price Summary</h3>
    <p id="minPrice"></p>
    <p id="maxPrice"></p>
</div>

<h2>Price Distribution</h2>
<div id="pricePieChart" style="width: 600px; height: 400px;"></div>

<h2>Total Quantity Ordered for Each Candy</h2>
<div>
  <canvas id="ordersChart" style="width: 600px; height: 400px;"></canvas>
</div>

<script>
    const prices = [
        <?php
        $pricesQuery = "SELECT Price FROM Candy";
        $pricesResult = $conn->query($pricesQuery);

        $pricesArray = [];
        while ($row = $pricesResult->fetch_assoc()) {
            $pricesArray[] = $row['Price'];
        }
        echo implode(",", $pricesArray);
        ?>
    ];

    const minPrice = math.min(prices);
    const maxPrice = math.max(prices);

    document.getElementById('minPrice').textContent = `Minimum Price: $${minPrice}`;
    document.getElementById('maxPrice').textContent = `Maximum Price: $${maxPrice}`;

    const pieData = [{
        values: prices,
        labels: prices.map((price) => `$${price.toFixed(2)}`),
        type: 'pie'
    }];

    const pieLayout = {
        title: 'Price Distribution',
        height: 400,
        width: 600
    };

    Plotly.newPlot('pricePieChart', pieData, pieLayout);

    const ctx = document.getElementById('ordersChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                $ordersQuery = "
                    SELECT c.Name AS CandyName, SUM(o.Quantity) AS TotalQuantity
                    FROM Orders o
                    JOIN Candy c ON o.CandyID = c.CandyID
                    GROUP BY c.Name
                ";
                $ordersResult = $conn->query($ordersQuery);

                $candyNames = [];
                $quantities = [];
                while ($row = $ordersResult->fetch_assoc()) {
                    $candyNames[] = $row['CandyName'];
                    $quantities[] = $row['TotalQuantity'];
                }
                echo "'" . implode("','", $candyNames) . "'";
                ?>
            ],
            datasets: [{
                label: 'Total Quantity Ordered',
                data: [
                    <?php
                    echo implode(",", $quantities);
                    ?>
                ],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    labels: {
                        font: {
                            weight: 'bold'
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Quantity Ordered'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Candy Name'
                    }
                }
            }
        }
    });
</script>
