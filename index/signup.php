<?php

include("dbconnection.php");

// check if the form has been submitted
if (isset($_POST['btn'])) {

    // get the form data
    $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password_"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["cpassword"]));


    $select_users = mysqli_query($conn, "SELECT * FROM Users WHERE email = '$email'") or die('query failed!');

    if(mysqli_num_rows($select_users) > 0 ){
        $message[] = 'user already exists!';
    }else{
        if($password != $cpassword){
            $message[] = 'confirm password not matched!';
        }else{
            mysqli_query($conn, "INSERT INTO Users (fullname, email, password_) VALUES ('$fullname', '$email', '$password')") 
            or die (' ..query failed!');
            
            $message[] = 'registered successfully!';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <title>Website With Login & Registration</title>

    <!--custom css file link-->
        <link rel="stylesheet" type="text/css" href="signupstyle.css">

    </head>
    <body>

        <!-- background image -->
            <img class="background" src="school.jpg" alt="">
        
         <!-- Project Logo and Header Menu -->
        <header>
            <img src="symbol.jpg" class="logo">
            <nav class="navigation">
                <a href="aboutpathway.php">About Program</a>
                <a href="department.php">Department</a>
                <a href="activities.php">Activities</a>
                <a href="#">Contact Us</a>
                <a href="login.php">
                 <button class="btnLogin-popup">Login</button>
                </a>
            </nav>
        </header>
        
         <!-- Register Container -->
        <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close-outline"></ion-icon>
            </span>

            <!-- Elements in Register Container -->
            <div class="from-box register">
                <h2>Register</h2>
                <form action="signup.php" method="POST">
                    <div class="one">
                        <div class="input-box">
                            <span class="icon" ><ion-icon name="person"></ion-icon>
                            </span>
                            <input type="text" name="fullname" required>
                            <label>Fullname</label>
                        </div>
                        <div class="input-box">
                            <span class="icon" ><ion-icon name="mail"></ion-icon>
                            </span>
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>
                    </div>
                    <div class="two">
                        <div class="input-box">
                            <select name="select title" id="select_title" required>
                                <option value="select_title">Select Title</option>
                                <option value="undergradute">Undergraduate Student</option>
                                <option value="graduate_student">Graduate Student</option>
                                <option value="Mentor">Mentor</option>
                                <option value="department_dean">Department Dean</option>
                                <option value="SCRCS">SCRCS Staff</option>
                                <label>Select Title</label>
                            </select>
                        </div>
                        <div class="input-box">
                             <span class="icon" >
                               <ion-icon name="id-card-outline"></ion-icon>
                            </span>
                            <input type="id" name="ullid" required>
                            <label>ULLID</label>
                        </div>
                    </div>
                    <div CLASS="three">
                        <div class="input-box">
                            <span class="icon" >
                               <ion-icon name="lock-closed"></ion-icon>
                           </span>
                           <input type="password" name="password" required>
                           <label>Password</label>
                       </div>
                       <div class="input-box">
                            <span class="icon" >
                                <ion-icon name="lock-closed"></ion-icon>
                            </span>
                            <input type="password" name="cpassword" required>
                            <label>Confirm Password</label>
                        </div>
                    </div>
                    <div class="i-agree">
                        <label><input type="checkbox">I agree to the terms & conditions</label>
                    </div>
                    <button type="submit" name="btn" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already have an accont?<a href="login.php" class="login-link">Login</a>
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
                
                