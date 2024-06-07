<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: url(./assets/imgs/bg.png);
  background-size: cover;
  background-position: center;
}

.container {
  max-width: 800px;
  width: 90%;
  margin: 50px auto;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  background-color: #e7d5e8;
  text-align: center;
}

h2 {
  font-size: 2.5em;
  color: #333;
  margin-bottom: 20px;
}

.subheading {
  font-size: 1.5em;
  color: #666;
  margin-bottom: 40px;
}

.icons {
  font-size: 2em;
  margin-bottom: 40px;
  display: flex;
  justify-content: center;
}

.icons i {
  margin: 0 20px;
  transition: color 0.3s ease;
}

.icons i:hover {
  color: #337ab7;
}

.contact-info {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.contact-info p {
  margin: 20px;
  color: #666;
}

.contact-info span {
  display: flex;
  align-items: center;
  margin-top: 10px;
}

.contact-info span p {
  margin: 0 10px;
}

.additional-info {
  margin-top: 20px;
  color: #666;
  font-size: 1.2em;
}
</style>
<body>
<?php include("navbar-u.php");?>   

    <div class="container">
        <h2>Contact Us</h2>
        <p class="subheading">Have You Got Any Questions?</p>
        <div class="icons">
            <a href="https://www.facebook.com/theo360studio"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.tiktok.com/@theo360studio"><i class="fab fa-tiktok"></i></a>
            <i class="fas fa-envelope"></i>
            <i class="fas fa-phone-alt"></i>
        </div>
        <div class="contact-info">
            <p>Facebook</p>
            <p>TikTok</p>
            <p>Email</p>
            <p>Call Us</p>
        </div>
        <div class="additional-info">
            <p>Feel free to reach out to us for any inquiries or assistance. We're here to help!</p>
        </div>
    </div>
</body>
</html>