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
                <a href="#">About Program</a>
                <a href="#">Department</a>
                <a href="#">Events</a>
                <a href="#">Contact Us</a>
                <button class="btnLogin-popup">Login</button>
            </nav>
        </header>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" placeholder="Search departments...">
            <button>Search</button>
        </div>

        <!-- Departments container -->
        <div class="container">
            <div class="department-container">
                <a href="pathway.php" class="department">
                    <div class="department-name">School of Architecture and Design</div>
                </a>  
            </div>
            <div class="department-container">
                <a href="pathway1.php" class="department">
                    <div class="department-name">Chemical Engineering</div>
                </a>
            </div>
            <div class="department-container">
                <a href="pathway2.php" class="department">
                    <div class="department-name">Curriculum and Instruction/Education</div>
                </a>
            </div>
            <div class="department-container">
                <a href="pathway3.php" class="department">
                    <div class="department-name">History</div>
                </a>
            </div>
            <div class="department-container">
                <a href="pathway4.php" class="department">
                    <div class="department-name">Architecture & Design</div>
                </a>
            </div>
            <div class="department-container">
                <a href="pathway5.php" class="department">
                    <div class="department-name">Biology</div>
                </a>
            </div>
        </div>
    </body>
</html>
