<?php
require_once('util-db.php'); // Include the database connection utility

// Establish a database connection
$conn = get_db_connection(); // Call the function to get the $conn object
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js -->
</head>
<body>
    <h1>Total Quantity Ordered for Each Candy</h1>
    <div>
        <canvas id="ordersChart" style="width: 600px; height: 400px;"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('ordersChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    // Fetch data from the Orders table
                    $query = "
                        SELECT c.Name AS CandyName, SUM(o.Quantity) AS TotalQuantity
                        FROM Orders o
                        JOIN Candy c ON o.CandyID = c.CandyID
                        GROUP BY c.Name
                    ";
                    $result = $conn->query($query); // Use $conn obtained from get_db_connection()

                    $candyNames = [];
                    $quantities = [];
                    while ($row = $result->fetch_assoc()) {
                        $candyNames[] = $row['CandyName'];
                        $quantities[] = $row['TotalQuantity'];
                    }
                    echo "'" . implode("','", $candyNames) . "'"; // Output candy names
                    ?>
                ],
                datasets: [{
                    label: 'Total Quantity Ordered',
                    data: [
                        <?php
                        echo implode(",", $quantities); // Output quantities
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
</body>
</html>
