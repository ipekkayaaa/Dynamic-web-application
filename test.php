<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>test</title>
	<meta name="description" content="">
	<meta name="author" content="Apex Innovations, LLC">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width">
</head>
<body>
	<h1>
		<?php
		function helloworld() {
			return "Welcome to Apex Innovations!";
		}
		echo helloworld();
		?>
	</h1>
	<h2>
		<?php
		$message1 = "Application Form!";
		$message2 = "Let's start!";
		echo $message1 . " " . $message2;
		?>
	</h2>

  <!-- show day of switch -->
  <p>"What day is today?"<?php
    $day = "4"; 
    switch ($day) {
      case "1":
        echo "It is Monday!";
        break;
      case "2":
        echo "It is Tuesday!";
        break;
      case "3":
        echo "It is Wednesday!";
        break;
      case "4":
        echo "It is Thursday!";
        break;
      case "5":
        echo "It is Friday!";
        break;
      default:
        echo "Invalid number!";
    }
  ?></p>

  
<!-- check student grade -->
  <p><?php
  $marks = "45";
  if ($marks>=60) {
    $grade = "First division";
  } else if($marks>=45){
    $grade = "Second division";
  } else if ($marks>=33){
    $gradde = "Third division";
  } else {
    $grade = "Fail";
  } 
  
  echo "Student grade: $grade";
  ?>
  </p>

  <!-- factorial program -->
  <P>
  <?php
  function factorial($number){
    if ($number < 2) {
      return 1;
    } else {
      return ($number * factorial($number-1));
    }
  }
  echo factorial(4);
  ?>
  </P>

  <!-- Create chess board using for loop-->
<!-- <table width="400px" cellspacing="0px" cellpadding="0px" style= "border:1px solid;">

// for($row= 1; $row<= 8; $row++){
//   echo "<tr>";
//   // for($colomn= 1; $column<= 8; $row++)
//   {
//     $total= $row + $column;
//     if($total % 2 == 0)
//     {
//       echo "<td height=35px width=30px style= 'backgroungcolor: black;></td>";
//     } else {
//       echo "<td height=35px width=30px backgroungcolor: #000000></td>";
//     }
//   }
//   echo "</tr>";
// }

</table> -->

<!-- giving patern * using for loop -->
<p>
<?php
for ($row= 1; $row <= 8; $row++){
  for ($star= 1; $star<$row; $star++)
  {
    echo "*";
  }
echo "<br>";
}
?>
</p>
</body>
</html>




