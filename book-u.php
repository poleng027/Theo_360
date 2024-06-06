<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
</head>
<style>
    body {
    margin: 0;
    padding: 20px;
    font-family: 'Arial', sans-serif;
    background-color: #b897b0;
    background: url(./assets/imgs/bg.png);
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
 
.container {
    padding: 30px;
    border-radius: 50px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    max-width: 600px;
    width: 90%;
    background: url(bg.png), rgba(58, 29, 97, 0.9);
    background-blend-mode: overlay;
    background-size: cover;
    background-position: center;
    color: #ded5d5;
    animation: fadeIn 2s ease-in-out;
    overflow-y: auto;
    max-height: 90vh;
    border: 3px solid rgba(58, 29, 97, 0.9);
}
 
h1 {
    font-size: 2.5em;
    color: #b596cb; /* Purple color */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5), 0 0 5px #ded5d5; /* Text shadow */
    margin-bottom: 50px;
    text-align: center;
}
 
form {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
}
 
.form-row {
    display: flex;
    justify-content: space-between; /* Space between for better alignment */
    width: 100%;
    gap: 100px;
    margin-bottom: 20px;
}
 
.form-group {
    flex: 1;
    text-align: left;
    margin-bottom: 20px;
}
 
label {
    display: block;
    font-size: 1.2em;
    margin-bottom: 5px;
    color: #ded5d5; /* Ensure labels are visible */
    text-align: center;
}
 
 
input, textarea, select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
    font-size: 1em;
    margin-top: 5px;
    background-color: #eee; /* Light background color for inputs */
}
 
 
textarea {
    resize: vertical;
}
 
button {
    margin-top: 20px;
    padding: 10px 20px;
    font-size: 1em;
    color: white;
    background-color: #6a0dad;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
 
button:hover {
    background-color: #a52997; ;
}
 
.notification {
    margin-top: 20px;
    font-size: 1.1em;
    text-align: center;
}
 
 
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
</style>
<body>
<?php include("navbar-u.php");?>   

    <div class="container">
        <h1>Book Now</h1>
        <form action="#" method="post">
            <div class="form-row-center">
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>
            </div>
            <div class="form-row-center">
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
            </div>
            <div class="form-row-center">
                <div class="form-group">
                    <label for="date">Date of Booking:</label>
                    <input type="date" id="date" name="date" required>
                </div>
            </div>
            <div class="form-row-center">
                <div class="form-group">
                    <label for="time">Time of Booking:</label>
                    <input type="time" id="time" name="time" required>
                </div>
            </div>
            <div class="form-row-center">
                <div class="form-group">
                    <label for="location">Location (Full Address):</label>
                    <input type="text" id="location" name="location" required>
                </div>
                <div class="form-group">
                    <label for="indoor-outdoor">Indoor or Outdoor?:</label>
                    <select id="indoor-outdoor" name="indoor-outdoor" required>
                        <option value="indoor">Indoor</option>
                        <option value="outdoor">Outdoor</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="event-title">Title of the Event:</label>
                <input type="text" id="event-title" name="event-title" required>
            </div>
            <div class="form-group">
                <label for="package">Package:</label>
                <select id="package" name="package" required>
                    <option value="special">Special Package - PHP 17,999.00</option>
                </select>
            </div>
            <div class="form-group">
                <label for="payment">Payment method:</label>
                <select id="payment method" name="indoor-outdoor" required>
                    <option value="cash">Cash</option>
                    <option value="paycheque">Paycheque</option>
                    <option value="direct deposit">Direct Deposit</option>
                    <option value="pay cards">Pay Cards</option>
                    <option value="mobile wallets">Mobile Wallets</option>
                </select>
            </div>
            <div class="form-group">
                <label for="requests">Additional Requests:</label>
                <textarea id="requests" name="requests" rows="4"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
        <p class="notification">If your reservation goes through successfully, you will be notified.</p>
        </div>
    </div>
</body>
</html>