<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Card</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      background-color: #f5f5f5;
    }

    /* Sidebar Styles */
    .sidenav {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      color: white;
      padding-top: 20px;
    }

    .sidenav a {
      color: white;
      padding: 8px 15px;
      text-decoration: none;
      font-size: 18px;
      display: block;
    }

    .sidenav a:hover {
      background-color: #575757;
      color: #ffd700;
    }

    /* Profile Card Styles */
    .profile-card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      margin-left: 260px;
      width: calc(100% - 260px);
    }

    .card-header {
      height: 160px;
      position: relative;
      background-color: #4a2bb7;
    }

    /* Curved Background */
    .curved-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 160px;
      background: linear-gradient(to right, #ff6e40, #ffcc00);
      clip-path: circle(120% at 50% 0%);
      z-index: 1;
    }

    .profile-image {
      position: absolute;
      bottom: -50px;
      left: 20px;
      border: 4px solid #fff;
      width: 110px;
      height: 110px;
      background-color: #fff;
      z-index: 2;
      border-radius: 50%;
    }

    .card-body {
      margin-top: 50px;
      text-align: center;
    }

    .card-body .row {
      text-align: left;
    }

    .card-body .row p {
      margin: 5px 0;
    }

    .shapes .shape {
      position: absolute;
      bottom: 0;
      right: 10px;
      width: 50px;
      height: 50px;
      border-radius: 8px;
    }

    .shapes .shape.bg-warning {
      background-color: #ffc107;
    }

    .shapes .shape.bg-danger {
      background-color: #fd7e14;
      right: 70px;
    }

    /* Navbar Styles */
    .navbar-custom {
      background-color: #e4e7eb;
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-nav .nav-link {
      color: #4a2bb7;
    }

    .navbar-custom .navbar-nav .nav-link:hover {
      color: #ff6e40;
    }

    .navbar-custom .navbar-toggler-icon {
      background-color: #4a2bb7;
    }

    .navbar-custom .nav-item.active .nav-link {
      color: #ffd700;
    }

    /* Profile Image on Navbar */
    .navbar-custom .profile-img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <span class="navbar-brand ms-3">Student Details</span>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-search"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-moon"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-arrows-expand"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-chat-dots"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-bell"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-gear"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://via.placeholder.com/35" class="profile-img" alt="Profile"></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidenav">
    <h3 class="text-center text-white">Menu</h3>
    <a href="#">Dashboard</a>
    <a href="#">Task Manager</a>
    <a href="#">Daily Summary</a>
    <a href="#">Attendance</a>
    <a href="#">Bonus Points</a>
    <a href="#">Time Table</a>
  </div>

  <!-- Main Content -->
  <div class="container mt-5 pt-5">
    <div class="card profile-card">
      <div class="card-header bg-primary position-relative">
        <div class="curved-background"></div>
        <div class="profile-image">
          <img src="https://via.placeholder.com/100" alt="Profile Image" class="rounded-circle">
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title">Karen Hope</h5>
        <p class="text-muted mb-4">Student</p>
        <div class="row">
          <div class="col-6">
            <p><i class="bi bi-person-circle"></i> Parents: <strong>Justin Hope</strong></p>
            <p><i class="bi bi-telephone"></i> Phone: <strong>+12 345 6789 0</strong></p>
          </div>
          <div class="col-6">
            <p><i class="bi bi-geo-alt"></i> Address: <strong>Jakarta, Indonesia</strong></p>
            <p><i class="bi bi-envelope"></i> Email: <strong>Historia@mail.com</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
