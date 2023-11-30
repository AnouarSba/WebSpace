<?php
include('db_connect/db.php');

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$website = $_POST["website"];
$message = $_POST["message"];



//connection established
    $date = date("Y-m-d"); 

$sql = "INSERT INTO propo(name,email,phone,website,message,created_at)
         VALUES('$name','$email','$phone','$website','$message','$date')";
           if ($conn->query($sql)=== TRUE) {
	          	echo "DATA INSERTED";
	          	
	          }
	          else{

	          }

	        echo
            "<script type='text/javascript'>alert('شكرا، سيتم أخذ اقتراحاتكم بعين الاعتبار');location='Espace_client.php';
</script> ";  
?>
