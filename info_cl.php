<?php 
if (isset($_GET["id"])) {
	$id = $_GET["id"];
  $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

 
$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Perform query
    $num = 1;
$result = $mysqli -> query("SELECT * FROM client where id=$id");
    $row = $result->fetch_row();
echo $row[2].','.$row[3].','.$row[4].','.$row[5].','.$row[7].','.$row[8].','.$row[9].','.$row[10].','.$row[11].','.$row[12].','.$row[13].','.$row[14];
}