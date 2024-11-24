<?php
// Include the database connection file
require_once 'database.php';


try {
    // Fetch all student records from the database
    $stmt = $pdo->query("SELECT id, name, email, mobile, student_id FROM students");
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching data: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>Admin Dashboard</title>
    <style>
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            padding: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
        }
        .nav_logo {
            width: 17%;
        }
        .nav_logo img, .profile_img img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        .search {
            flex-grow: 1;
            margin: 0 20px;
        }
        .search input {
            width: 100%;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .nav_profile_message ul {
            list-style: none;
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
        }
        .nav_profile_message ul li {
            margin-right: 15px;
        }
        .profile_img select {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 2px 5px;
        }
        .side_bar {
            background-color: beige;
            height: 100vh;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class="body_child">
        <!-- Navbar -->
        <div class="navbar">
            <!-- Logo -->
            <div class="nav_logo">
                <img src="https://via.placeholder.com/50" alt="Logo">
            </div>
            <!-- Search Bar -->
            <div class="search">
                <input type="text" placeholder="Search...">
            </div>
            <!-- Profile and Message Icons -->
            <div class="nav_profile_message">
                <ul>
                    <li>
                        <div class="profile_img">
                            <select name="student_name">
                                <option value="">Student</option>
                                <option value="1">John Doe</option>
                                <option value="2">Jane Smith</option>
                            </select>
                            <img src="https://themewagon.com/wp-content/uploads/2024/11/BootsLander.webp" alt="Profile Image">
                        </div>
                    </li>
                    <li>
                        <i class="bi bi-envelope-at" style="font-size: 1.5rem; cursor: pointer;"></i>
                    </li>
                    <li>
                        <i class="bi bi-bell" style="font-size: 1.5rem; cursor: pointer;"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block side_bar">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Manage Users</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">View Reports</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </nav>
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 content">
                    <!-- Dashboard Content -->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Students</h5>
                                    <p class="card-text">150,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Teachers</h5>
                                    <p class="card-text">2,250</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-warning mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">task</h5>
                                    <p class="card-text">5,690</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Exam</h5>
                                    <p class="card-text">$193,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Attendance</h5>
                                    <p class="card-text">$193,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">high bonus</h5>
                                    <p class="card-text">$193,000</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Exam</h5>
                                    <p class="card-text">$193,000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Details Table -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <h4>student's details</h4>
                                <table class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Student ID</th>
                                            <th>Mobile</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($students as $student): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($student['name']); ?></td>
                                            <td><?php echo htmlspecialchars($student['student_id']); ?></td>
                                            <td><?= htmlspecialchars($student['email']); ?></td>
                                            <td><?php echo htmlspecialchars($student['mobile']); ?></td>
                                            <td>
                                              <!-- Pass the student ID to adminEditStudent.php -->
                            <a href="adminEditStudent.php?id=<?php echo $student['id']; ?>">
                                <button class="btn btn-primary btn-sm">Edit</button>
                            </a>
                            <a href="deleteStudent.php?id=<?php echo $student['id']; ?>" onclick="return confirm('Are you sure you want to delete this student?');">
    <button class="btn btn-danger btn-sm">Delete</button>
</a>

                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <a href="adminCreateStudent.php"> 
                                <button type="button"  class="btn btn-success">add student</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
