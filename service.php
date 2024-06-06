<?php
require_once('classes/database.php');
$con = new database();
 
if(isset($_POST['addPackage'])){
    $service_name = $_POST['serviceName'];
    $service_desc = $_POST['serviceDesc'];
    $service_price = $_POST['servicePrice'];
 
      $result = $con->addPackage($service_name, $service_desc, $service_price);
 
      if($result) {
        header('location:service.php');
      } else {
        echo "Failed to add package";
      }
    }

if(isset($_POST['delete'])){
    $service_id = $_POST['id'];

    if($con->deletePackage($service_id)){
        header('location:service.php');
    } else {
        echo 'Failed to delete Package';
    }
}


?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
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
    <h2>Package Services</h2>
    <div class="add-service">
        <h3>Add New Service</h3>
       
        <form method="POST">
            <input type="text" class="form-control" name="serviceName" placeholder="Service Name" required>
            <input type="text" class="form-control" name="serviceDesc" placeholder="Description" required>
            <input type="number" class="form-control" name="servicePrice" placeholder="Price" required>
            <button type="submit" name="addPackage">Add Service</button>
        </form>
    </div>
 
    <div class="service-container">
    <?php
    $services = $con->viewServices();
    // $service = $services['service_desc'];
    foreach($services as $service) {
       ?>
        <div class="service">
            <div class="card-container">
                <form method="post">
                    <div class="card">
                        <h4 class="card-title"><?php echo $service['service_name'];?></h4>

                         
                        <h5 class="card-text">
                            <ul>
                                <?php $descArray = explode(',', $service['service_desc']);?>
                                <?php foreach ($descArray as $desc) {?>
                                <li><?php echo trim($desc);?></li>
                                 <?php }?>
                            </ul>
                            </h5>
                        <p class="card-text"> Price: PHP <?php echo $service['service_price']?></p>
 
                        <div class="actions-1">
                            <input type="hidden" name="id" value="<?php echo $service['service_id'];?>">
                            <button class="edit-btn"><ion-icon name="create-outline"></ion-icon>Edit</button>
                            <button class="delete-btn" name="delete"><ion-icon name="trash-outline"></ion-icon>Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
    }
   ?>
</div>
   
   
    </div>
   
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