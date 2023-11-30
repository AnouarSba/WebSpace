<?php 
    include('db_connect/db.php');
        if (isset($_GET['date'])) {
 $now = $_GET['date'];
    } else  $now = date("Y-m-d"); 
if (isset($_GET['r'])) {
$id=$_GET['id'];
$r=$_GET['r'];
  $sql = "INSERT INTO reunion (num, formation) values ('$id', '$id')";
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 
             // echo "Error:".$sql."<br>".$conn->error;
            }            header('Location: Formations.php');
}
else if (isset($_GET['delete'])) {
$id=$_GET['id'];
  $sql = "  DELETE from client where id=".$id;
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 
             // echo "Error:".$sql."<br>".$conn->error;
            }            header('Location: centerF.php');
} else if (isset($_GET['delete_ep'])) {
$id=$_GET['id'];
  $sql = "  DELETE from ep_demande where id=".$id;
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 
             // echo "Error:".$sql."<br>".$conn->error;
            }   
 $sql = "  DELETE from client where entreprise=".$id;
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 
             // echo "Error:".$sql."<br>".$conn->error;
            }   
                     header('Location: Registration_Ep_candidat.php');
} else if (isset($_GET['ept'])) {
$id=$_GET['ept'];
 $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           
   
$mysqli = new mysqli($servername, $username, $password,$db);
  $sql = "UPDATE ep_demande SET valid = 1  where id = $id";
   if ($mysqli->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 
             // echo "Error:".$sql."<br>".$conn->error;
            }  
  $sql = "SELECT * FROM client where entreprise=$id";
$result = $mysqli -> query($sql);

   
while ($rows = $result->fetch_assoc()) {
      if (!$rows['valide']) {
                      $annee = explode('-', $rows['created_at'])[0];

$result1 = $mysqli -> query("SELECT count(id) FROM client where valid=1 and created_at LIKE '".$annee."%'");
    $row1 = $result1->fetch_row();
    $num = $row1[0]+1;
         $sql1 = "UPDATE client SET code=".$num." , valid = 1 where id = ".$rows['id'];
   if ($conn->query($sql1)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
      }
    }
                      header('Location: Registration_Ep_candidat.php');
}
else       
if (isset($_GET['formation'])) {
$id=$_GET['id'];
$r=$_GET['formation'];
$p=$_GET['prof'];
echo "string";
  $sql = "INSERT INTO commission (id_prof, reunion, created_at) values ($p , $r , '$now')";
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 

             // echo "Error:".$sql."<br>".$conn->error;
            }            header('Location: Formations.php');


} else       
if (isset($_GET['form'])) {
$form=$_GET['form'];
$ep=$_GET['ep'];
$c=$_GET['client'];
$tr=$_GET['tr'];
$grp=$_GET['grp'];
$redoublant =0;
if (isset($_GET['abs']) and $_GET['abs'] != '') {
  $abs=$_GET['abs'];
  $redoublant=1;
}
 $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           
   
$mysqli = new mysqli($servername, $username, $password,$db);


$result = $mysqli -> query("SELECT * FROM condidat_f where id_c=".$c." and id_f=".$form);
    $rows = $result->fetch_row();
    if ($rows) {
    	echo '<script language="javascript">';
echo 'alert("مترشح مدرج سابقا بهذا التكوين"); window.location.replace("centerF.php");';
echo '</script>'; 
    } else {

    }
    
  $sql = "INSERT INTO condidat_f (id_c, ep_id, id_f , created_at, training, grp, redoublant, cause) values ($c , $ep , $form, '$now', $tr, $grp, $redoublant, '$abs')";
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 

             // echo "Error:".$sql."<br>".$conn->error;
            }
$result = $mysqli -> query("SELECT training FROM formation where id=".$form);
    $rows = $result->fetch_row();
$tt=$rows[0];
  if ($tt <3) {
  	$result = $mysqli -> query("SELECT * FROM client where id=".$c);
    $rows = $result->fetch_row();
        
if ($tt != $rows[8]  ) {
             $tt += $rows[8];
             $sql = "UPDATE  formation SET training = ".$tt." where id=".$form;
   if ($mysqli->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 

             // echo "Error:".$sql."<br>".$conn->error;
            }
           }
  }
           
echo '<script language="javascript">';
echo 'alert("لقد تم ادراج المترشح بالتكوين"); window.location.replace("centerF.php");';
echo '</script>'; 
}

