<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,
        initial-scale=1.0">
        <title>Website With Login & Registration</title>

    <!--custom css file link-->
        <link rel="stylesheet" type="text/css" href="studentlist.css">

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

        <h1>Student List</h1>
        <table>
            <tr>
                <th>Student ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Department</th>
                <th>Pathway Type</th>
            </tr>
		    <tr>
			    <td><a href="activitysubmit.php">C00528785</a></td>
			    <td>Ipek</td>
			    <td>Kaya</td>
			    <td>Chemical Engineering</td>
                <td>Excellence Pathway</td>
		    </tr>
		    <tr>
		     	<td><a href="student_profile.html">C00784678</a></td>
		    	<td>Jane</td>
		     	<td>Smith</td>
		    	<td>Curriculum and Instruction/Education</td>
                <td>Distinction Pathway</td>
	    	</tr>
	    	<tr>
			    <td><a href="student_profile.html">C00987364</a></td>
			    <td>David</td>
			    <td>Lee</td>
		    	<td>History</td>
                <td>Excellence Pathway</td>

		    </tr>
            
	    </table>
    </body>
</html>
