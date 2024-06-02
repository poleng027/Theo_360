<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
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
    <h2>Messages</h2>
    <div class="messages-container">
        <div class="message">
            <div class="actions">
                <button class="delete-btn"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                <button class="reply-btn"><ion-icon name="reply-outline"></ion-icon>Reply</button>
                <button class="view-btn"><ion-icon name="eye-outline"></ion-icon>View</button>
            </div>
            <div class="sender">User1</div>
            <div class="timestamp">2024-06-02 10:15 AM</div>
            <div class="content">Hello Admin, I need help with my account.</div>
        </div>
        <div class="message">
            <div class="actions">
                <button class="delete-btn"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                <button class="reply-btn"><ion-icon name="chatbox-ellipses"></ion-icon>Reply</button>
                <button class="view-btn"><ion-icon name="eye-outline"></ion-icon>View</button>
            </div>
            <div class="sender">User2</div>
            <div class="timestamp">2024-06-02 11:20 AM</div>
            <div class="content">Can you assist me with my reservation?</div>
        </div>
        <div class="message">
            <div class="actions">
                <button class="delete-btn"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                <button class="reply-btn"><ion-icon name="reply-outline"></ion-icon>Reply</button>
                <button class="view-btn"><ion-icon name="eye-outline"></ion-icon>View</button>
            </div>
            <div class="sender">User3</div>
            <div class="timestamp">2024-06-02 01:45 PM</div>
            <div class="content">I have a question about the services you offer.</div>
        </div>
        

        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>



    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>