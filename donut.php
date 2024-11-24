<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donut Chart Example</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    /* Optional styling for the container */
    .chart-container {
      width: 50%;
      margin: auto;
      padding: 20px;
      background: #f9f9f9;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="container text-center mt-5">
    <h2>Boys and Girls Data</h2>
    <p>Distribution of Sales or Preferences</p>

    <!-- Chart Container -->
    <div class="chart-container">
      <canvas id="donutChart"></canvas>
    </div>
  </div>

  <script>
    // Get the chart element
    const ctx = document.getElementById('donutChart').getContext('2d');

    // Chart data
    const data = {
      labels: ['Boys', 'Girls'],
      datasets: [{
        label: 'Percentage',
        data: [55, 45], // Adjust the data as needed
        backgroundColor: ['#4e79a7', '#f28e2b'], // Colors for Boys and Girls
        hoverOffset: 4
      }]
    };

    // Chart configuration
    const config = {
      type: 'doughnut',
      data: data,
      options: {
        plugins: {
          legend: {
            display: true,
            position: 'bottom',
          }
        },
        responsive: true,
      }
    };

    // Render the chart
    new Chart(ctx, config);
  </script>
</body>
</html>
