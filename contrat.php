<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

           
   
$mysqli = new mysqli($servername, $username, $password,$db);

if (isset($_GET['id'])) {
    if (isset($_GET['date'])) {
 $now = $_GET['date'];
    } else  $now = date("Y-m-d"); 
$id=$_GET['id'];
$result = $mysqli -> query("SELECT code,id,created_at FROM contrat where client_id=$id");
    $rows = $result->fetch_row();
   if ($rows) {
        $num = $rows[0];
        $annee = explode('-', $rows[2])[0];
        $result = $mysqli -> query("SELECT num,id FROM attestation where client_id=$id LIMIT 1");
    $row = $result->fetch_row();
    $num_att = $row[0];
    $id_att = $row[1];
    if (isset($_GET['c']) && $_GET['c'] != null) {
      $num = $_GET['c'];
      $date_c = $_GET['date_c'];
     $sql = "UPDATE contrat Set code = ".$num.", created_at = '".$date_c."' where client_id=$id";
              if ($mysqli->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
       //   footer: '<a class=\"btn btn-primary\" href=\"pdf.php\">طباعة  الطلب</a>'
    }
    }
    if (isset($_GET['a']) && $_GET['a'] != null) {
      $num_att = $_GET['a'];
      $date_a = $_GET['date_a'];
     $sql = "UPDATE attestation Set num = ".$num_att.", created_at = '".$date_a."' where id=$id_att";
              if ($mysqli->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
       //   footer: '<a class=\"btn btn-primary\" href=\"pdf.php\">طباعة  الطلب</a>'
    }
    }
   

   }
  else { 
             
    
    include('db_connect/db.php');





if (isset($_GET['date_c']) && $_GET['date_c']!=null) {
   $date_c= $_GET['date_c']; # code...
}
if (isset($_GET['date_a']) && $_GET['date_a']!=null) {
  $date_a= $_GET['date_a'];
}
 $annee = explode('-', $date_c)[0];
 $result = $mysqli -> query("SELECT count(id) FROM attestation where created_at LIKE '".$annee."%'");
    $row = $result->fetch_row();
    $num_att = $row[0]+1;
$result1 = $mysqli -> query("SELECT count(id) FROM contrat where created_at LIKE '".$annee."%'");
    $row1 = $result1->fetch_row();
    $num = $row1[0]+1;
if (isset($_GET['c']) && $_GET['c']!=null) {
   $num= $_GET['c']; # code...
}
if (isset($_GET['a']) && $_GET['a']!=null) {
  $num_att= $_GET['a'];
}
  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established
  $sql = "INSERT INTO contrat (code, created_at, client_id) values ('$num','$date_c', '$id')";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
            $sql = "INSERT INTO attestation (num, created_at, client_id) values ('$num_att','$date_a', '$id')";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
}

}

else $id=0;

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Perform query
if ($result = $mysqli -> query("SELECT id FROM client where id=$id")) {

$result = $mysqli -> query("SELECT * FROM client where id=$id");
$tr=['','نقل الاشخاص','نقل البضائع'];
while ($row = $result->fetch_assoc()) {
    $result1 = $mysqli -> query("SELECT * FROM bon where client_id=$id LIMIT 1");
    $row1 = $result1->fetch_row();
    $type = $row1[4];
    $num_b = $row1[2];
    $date_b = $row1[3];
    $mnt = $row1[5];
    $tps=['','أولية','','كاملة'];
    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    //Parametros
    $nomprofesor = $row["lastname"].' '.$row["firstname"];
    $nom = $row["firstname"];
    $nomp = $row["lastname"];
    $num_c = explode('-', $row["created_at"])[0].'-'.$row["code"];

    $address = $row["address"];
    $date_n = $row["birthdate"];
    $user = $row["user"];
    $formation = $tr[$row["training"]];
    $email = $row["mail"];
    $num_tel = $row["phone"];
    $firmadecano = 'firma.png';
    $pay='دفع مصاريف التكوين على دفعتين:
-   الدفعة الأولى: مبلغ [mnt] دج  بتاريخ: [date_p]
-   الدفعة الثانية: مبلغ  دج بتاريخ:  2022-12-28
للحصول على شهادة الكفاءة المهنية لسائقي مركبات نقل البضائع حيث سيتم استدعاء المترشح لمباشرة التكوين المرغوب فيه بمركز تكوين المؤسسة. 
';
    //Cargando template
    $template = 'contrat_cl.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    //Escribir Nuevos campos
    $TBS->MergeField('nom', $nomprofesor);
    $TBS->MergeField('nomm', $nom);
    $TBS->MergeField('pnom', $nomp);
    $TBS->MergeField('num', $num);
    $TBS->MergeField('num_att', $num_att);
    $TBS->MergeField('num_c', $num_c);
    $TBS->MergeField('mnt', $mnt);
    $TBS->MergeField('type', $tps[$type]);
    $TBS->MergeField('pay', $pay);
    $TBS->MergeField('annee', $annee);
    $TBS->MergeField('address', $address);
    $TBS->MergeField('date_n', $date_n);
    $TBS->MergeField('num_tel', $num_tel);
    $TBS->MergeField('email', $email);
    $TBS->MergeField('formation', $formation);
    $TBS->MergeField('user', $user);
    $TBS->MergeField('date_a', $date_a);
    $TBS->MergeField('date_c', $date_c);
    $TBS->MergeField('date_b', $date_b);
    $TBS->MergeField('num_b', $num_b);

    $TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

    $save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
    $output_file_name = str_replace('.', '_'.$num_c.$save_as.'.', $template);
    if ($save_as==='') {
        $TBS->Show(OPENTBS_DOWNLOAD, $output_file_name); 
        exit();
    } else {
        $TBS->Show(OPENTBS_FILE, $output_file_name);
        exit("File [$output_file_name] has been created.");
    }
    
  // Free result set
  $result -> free_result();
}
}
?>