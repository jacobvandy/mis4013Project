
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.11.0/math.min.js"></script>
<script src="https://cdn.plot.ly/plotly-2.20.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js -->

<h1>Max and Min Prices</h1>

<div id="priceSummary">
    <h3>Price Summary</h3>
    <p id="minPrice">Loading...</p>
    <p id="maxPrice">Loading...</p>
</div>

<h2>Price Distribution</h2>
<div id="pricePieChart" style="width: 600px; height: 400px;"></div>

<h2>Total Quantity Ordered for Each Candy</h2>
<div>
  <canvas id="ordersChart" style="width: 600px; height: 400px;"></canvas>
</div>

<script>
    // Price Summary Logic
    const prices = [
        <?php
        $first = true;
        while ($candys1 = $candy1->fetch_assoc()) {
            if (!$first) echo ", ";
            echo $candys1['Price'];
            $first = false;
        }
        ?>
    ];

    // Calculate min and max prices
    const minPrice = math.min(prices);
    const maxPrice = math.max(prices);

    // Display min and max prices
    document.getElementById('minPrice').textContent = `Minimum Price: $${minPrice.toFixed(2)}`;
    document.getElementById('maxPrice').textContent = `Maximum Price: $${maxPrice.toFixed(2)}`;

    // Price Distribution Pie Chart
    const pieData = [{
        values: prices,
        labels: prices,
        type: 'pie'
    }];

    const pieLayout = {
        title: 'Price Distribution',
        height: 400,
        width: 600
    };

    Plotly.newPlot('pricePieChart', pieData, pieLayout);

    // Orders Chart Logic
    const ctx = document.getElementById('ordersChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                <?php
                // Fetch data for the orders chart
                $query = "
                    SELECT c.Name AS CandyName, SUM(o.Quantity) AS TotalQuantity
                    FROM Orders o
                    JOIN Candy c ON o.CandyID = c.CandyID
                    GROUP BY c.Name
                ";
                $result = $conn->query($query);
                $first = true;
                while ($row = $result->fetch_assoc()) {
                    if (!$first) echo ", ";
                    echo "'" . $row['CandyName'] . "'";
                    $first = false;
                }
                ?>
            ],
            datasets: [{
                label: 'Total Quantity Ordered',
                data: [
                    <?php
                    $result = $conn->query($query);
                    $first = true;
                    while ($row = $result->fetch_assoc()) {
                        if (!$first) echo ", ";
                        echo $row['TotalQuantity'];
                        $first = false;
                    }
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
