<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time();?>">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="videocam"></ion-icon>
                        </span>
                        <span class="title">Theo 360</span>
                    </a>
                </li>

                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="reservation.php">
                        <span class="icon">
                            <ion-icon name="calendar"></ion-icon>
                        </span>
                        <span class="title">Reservation</span>
                    </a>
                </li>

                <li>
                    <a href="service.php">
                        <span class="icon">
                            <ion-icon name="card"></ion-icon>
                        </span>
                        <span class="title">Services</span>
                    </a>
                </li>

                <li>
                    <a href="messages.php">
                        <span class="icon">
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="password.php">
                        <span class="icon">
                            <ion-icon name="key"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>


                <li>
                    <a href="login.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- =============== Main Content ================ -->
            <div class="main-content">
                <h2>Password Management</h2>
                <div class="change-password">
                    <h3>Change Password</h3>
                    <form>
                        <input type="password" placeholder="Current Password" required>
                        <input type="password" placeholder="New Password" required>
                        <input type="password" placeholder="Confirm New Password" required>
                        <button type="submit">Change Password</button>
                    </form>
                </div>
                <div class="add-admin">
                    <h3>Add New Admin</h3>
                    <form>
                        <input type="text" placeholder="Admin Username" required>
                        <input type="password" placeholder="Admin Password" required>
                        <button type="submit">Add Admin</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ======= Charts JS ====== -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="assets/js/chartsJS.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>