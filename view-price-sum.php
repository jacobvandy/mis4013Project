<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/11.11.0/math.min.js"></script>

<script src="https://cdn.plot.ly/plotly-2.20.0.min.js"></script>

<h1>Max and Min Prices</h1>

<div id="priceSummary">
    <h3>Price Summary</h3>
    <p id="minPrice"></p>
    <p id="maxPrice"></p>
</div>

<h2>Price Distribution</h2>
<div id="pricePieChart" style="width: 600px; height: 400px;"></div>

<script>
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

    console.log("Prices:", prices);

    const minPrice = math.min(prices);
    const maxPrice = math.max(prices);

    document.getElementById('minPrice').textContent = `Minimum Price: $${minPrice}`;
    document.getElementById('maxPrice').textContent = `Maximum Price: $${maxPrice}`;

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
</script>
