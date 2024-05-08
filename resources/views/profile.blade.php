<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .navbar {
            background-color: #07daff !important; /* Warna kuning */
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
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
        <li class="nav-item">
          <a class="nav-link" href="/devices">Devices</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/logs">Logs</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/profile">Profile <span class="sr-only">(current)</span></a> <!-- Tautan Profile -->
        </li>
      </ul>
    </div>
  </nav>
<!-- Main Content -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center">
                <img src="https://picsum.photos/150" alt="Profile Picture" class="profile-image">
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Regina Juniantika</h5>
                    <p class="card-text">Email: reginajuniantika124@gmail.com</p>
                    <a href="#" class="btn btn-primary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
