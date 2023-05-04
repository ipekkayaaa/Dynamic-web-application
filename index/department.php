<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Website With Login & Registration</title>

        <!-- custom css file link -->
        <link rel="stylesheet" type="text/css" href="departmentpage.css">
    </head>

    <body>
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
        
        <!-- Departments container -->
        <div class="container">
            <div class="department-container">
                <a href="architecture.php" class="department">
                    <div class="department-name">School of Architecture and Design</div>
                </a>  
            </div>
            <div class="department-container">
                <a href="chemical.php" class="department">
                    <div class="department-name">Chemical Engineering</div>
                </a>
            </div>
            <div class="department-container">
                <a href="education.php" class="department">
                    <div class="department-name">Curriculum and Instruction/Education</div>
                </a>
            </div>
            <div class="department-container">
                <a href="history.php" class="department">
                    <div class="department-name">History</div>
                </a>
            </div>
            <div class="department-container">
                <a href="biology.php" class="department">
                    <div class="department-name">Biology</div>
                </a>
            </div>
        </div>
    </body>
</html>
