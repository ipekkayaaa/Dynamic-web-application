
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta chharset="UTF-8">
        <meta http-equive="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <title>Website With Login & Registration</title>

    <!--custom css file link-->
        <link rel="stylesheet" type="text/css" href="signupstyle.css">

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
        
         <!-- Register Container -->
        <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close-outline"></ion-icon>
            </span>

            <!-- Elements in Register Container -->
            <div class="from-box register">
                <h2>Register</h2>
                <form action="login.php">
                    <div class="one">
                        <div class="input-box">
                            <span class="icon" ><ion-icon name="person"></ion-icon>
                            </span>
                            <input type="text" required>
                            <label>Fullname</label>
                        </div>
                        <div class="input-box">
                            <span class="icon" ><ion-icon name="mail"></ion-icon>
                            </span>
                            <input type="email" required>
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
                            <input type="id" required>
                            <label>ULLID</label>
                        </div>
                    </div>
                    <div CLASS="three">
                        <div class="input-box">
                            <span class="icon" >
                               <ion-icon name="lock-closed"></ion-icon>
                           </span>
                           <input type="password" required>
                           <label>Password</label>
                       </div>
                       <div class="input-box">
                            <span class="icon" >
                                <ion-icon name="lock-closed"></ion-icon>
                            </span>
                            <input type="password" required>
                            <label>Confirm Password</label>
                        </div>
                    </div>
                    <div class="i-agree">
                        <label><input type="checkbox">I agree to the terms & conditions</label>
                    </div>
                    <button type="submit" class="btn">Register</button>
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
                



                                
       

                
                
                