<?php 
require_once('classes/database.php');
$con = new database();

if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $result = $con->check($username, $password);

      if($result) {
        header('location:index.php');
      } else {
        echo "Error";
      }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h1>Administrator</h1>
   
<form method="post">
    <div class="form-group">
      <!-- <label for="username">Username:</label> -->
      <input type="text" class="form-control <?php if (!empty($error)) echo 'error-input'; ?>" name="user" placeholder="Enter username">
    </div>
    <div class="form-group">
      <!-- <label for="password">Password:</label> -->
      <input type="password" class="form-control <?php if (!empty($error)) echo 'error-input'; ?>" name="pass" placeholder="Enter password">
    </div>
    <?php if (!empty($error)) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php echo $error; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <div class="container">
                          <div class="row gx-1">
                            <div class="col">
                            <button type="submit" value="Log In" name="login" >Login</button>

                            </div>
                          </div>
                        </div>
    </div>
   
  </form>
    <!-- <div class="login-container">
        <h1>Administrator</h1>
        <form id="loginForm">
            <input type="text" id="username" placeholder="Username" required>
            <input type="password" id="password" placeholder="Password" required>
            <a href="#" class="forgot-password">Forgot Password?</a>
            <div class="error-message" id="errorMessage">Please fill in all fields</div>
            <button type="submit">Login</button>
        </form>
    </div> -->
    
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var errorMessage = document.getElementById('errorMessage');

            if (username === "" || password === "") {
                errorMessage.style.display = 'block';
            } else {
                errorMessage.style.display = 'none';
                // Perform login action
                alert('Login successful!');    
            }
            
        });
    </script>
</body>
</html>