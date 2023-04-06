<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta chharset="UTF-8">
        <meta http-equive="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <title>Website With Login & Registration</title>

    <!--custom css file link-->
        <link rel="stylesheet" type="text/css" href="loginstyle.css">

    </head>
    <body>
        <!-- background image -->
            <img src="school.jpg" alt="">
        
         <!-- Project Logo and Header Menu -->
        <header>
            <img src="symbol.jpg" class="logo">
            <nav class="navigation">
                <a href="#">About Program</a>
                <a href="#">Department</a>
                <a href="#">Events</a>
                <a href="#">Contact Us</a>
                <button class="btnLogin-popup">Login</button>
            </nav>
        </header>

        <!-- Login Container -->
        <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close-outline"></ion-icon>
            </span>

            <!-- Elements in Login Container -->
            <div class="from-box login">
                <h2>Login</h2>
                <form action="activitysubmit.php">
                    <div class="input-box">
                        <span class="icon" ><ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                         <span class="icon" >
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an accont?<a href="signup.php" class="register-link">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

    <!-- Connection to JS -->
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>   
    </body>
</html>



















