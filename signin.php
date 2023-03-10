<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Class Alert</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="icon" href="images/favicon.ico">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Table Style -->
    <style>
        table {
            border-collapse: separate;
            border-spacing: 0 15px;
        }
    </style>
</head>

<body>
    <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['your_name'])) {
        $username = stripslashes($_REQUEST['your_name']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['your_pass']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['your_name'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
            exit();
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='signin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="index.php" class="signup-image-link">back to sign up page</a>
                    <a href="adminsignin.php" class="signup-image-link">Admin login</a>
                    <p style="font-size:10px;text-align:center;">Please feel free to contact our team, if you face any issues while logging in.</p>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Class Alert</h2>
                    <h3 class="form-title">Sign in</h3>
                    <form method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="your_name" id="your_name" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="your_pass" id="your_pass" placeholder="Password" />
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!--author section-->
        <br>
        <br>

        <div class="container">
            <div class="signup-form">
                <br>
                <h2 class="form-title"> Our Team</h2>
                <table cellspacing="30">
                    <tr>
                        <td><img src="images/bablu.png" alt="20H51A62A3" style="width:150px;height:150px;"></td>
                        <td>
                            <p> &ensp; 20H51A62A3 J.SAI SREE HARSHA</p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/62a0.png" alt="20H51A62A0" style="width:150px;height:150px;"></td>
                        <td>
                            <p> &ensp; 20H51A62A0 G.DHEERAJ REDDY</p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/6209.png" alt="21H55A6209" style="width:150px;height:150px;"></td>
                        <td>
                            <p> &ensp; 21H55A6209 P.Sumanth Reddy</p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/6205.png" alt="21H55A6205" style="width:150px;height:150px;"></td>
                        <td>
                            <p> &ensp; 21H55A6205 D.David Raju</p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="images/6211.png" alt="21H55A6211" style="width:150px;height:150px;"></td>
                        <td>
                            <p> &ensp; 21H55A6211 Aravind</p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!--footer-->
        <br>
        <p style="text-align:center;">©2022 Class Alert. All Rights Reserved.</p>
    </section>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <?php
    }
?>
</body>

</html>