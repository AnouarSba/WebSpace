<?php 
    include('db_connect/db.php');
    $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

           
    $date = date("Y-m-d"); 


$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
 if (isset($_GET['delete'])) {
$id=$_GET['id'];
  $sql = "  DELETE from client_taxi where id=".$id;
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 
             // echo "Error:".$sql."<br>".$conn->error;
            }            header('Location: Taxi_candidat.php');
}     

 if (isset($_GET['confirm'])) {
$id=$_GET['id'];
   $sql = "SELECT * FROM client_taxi where id=$id";
$result = $mysqli -> query($sql);

    $rows = $result->fetch_row();
      if (!$rows[17]) {
                      $annee = explode('-', $rows[15])[0];

$result1 = $mysqli -> query("SELECT count(id) FROM client_taxi where valid=1 and created_at LIKE '".$annee."%'");
    $row1 = $result1->fetch_row();
    $num = $row1[0]+1;
         $sql1 = "UPDATE client_taxi SET code=".$num." , valider_le='".$date."' , valid = 1 where id=".$id;
   if ($conn->query($sql1)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
      }
            header('Location: Taxi_candidat.php');
}

 if (isset($_GET['date'])) {
$id=$_GET['date'];
$dd=$_GET['dd'];
$df=$_GET['df'];
          $sql1 = "UPDATE list_taxi SET date_d='".$dd."' , date_f='".$df."' where id=".$id;
   if ($conn->query($sql1)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
      
if (isset($_GET['centre'])) {
         header('Location: list_candidat_taxi.php');
      } else {
         header('Location: list_taxi.php');
      }}          
 ?>