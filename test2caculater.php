<!DOCTYPE html>
<html lang="en">
<head>
    	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>caculater program</title>
	<meta name="description" content="">
	<meta name="author" content="Apex Innovations, LLC">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width">
</head>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($first_num) && is_numeric($second_num)) {
    switch ($operator) {
        case "Add":
            $reault = $first_num + $second_num;
            break;
        case "Subtract":
            $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}
?>

<body>
    <div id="page-wrap">
    <h3>PHP - Simple Caculator Program</h3>
        <form action="" method="POST" id="quiz-form">
            <p>
                <input type= "number" name= "first_num" id= "first_num" required= "required" value= "<?php echo $first_num; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required= "required" value= "<?php echo $second_num; ?>" /> <b>Second Number</b>
            </p>

            <p>
                <input readonly= "readonly" name= "result" value=" <?php echo $result; ?>" /> <b>Result</b> 
            </p>
            <input type="submit" name= "operator" value= "Add" />
            <input type="submit" name= "operator" value= "Subtract" />
            <input type="submit" name= "operator" value= "Multiply" />
            <input type="submit" name= "operator" value= "Divide" />
        </form>
    </div>
</body>
</html>