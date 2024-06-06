<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Management</title>
    <link rel="stylesheet" href="assets/css/reservation.css">
    <link rel="stylesheet" href="./assets/css/style.css?v=<?php echo time();?>">
    <style>
        .section {
            display: none;
        }
        .section.active {
            display: block;
        }
    </style>
</head>
<body>
 <style>
        .section {
            display: none;
        }
        .section.active {
            display: block;
        }
    </style>
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

            <!-- ======================= Reservations ================== -->

    <div class="container" id="approved-section" class="section active">
        <h1>Approved Reservations</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="approvedReservationsTableBody">
                <!-- Approved reservations rows will be inserted here dynamically -->
            </tbody>
        </table>
    </div>
    <div class="container" id="pending-section" class="section">
        <h1>Pending Reservations</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="pendingReservationsTableBody">
                <!-- Pending reservations rows will be inserted here dynamically -->
            </tbody>
        </table>
    </div>
    <div class="container" id="finished-section" class="section">
        <h1>Finished Reservations</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="finishedReservationsTableBody">
                <!-- Finished reservations rows will be inserted here dynamically -->
            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Sample data for reservations
            const approvedReservations = [
                { name: "Paula De Chavez", email: "paula@gmail.com", phone: "1112223333", date: "2024-06-15", time: "18:00" }
            ];
            const pendingReservations = [
                { name: "Keith Lara", email: "keith@gmail.com", phone: "4445556666", date: "2024-06-16", time: "19:00" }
            ];
            const finishedReservations = [
                { name: "David Andaya", email: "david@gmail.com", phone: "7778889999", date: "2024-06-17", time: "20:00" }
            ];
 
            const approvedTableBody = document.getElementById('approvedReservationsTableBody');
            const pendingTableBody = document.getElementById('pendingReservationsTableBody');
            const finishedTableBody = document.getElementById('finishedReservationsTableBody');
 
            approvedReservations.forEach(reservation => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${reservation.name}</td>
                    <td>${reservation.email}</td>
                    <td>${reservation.phone}</td>
                    <td>${reservation.date}</td>
                    <td>${reservation.time}</td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                `;
                approvedTableBody.appendChild(row);
            });
 
            pendingReservations.forEach(reservation => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${reservation.name}</td>
                    <td>${reservation.email}</td>
                    <td>${reservation.phone}</td>
                    <td>${reservation.date}</td>
                    <td>${reservation.time}</td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                `;
                pendingTableBody.appendChild(row);
            });
 
            finishedReservations.forEach(reservation => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${reservation.name}</td>
                    <td>${reservation.email}</td>
                    <td>${reservation.phone}</td>
                    <td>${reservation.date}</td>
                    <td>${reservation.time}</td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                `;
                finishedTableBody.appendChild(row);
            });
 
            const approvedLink = document.getElementById('approved-link');
            const pendingLink = document.getElementById('pending-link');
            const finishedLink = document.getElementById('finished-link');
 
            approvedLink.addEventListener('click', function() {
                showSection('approved-section');
            });
            pendingLink.addEventListener('click', function() {
                showSection('pending-section');
            });
            finishedLink.addEventListener('click', function() {
                showSection('finished-section');
            });
 
            function showSection(sectionId) {
                const sections = document.querySelectorAll('.section');
                sections.forEach(section => {
                    section.classList.remove('active');
                });
                document.getElementById(sectionId).classList.add('active');
            }
 
            // Show the approved reservations section by default
            showSection('approved-section');
        });
    </script>
 <!-- =========== Scripts =========  -->
 <script src="assets/js/main.js"></script>


<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
 