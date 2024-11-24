<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Details</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f7fb;
      font-family: 'Arial', sans-serif;
    }
    /* Sidebar Styles */
    .sidebar {
      background-color: #4a3aff;
      color: white;
      height: 100vh;
      padding: 1rem 0;
    }
    .sidebar h3 {
      font-size: 1.5rem;
      font-weight: bold;
      text-align: center;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      font-size: 1rem;
      padding: 0.75rem 1.5rem;
      display: flex;
      align-items: center;
      border-radius: 0.5rem;
      margin-bottom: 0.5rem;
    }
    .sidebar a:hover,
    .sidebar .active {
      background-color: #6358ff;
    }
    .sidebar i {
      margin-right: 1rem;
    }

    /* Header Styles */
    .header {
      background-color: #e8ebf2;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid #ddd;
    }
    .header h4 {
      font-size: 1.25rem;
      margin: 0;
    }
    .header-icons span {
      margin-left: 1rem;
      cursor: pointer;
    }

    /* Card Styles */
    .card-profile {
      background-color: #6c63ff;
      color: white;
      border-radius: 1rem;
      padding: 2rem;
      position: relative;
      overflow: hidden;
    }
    .card-profile img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 1rem;
    }
    .card-profile h3 {
      margin-bottom: 0.5rem;
    }
    .card-profile .detail-icon {
      display: flex;
      align-items: center;
      margin-top: 0.5rem;
    }
    .card-profile .detail-icon i {
      color: #ff715b;
      margin-right: 0.5rem;
      font-size: 1.2rem;
    }

    /* Right Card Styles */
    .right-card {
      background-color: white;
      border-radius: 0.5rem;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 1rem;
    }
    .right-card h5 {
      font-size: 1rem;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }
    .right-card p {
      margin: 0;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-2 sidebar">
        <h3>Akademi</h3>
        <a href="#" class="active"><i class="bi bi-house"></i> Dashboard</a>
        <a href="#"><i class="bi bi-book"></i> Student</a>
        <a href="#"><i class="bi bi-person"></i> Teacher</a>
        <a href="#"><i class="bi bi-gear"></i> Settings</a>
      </div>

      <!-- Main Content -->
      <div class="col-md-10">
        <!-- Header -->
        <div class="header">
          <h4>Student Details</h4>
          <div class="header-icons">
            <span>🔍</span>
            <span>⚙</span>
            <span>👤</span>
          </div>
        </div>

        <!-- Content Section -->
        <div class="row my-4">
          <div class="col-lg-8">
            <!-- Profile Card -->
            <div class="card card-profile">
              <div class="d-flex">
                <img src="https://cdn-icons-png.flaticon.com/512/9203/9203764.png" alt="Profile Picture">
                <div class="ms-3">
                  <h3>Karen Hope</h3>
                  <p>Student</p>
                  <div class="detail-icon">
                    <i class="bi bi-person"></i> Parents: Justin Hope
                  </div>
                  <div class="detail-icon">
                    <i class="bi bi-telephone"></i> Phone: +12 345 6789 0
                  </div>
                  <div class="detail-icon">
                    <i class="bi bi-geo-alt"></i> Address: Jakarta, Indonesia
                  </div>
                  <div class="detail-icon">
                    <i class="bi bi-envelope"></i> Email: historia@mail.com
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Section -->
          <div class="col-lg-4">
            <div class="right-card mb-3">
              <h5>Schedule Details</h5>
              <p>Date: Thursday, 10th April, 2022</p>
            </div>
            <div class="right-card mb-3">
              <h5>Basic Algorithm</h5>
              <p>March 20, 2022</p>
              <p>9:00 AM - 10:00 AM</p>
            </div>
            <div class="right-card">
              <h5>Basic Art</h5>
              <p>March 20, 2022</p>
              <p>9:00 AM - 10:00 AM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
