<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

</head>

<style>
    body {
    margin: 0;
    padding: 20px;
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; /* Light background color */
    background-image: url('./assets/imgs/bg.png'); /* background image */
    background-size: cover;
    background-position: center;
}
 
.container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
   
}
 
h1 {
    color: #E0c2F2; /* Purple color for the heading */
    text-align: center;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
   
}
 
.feedback {
    background-color: #3f1d52; /* Purple background color for feedback section */
    color: #ffffff; /* White text color */
    padding: 60px;
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
}
 
.customer-info {
    margin-bottom: 20px;
}
 
.customer-info .name {
    font-weight: bold;
    margin-bottom: 5px;
}
 
.customer-info .email {
    font-style: italic;
}
 
.rating {
    margin-bottom: 20px;
}
 
.rating label {
    display: block;
    margin-bottom: 5px;
}
 
.rating input[type="range"] {
    width: 100%;
    -webkit-appearance: none;
    appearance: none;
    height: 10px;
    border-radius: 5px;
    background-color: #ffffff; /* White background */
    outline: none;
}
 
.rating input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: #6a0dad; /* Purple color for slider thumb */
    cursor: pointer;
}
 
.rating input[type="range"]::-moz-range-thumb {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background-color: #6a0dad; /* Purple color for slider thumb */
    cursor: pointer;
}
 
.rating output {
    display: block;
    margin-top: 5px;
}
 
.comment textarea {
    width: 100%;
    height: 100px;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: none;
    margin-top: 15px;
}
 
 
button {
    padding: 10px 20px;
    background-color: #64255d; /* Purple color for button */
    color: #ffffff; /* White text color */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
 
button:hover {
    background-color: #a52997; /* Darker purple color on hover */
}
 
</style>
<body>
<?php include("navbar-u.php");?> 

    <div class="container">
        <h1>Feedback</h1>
        <div class="feedback">
            <div class="customer-info">
                <div class="name">Paula De Chavez</div>
                <div class="email">paula@gmail.com</div>
                <div class="phone">Phone: +1234567890</div>
                <div class="date">Date: 2024-06-05</div>
            </div>
            <div class="rating">
                <label for="scale">Rate your experience:</label>
                <input type="range" id="scale" name="scale" min="0" max="10" value="5">
                <output for="scale">5</output>
            </div>
            <div class="comment">
                <label for="feedback">Leave your feedback:</label>
                <textarea id="feedback" placeholder="Please write your feedback here"></textarea>
            </div>
            <button>Submit</button>
        </div>
    </div>
</body>
</html>