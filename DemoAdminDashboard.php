<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.4/main.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                                    <h5 class="card-title">Parents</h5>
                                    <p class="card-text">5,690</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-white bg-danger mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Earnings</h5>
                                    <p class="card-text">$193,000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Donut Chart -->
                    <div class="container text-center mt-5">
                        <h2>Boys and Girls Data</h2>
                        <p>Distribution of Sales or Preferences</p>

                        <!-- Chart Container -->
                        <div class="chart-container">
                            <canvas id="donutChart"></canvas>
                        </div>
                    </div>

                    <!-- Student Details Table -->
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="table-responsive">
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
                                            <td><?php echo htmlspecialchars($student['mobile']); ?></td>
                                            <td>
                                                <button class="btn btn-primary btn-sm">Edit</button>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.4/main.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                }
            });
            calendar.render();
        });
    </[_{{{CITATION{{{_1{](https://github.com/bgoonz/web-dev-utils-package/tree/65a7b21c0444f4cbeb3c313a750fb43560047e77/personal-utilities%2Fcopy-2-clip%2FREADME.md)[_{{{CITATION{{{_2{](https://github.com/dhasane/admin-bd/tree/a61cf1d0b4d1f546383e37095ad8b83c0dc33b33/pantallas%2FpantallaElementosQueLePertenecen.php)[_{{{CITATION{{{_3{](https://github.com/krishnadheerajp/krishnadheerajp.github.io/tree/0e41803e74609647f6b1c76c9c162c40777b523e/GRIP%20%20Internship%2Ftransfer.php)[_{{{CITATION{{{_4{](https://github.com/jmorenop89/MySpotify/tree/b32cb3cd3653602a7f9f6a87545edd8b7efd14a6/resources%2Fviews%2Flayout%2Fsidebar.blade.php)[_{{{CITATION{{{_5{](https://github.com/randysimpson/othello/tree/4396e72021146fc31c4aad20e8b6401e038963a1/othello-ui%2Fsrc%2FApp.js)[_{{{CITATION{{{_6{](https://github.com/blaze-gt263/blog/tree/e907d631f428a5c64a22ed6027fd2d558e8fff00/Blog%2Fadmin%2Fposts%2Fcreate.php)[_{{{CITATION{{{_7{](https://github.com/m-oniqu3/parishmanager/tree/f41e7327950e794f2c2079d4b7def057ac8340da/parishmanager%2Fpmviewreport.php)[_{{{CITATION{{{_8{](https://github.com/timxitx/OnlineTeachingSystem/tree/0c292ed5a6e36d76759b4e711fcb086df4e69134/code%2FFinal%20program%2Fstudent_selectcode.php)[_{{{CITATION{{{_9{](https://github.com/RedaAwaad/personal_website/tree/cb181272e6baf5cee8478f6f5cb341ac7493a179/admin%2Fnav_dash.php)[_{{{CITATION{{{_10{](https://github.com/ubisource/solid-potato/tree/1b9841f91582861078a23d80f2e0f5e08bf6af51/application%2Fviews%2Fuser%2Findex.php)[_{{{CITATION{{{_11{](https://github.com/scriptkiddie20/gbk-resolusi/tree/68f0eab3a51ad84a927551d52c539f93d85f425b/app%2FViews%2Fuser%2Fproduct.php)[_{{{CITATION{{{_12{](https://github.com/ArseneMerci/Book-IT/tree/80a4cb5ee12d7584dbcf165b3af59ea49be2f1d4/Dashboard%2FallBuses.php)[_{{{CITATION{{{_13{](https://github.com/Globalindo-intimates/Report-SPL/tree/7ef68c028c2849137b4f2cdc10d42db20eeb7510/application%2Fviews%2Fdata_search%2FCalendarView_up.php)[_{{{CITATION{{{_14{](https://github.com/AndreaMpulila/timetable/tree/25c49ed641c0ebc28d621de3802d7d8b64053eaa/application%2Fviews%2Fheader.php)[_{{{CITATION{{{_15{](https://github.com/oxytoxin/elms/tree/8fcecd64b038c596242535fc2a0589af7901e962/resources%2Fviews%2Fpages%2Fstudent%2Fcalendar.blade.php)[_{{{CITATION{{{_16{](https://github.com/Flipecs/socialmind_ti2/tree/2239cbc15752a38691fc6ea1424e2af8b64e2721/src%2Fmain%2Fresources%2Fscripts%2Fcalendar.js)[_{{{CITATION{{{_17{](https://github.com/athulak/forescout/tree/d395da5d2b90897153c097df10842c16a89e84e2/application%2Fviews%2Fsponsor%2Fhome.php)