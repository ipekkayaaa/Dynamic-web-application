<?php
   include("dbconnection.php");
   if (isset($_POST["submit"])){
      $activity_no = $_POST['Activity_No'];
      $activity_type_no = $_POST['Activity_type_no'];
      $activity_name = $_POST['Activity_no'];
      $activity_start_date = $_POST['Activity_start_date'];
      $activity_end_date = $_POST['Activity_end_date'];
      $activity_address = $_POST['Activity_address'];
      $activity_time = $_POST['Activity_time'];
      $activity_desc = $_POST['Activity_desc'];

      $sql = "select * from Activity where Activity_No = '$activity_no' and Activity_type_no = '$activity_type_no'
      and Activity_name = '$activity_name' and Activity_start_date = '$activity_start_date' and Activity_end_date = '$activity_end_date'
      and Activity_address = '$activity_address' and  Activity_time = '$activity_time' and Activity_desc = '$activity_desc'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
   
      if($count==1){
         header("Location:department.php");

      }
      else 
         echo '<script>
              window.location.href = "index.php";
              alert("Login failed. Invalid username or password")
              </script>';
   }

?>