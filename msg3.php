<?php
include('db_connect/db.php');

$r1 = $_POST["rep1"];
$r2 = $_POST["rep2"];
$r3 = $_POST["rep3"];



//connection established

$sql = "INSERT INTO sondage(id,rep1,rep2,rep3,client)
         VALUES('','$r1','$r2','$r3','11')";
           if ($conn->query($sql)=== TRUE) {
	          	echo "DATA INSERTED";
	          	
	          }
	          else{

	          	echo "Error:".$sql."<br>".$conn->error;
	          }

	          
	$_SESSION['message'] = 'Task Saved Successfully';
	$_SESSION['message_type'] = 'success';
	header('Location: Sondage.php');
?>
