<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theo360 Services</title>
</head>
<!-- /* ===================== Style ===================== */ -->
<style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; 
    background-image: url('./assets/imgs/bg.png'); 
    background-size: cover;
    background-position: center;
}


header {
    background-color: rgba(58, 29, 97, 0.9); 
    color: white;
    text-align: center;
    padding: 60px 0;
}

h1 {
    margin: 0;
}

.packages {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    margin-top: 20px;
}

.package {
    background-color: rgba(255, 255, 255, 0.8); 
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 30%;
}

.package h2 {
    color: rgba(58, 29, 97, 0.9); 
    font-weight: bold;
    text-shadow: 0 0 20px rgba(97, 29, 72, 0.9);
    font-size: 30px;
    font-family:Georgia, 'Times New Roman', Times, serif;
}

.package ul {
    list-style-type: none;
    padding: 0;
}

.package ul li {
    margin-bottom: 10px;
}

.package p {
    margin-top: 20px;
    font-weight: bold;
    color: rgba(58, 29, 97, 0.9); 
}

.package button {
    background-color: rgba(58, 29, 97, 0.9); 
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.package button:hover {
    background-color: #a52997; 
}

footer {
    background-color: rgba(58, 29, 97, 0.9); 
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: 35px;
}

.package p.price {
    margin-top: 20px;
    font-weight: bold;
    color: rgba(58, 29, 97, 0.9); 
    text-shadow: 0 0 25px rgba(165, 36, 142, 0.9); 
}


</style>
<body>
    <?php include("navbar-u.php");?>    
    <header>
        <h1>Our Services</h1>
    </header>

    <section class="packages">

        <div class="package">
            <h2>SPECIAL PACKAGE</h2>
            <ul>
                <li>360 platform with motorized rotating arm</li>
                <li>4 Hours Of Unlimited Shoots</li>
                <li>Customized Video Overlay</li>
                <li>Instant Sharing Station</li>
                <li>8 RGB Tube Lights</li>
                <li>Fog Machine</li>
                <li>Bubble Machine</li>
                <li>Stanchion Posts</li>
                <li>Red Carpet</li>
                <li>Fun Props</li>
            
            </ul>
            <p class="price">PHP 17,999.00</p>
            <button>Book Now</button>
        </div>
    </section>

    <footer>
        <p>Contact us for custom packages and pricing.</p>
    </footer>
</body>
</html>