else       
if (isset($_GET['note'])) {
$id_f=$_GET['id_f'];



 $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           
   
$mysqli = new mysqli($servername, $username, $password,$db);
$i=0;

$result = $mysqli -> query("SELECT * FROM condidat_f where id_f=".$id_f);
    
while ($row_c = $result->fetch_assoc()) {
    $i++;
$status=$_GET['status'.$i];
$abd=0;

if ($status==1) {
 if (isset($_GET['ch1_'.$i]) )  {
 $n1=21;
} else {
   $n1=$_GET['note1_'.$i];
}
if (isset($_GET['ch2_'.$i]))  {
  $n2=21;
} else {
  $n2=$_GET['note2_'.$i];
}
if (isset($_GET['ch3_'.$i]) )  {
  $n3=21;
} else {
  $n3=$_GET['note3_'.$i];
}
if (isset($_GET['ch4_'.$i])  )  {
  $n4=21;
} else {
  $n4=$_GET['note4_'.$i];
}
if (isset($_GET['ch5_'.$i])  )  {
  $n5=21;
} else {
  $n5=$_GET['note5_'.$i];
}
if (isset($_GET['ch6_'.$i])  )  {
  $n6=21;
} else {
  $n6=$_GET['note6_'.$i];
}
if (isset($_GET['ch7_'.$i])  )  {
  $n7=21;
} else {
  $n7=$_GET['note7_'.$i];
}
if (isset($_GET['ch8_'.$i])  )  {
  $n8=21;
} else {
  $n8=$_GET['note8_'.$i];
}
/*if (isset($_GET['ch9_'.$i])  )  {
  $n9=21;
} else {
  $n9=$_GET['note9_'.$i];
}*/
if ($_GET['tr'.$i] ==1 ) {
    $div = 8;
    if ($n1==21 || $n2==21 || $n3==21 || $n4==21 || $n5==21 || $n6==21 || $n7==21 || $n8==21 ) {
  $abd =1;
  $res = 0;
  $rq = '';
} else if ($n1<5 || $n2<5 || $n3<5 || $n4<5 || $n5<5 || $n6<5 || $n7<5 || $n8<5  ) {
  $res = 0;
  $rq = 'الحصول على نقطة اقصائية (أقل من 5)';
} else{
  $some = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8;
  
  $moy = $some / $div ;
  if ($moy >=10) {
    $res =1 ;
    $rq = '';
  } else {
    $res = 0 ;
    $rq = 'تحصل على معدل عام أقل من 10';
  }
  
}
if ($n1==21  &&  $n2==21 &&  $n3==21 &&  $n4==21 && $n5==21 &&  $n6==21 &&  $n7==21 &&  $n8==21 ) {
   $rq = 'غائب';
}
  }
   else {
    $div = 8;
    if ($n1==21 || $n2==21 || $n3==21 || $n4==21 || $n5==21 || $n6==21 || $n7==21 || $n8==21  ) {
  $abd =1;
  $res = 0;
  $rq = '';
} else if ($n1<5 || $n2<5 || $n3<5 || $n4<5 || $n5<5 || $n6<5 || $n7<5 || $n8<5 ) {
  $res = 0;
  $rq = 'الحصول على نقطة اقصائية (أقل من 5)';
} else{
  $some = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8;
   
  $moy = $some / $div ;
  if ($moy >=10) {
    $res =1 ;
    $rq = '';
  } else {
    $res = 0 ;
    $rq = 'تحصل على معدل عام أقل من 10';
  }
  
}
if ($n1==21 &&  $n2==21 &&  $n3==21 &&  $n4==21 && $n5==21 &&  $n6==21 &&  $n7==21 &&  $n8==21) {
  $rq = 'غائب';
}
  }

if ($row_c['redoublant'] == 1 && $res==0) {
     $status=2;
  }
 $sql = "UPDATE  condidat_f set n1='$n1' , n2='$n2' , n3='$n3' , n4='$n4' , n5='$n5' , n6='$n6' , n7='$n7' , n8='$n8' , n9='$n9' , status='$status' , resultat= '$res', remarque = '$rq' where  id=".$row_c['id'];
  
} else {

  $sql = "UPDATE  condidat_f set resultat=0, remarque='تخلى عن  الدورة', status=".$status." where  id=".$row_c['id'];
  
}
// echo $sql;
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 

             // echo "Error:".$sql."<br>".$conn->error;
            }

} 
          
echo '<script language="javascript">';
echo 'alert("لقد تم  تحديث علامات المترشحين"); window.location.replace("Evaluation.php?id='.$id_f.'");';
echo '</script>'; 
}


 ?>