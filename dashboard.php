<?php
//include auth_session.php file on all user panel pages
session_start();
if(strlen($_SESSION['your_name'])==0)
    {   
header('location:index.php');
}
?>
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
        <title>Class Alert | Student Dashboard</title>
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
                    <h2 class="form-title">Hey, <?php
                    $full=$_SESSION['your_name'];
                    $variable = substr($full, 0, strpos($full, "@"));
                     echo $variable; 
                     ?>!</h2>
                    <h3>Welcome to Class Alert dashboard.</h3>
                    <p>You will receive the daily notification of next day classes on <?php echo $_SESSION['your_name']; ?></p>
                    <p>Use below buttons to navigate.</p>
                    <br>
                    <a type="button" class="btn btn-primary" href="viewtimetable.php">View Time Table</a>
                  <!--  <a type="button" class="btn btn-primary" href="changepassword.php">Change Password</a> -->
                </div>
                <div class="signup-image">
                    <figure><img src="images/student.png" alt="admin image"></figure>
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