<?php 

include('db_connect/db.php');


    $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

           
   
$mysqli = new mysqli($servername, $username, $password,$db);
$i=1; 
function generateRandomString($length = 7) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

 
$x = generateRandomString();

//connection established
 //$sql = "DELETE from  bon WHERE id=133 ";
// $sql = "UPDATE client_taxi Set id = id-204 where 1 ";
  //$sql = "INSERT into module (nom, type) values ('التطبيقي', 1)";
  if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
       //   footer: '<a class=\"btn btn-primary\" href=\"pdf.php\">طباعة  الطلب</a>'
    }


/*$sql = "INSERT INTO `profs` (`id`, `code`, `firstname`, `lastname`, `id_sp`, `email`, `phone`, `cpt`) VALUES (5, NULL, 'كريم', 'عمرون', '0', '\'\'', '0', '0')";
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
       //   footer: '<a class=\"btn btn-primary\" href=\"pdf.php\">طباعة  الطلب</a>'
    }*/

//$sql = " DELETE FROM `client` WHERE id>93";
 $resultx = $mysqli -> query("SELECT ep_id,count(*) FROM condidat_f where acc=1 and grp=1 and ep_id!=0 and  id_f=1 group by ep_id");
             while ($rowx = $resultx->fetch_assoc()) {
                $x= $rowx['count(*)'];
                 echo $rowx['ep_id'].' *** '. $x;
                 }
             ?>