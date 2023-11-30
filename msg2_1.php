<?php

include('db_connect/db.php');
if (isset($_GET["id"])) {
	$id = $_GET["id"];



//connection established

$sql = "UPDATE plnt set status=1 where id=$id;";

           if ($conn->query($sql)=== TRUE) {
	          	echo "DATA INSERTED";
	          	
	          }
	          else{

	          }
	header('Location: Admin.php');

}

if (isset($_GET["idd"])) {
	$id = $_GET["idd"];
	$message = $_GET["message"];



//connection established

$sql = "UPDATE plnt set status=2, solution='$message' where id=$id";

           if ($conn->query($sql)=== TRUE) {
	          	echo "DATA INSERTED";
	          	
	          }
	          else{

	          }
	header('Location: Admin.php');

}
	       


?>
