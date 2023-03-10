<?php
//include auth_session.php file on all user panel pages
session_start();
if(strlen($_SESSION['your_name'])==0)
    {   
header('location:index.php');
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>
<!DOCTYPE html>
<html>
<!-- Font Icon -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- Main css -->
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/favicon.ico">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Class Alert | Admin Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="icon" href="images/favicon.ico">
</head>

<body>
    <div class="form">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h4 class="form-title">Send attachments and messages here</h4>
                    <form method="POST" enctype="multipart/form-data" class="register-form" id="register-form" action="mailtoallscript.php">
                        <input type="text" name="subject" class="form-control" placeholder="Subject" required="">
                        <br>
                        <textarea name="message" class="form-control" placeholder="Write your message here"
                            required=""></textarea>
                        <br>
                        <input type="file" name="attachment" class="form-control">
                        <br>
                        <div class="form-group form-button">
                            <input type="submit" name="sendtoall" id="sendtoall" class="btn btn-primary" value="Send to all" action="mailtoallscript.php" />
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="images/admin.png" alt="admin image"></figure>
                    <a href="logout.php" class="signup-image-link">Logout</a>
                </div>
            </div>
        </div>

        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>
        <script src="js/main.js"></script>
        <!--footer-->
        <br>
        <p style="text-align:center;">©2022 Class Alert. All Rights Reserved.</p>
</body>
</html>