<?php 
require_once('classes/database.php');
$con = new database();

if(isset($_POST['addPackage'])){
    $service_name = $_POST['serviceName'];
    $service_description = $_POST['serviceDesc'];
    $service_price = $_POST['servicePrice'];

      $result = $con->addPackage($service_name, $service_description, $service_price);

      if($result) {
        header('location:service.php');
      } else {
        echo "Failed to add package";
      }
    }
?>

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
    <h2>Package Services</h2>
    <div class="add-service">
        <h3>Add New Service</h3>
        <!--  <label for="firstName">First Name:</label>
            <input type="text" class="form-control" name="firstName" required placeholder="Enter first name"> -->
        <form>
            <input type="text" class="form-control" name="serviceName" placeholder="Service Name" required>
            <input type="text" class="form-control" name="serviceDesc" placeholder="Description" required>
            <input type="number" class="form-control" name="servicePrice" placeholder="Price" required>
            <button type="submit">Add Service</button>
        </form>
    </div>

    <div class="service-container">
        <div class="service">
            <div class="card-container">
                <?php
                $services = $con->viewServices();
                foreach($services as $service) {
                    ?>
                <form method="post">
                    <div class="card">
                        <h4 class="card-title"><?php echo $service['service_name']; ?></h4>
                        <h5 class="card-text"><?php echo $service['service_desc']; ?></h5>
                        <p class="card-text"> Price: PHP <?php echo $service['service_price'] ?></p>

            <div class="actions-1">
                <input type="hidden" name="id" value="<?php $service['service_id']; ?>">
                <button class="edit-btn"><ion-icon name="create-outline"></ion-icon>Edit</button>
                <input type="hidden" name="id" value="<?php echo $sevice['service_id']; ?>">
                <button class="delete-btn"><ion-icon name="trash-outline"></ion-icon>Delete</button>
            </div>
                
                    </div>
                </form>
            </div>
        </div>
        <?php
            }
            ?>
    </div>
    
    <!-- <div class="services-container">
        <div class="service">
            <h3>Special Package</h3>
            <p> 360 PLATFORM WITH MOTORIZED ROTATING ARM </p>
            <p> 4 HOURS OF UNLIMITED SHOTS</p>
            <p>CUSTOMIZED VIDEO OVERLAY</p>
            <p> INSTANT SHARING STATION </p>
            <p>8RGB TUBE LIGHTS</p>
            <p> FOG MACHINE</p>
            <p>BUBBLE MACHINE </p>
            <p>STANCHION POST</p>
            <p>RED CARPET</p>
            <p>FUN PROPS</p>
 
               <h4>ADD ONS:</h4> 
               <p>TRANSPORTATION FEE (DEPENDING ON THE LOCATION)</p>
                <p>ADDITIONAL PHP2000.00 PER EXCEEDING HOUR</p>
                <p>PHP700.00 FOR CUSTOMIZED 8X8 TARPAULIN BACKDROP (OPTIONAL) </p>
                
            <div class="price">Php 17999.00</div>
            <div class="actions-1">
                <button class="edit-btn"><ion-icon name="create-outline"></ion-icon>Edit</button>
                <button class="delete-btn"><ion-icon name="trash-outline"></ion-icon>Delete</button>
            </div>
        </div> -->
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