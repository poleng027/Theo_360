<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/feedback.css">
    <title>Customer Feedback</title>
</head>
<body>
    <?php include("navbar-u.php");?>    
    <div id="panel" class="panel-container">
        <strong>How satisfied are you with our <br/>customer support performance?</strong>
        <div class="ratings-container">
            <div class="rating">
                <img src="./emoticon/unhappy.png" alt="unhappy">
                <small>Unhappy</small>
            </div>

            <div class="rating">
                <img src="./emoticon/neutral-face.png" alt="neutral">
                <small>Neutral</small>
            </div>

            <div class="rating active">
                <img src="./emoticon/satisfied.png" alt="">
                <small>Satisfied</small>
            </div>
            <div class="rating active">
                <img src="./emoticon/thumbs-up.png" alt="">
                <small>Good</small>
            </div>
            <div class="rating active">
                <img src="./emoticon/happy-face.png" alt="">
                <small>Amazing</small>
            </div>
        </div>
        <button class="btn" id="send">Send Review</button>
    </div>
    <script src="./assets/js/script.js"></script>    
</body>
</html>
