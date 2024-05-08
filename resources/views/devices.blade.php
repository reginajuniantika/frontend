<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devices</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .navbar {
            background-color: #07daff !important; /* Warna kuning */
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/devices">Devices <span class="sr-only">(current)</span></a> <!-- Tautan Devices -->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logs">Logs</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Main Content -->
<div class="container mt-5">
    <h2>Devices</h2>
    <p>Here you can view the list of devices.</p>

    <!-- Device Table -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Device Name</th>
                <th>Minimum Value</th>
                <th>Maximum Value</th>
                <th>Current Value</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example Device Data -->
            <tr>
                <td>1</td>
                <td>Device 1</td>
                <td>0</td>
                <td>100</td>
                <td>50</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Device 2</td>
                <td>20</td>
                <td>80</td>
                <td>35</td>
            </tr>
            <!-- Add your device data dynamically here -->
        </tbody>
    </table>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
