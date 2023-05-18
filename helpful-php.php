<?php
error_reporting(E_ALL);
if(!class_exists('apx_DBAccessBaseClass')){
	require_once("../classes/vendor/autoload.php");
}

ini_set('max_execution_time', '0'); // for infinite time of execution 



/*
* PDO - PHP Data Objects
*/
$pdo = apx_pdoConn::getConnection(true); //Setting true/false will switch which connection to use in the .env. Since we set them both to the same thing, this isnt that big of deal

$userID = "275515";

$userQry = $pdo->prepare("SELECT * FROM Users WHERE ID = :userID");

if($userQry->execute(array('userID'=>$userID))){
	while($row = $userQry->fetch()){
		$firstName = $row['FirstName'];
		echo "HERE IS THE USER DATA: " . $firstName . " " . $row['LastName'] . " - " . $row['ID'] . "<br/>";
	}
}


echo "------------------------------------------<br/>";


/*
*   APX class system
*   In order to pull the classes, they must be included in the file. Most of the time, you will have the HEADER.php as part of your file. That includes the class system. If you need to include it yourself, you can do so like the above (lines 3-5).
*   Classes are either singular or plural. Singular requires you to be targeting one individual record. Plural assumes you are pulling 1 or more rows.
*   When a new table is made in the database, you have to manually create the singluar and plural version of the class for that new table
*   For more info, refer to the parent classes (apx_DBAccessBaseClass.php and apx_DBAccessBaseClassIterator.php)
*/

$userID = "275515";

//Both of the below are the exact same. By default, the class system will assume you are passing the ID as a param.
$userA = new apx_User($userID);
$userB = new apx_User("ID=" . $userID);
echo "HERE IS THE USER DATA FOR USER A: " . $userA->FirstName . " " . $userA->LastName . " - " . $userA->ID . "<br/>";
echo "HERE IS THE USER DATA FOR USER B: " . $userB->FirstName . " " . $userB->LastName . " - " . $userB->ID . "<br/>";

echo "------------------------------------------<br/>";

//Using the class system allows us to grab data without having to write huge complex queries. Below is an example of me pulling all users that have John as a first name and Klein as a last name.
$users = new apx_Users("FirstName = 'John' AND LastName = 'Klein'");
foreach($users as $user){
    echo "HERE IS THE USER DATA FOR LOOPING: " . $user->FirstName . " " . $user->LastName . " - " . $user->ID . "<br/>";
}


echo "------------------------------------------<br/>";
/*
*   AP class system
*   This system is mainly used in conjunction with the Classroom
*   Does not require you to create a new class for a new table in the database
*/
require_once("../Classroom/Classroom.inc");

$user = new apUser(275515);
echo "HERE IS THE USER DATA FOR USER AP SYSTEM: " . $user->FirstName . " " . $user->LastName . " - " . $user->ID . "<br/>";