<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           
   
$mysqli = new mysqli($servername, $username, $password,$db);

if (isset($_GET['id'])) {
    if (isset($_GET['date'])) {
 $now = $_GET['date'];
    } else  $now = date("Y-m-d"); 
$id=$_GET['id'];
$id_c=$_GET['id_c'];
$n=$_GET['n'];
$result = $mysqli -> query("SELECT id,created_at,code FROM contrat_ep where ep=$id");
    $rows = $result->fetch_row();
   if ($rows) {
        $num = $rows[2];
        $annee = explode('-', $rows[1])[0];
        $now = $rows[1];
   }
  else { 
              $annee = explode('-', $now)[0];

$result1 = $mysqli -> query("SELECT count(id) FROM contrat_ep where created_at LIKE '".$annee."%'");
    $row1 = $result1->fetch_row();
    $num = $row1[0]+1;
    
    include('db_connect/db.php');





  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established
  $sql = "INSERT INTO contrat_ep (code, created_at, ep) values ('$num','$now', '$id')";
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
    include('db_connect/db.php');

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Perform query
  $result = $mysqli -> query("SELECT num,id FROM attestation where client_id=$id_c");
    $row = $result->fetch_row();
    if ($row) {
       $num_att = $row[0];
       if (isset($_GET['a']) && $_GET['a']!=null) {
  $num_att= $_GET['a'];
   $sql = "
UPDATE attestation SET  num = ".$num_att." WHERE client_id=".$id_c;

           if ($conn->query($sql)=== TRUE) {
                echo "DATA INSERTED";
                
              }
              else{

              }
}

   }
  else { 
              $annee = explode('-', $now)[0];
 $result = $mysqli -> query("SELECT count(id) FROM attestation where created_at LIKE '".$annee."%'");
    $row = $result->fetch_row();
    $num_att = $row[0]+1;
if (isset($_GET['a']) && $_GET['a']!=null) {
  $num_att= $_GET['a'];
}
            $sql = "INSERT INTO attestation (num, created_at, client_id) values ('$num_att','$now', '$id_c')";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }

    }
    


$result1 = $mysqli -> query("SELECT * FROM ep_demande where id=$id");
    $row1 = $result1->fetch_row();
    $id_ep = $row1[2];
    $nb=$row1[3];
    $total = $nb*22500;
    $result_ar = $mysqli -> query("SELECT * FROM montant_ar where montant=$total");
    $row_ar = $result_ar->fetch_row();
    $total_ar = $row_ar[2];
      if ($nb==1) {
        $nbb = 'سائق  واحد';
      } else if ($nb==2) {
        $nbb = 'سائقين';
      } else {
        $nbb = '('.$nb.') سائقين  ';
      }
if ($result = $mysqli -> query("SELECT id FROM entreprise where id=$id_ep")) {

$sql = "SELECT * FROM client where entreprise=$id Limit ".$n;
$result_c = $mysqli -> query($sql);
$tr=['','نقل الاشخاص','نقل البضائع'];
  
$tt=0;
while ($row_c = $result_c->fetch_assoc()) {
  $result1 = $mysqli -> query("SELECT * FROM bon where ep=$id LIMIT 1");
    $row1 = $result1->fetch_row();
    $type = $ow1[4];
    $num_b = $row1[2];
    $date_b = $row1[3];
    $num_bon = $row1[1];
    $date_bon = $row1[7];
    $mnt = $row1[5];
    $nomprofesor = $row_c["lastname"].' '.$row_c["firstname"];
    $nomm = $row_c["firstname"];
    $nomp = $row_c["lastname"];
    $num_c = explode('-', $row_c["created_at"])[0].'-'.$row_c["code"];

    $address = $row_c["address"];
    $date_n = $row_c["birthdate"];
    $formation = $tr[$row_c["training"]];
    $email = $row_c["mail"];
    $num_tel = $row_c["phone"];
      $user = $row_c["user"];
    
      
if ($tt != $row_c["training"] && $tt <3 ) {
             $tt += $row_c['training'];
           }           
      if ($tt == 1) {
        $t= 'نقل الأشخاص ';
      }else if ($tt == 2) {
        $t= 'نقل البضاائع ';
      } else {
        $t= 'نقل الأشخاص و البضائع';
      }
  }
$result = $mysqli -> query("SELECT * FROM entreprise where id=$id_ep");

while ($row = $result->fetch_assoc()) {
    
    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    //Parametros
    $nom = $row["nom"];
    $address = $row["address"];
    $gerant = $row["gerant"];
      
    //Cargando template
    $template = 'contrat_ce.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    //Escribir Nuevos campos
    $TBS->MergeField('nom', $nom);
    $TBS->MergeField('annee', $annee);
    $TBS->MergeField('address', $address);
    $TBS->MergeField('gerant', $gerant);
    $TBS->MergeField('training', $t);
    $TBS->MergeField('num', $num);
    $TBS->MergeField('nbr_c', $nbb);
    $TBS->MergeField('user', $user);

//Escribir Nuevos campos
    $TBS->MergeField('nomm', $nomm);
    $TBS->MergeField('pnom', $nomp);
    $TBS->MergeField('num_att', $num_att);
    $TBS->MergeField('num_c', $num_c);
    $TBS->MergeField('mnt', $mnt);
    $TBS->MergeField('type', $tps[$type]);
    $TBS->MergeField('date_n', $date_n);
    $TBS->MergeField('num_tel', $num_tel);
    $TBS->MergeField('email', $email);
    $TBS->MergeField('formation', $formation);
    $TBS->MergeField('date', $now);
    $TBS->MergeField('date_b', $date_b);
    $TBS->MergeField('num_b', $num_b);
    $TBS->MergeField('date_bon', $date_bon);
    $TBS->MergeField('num_bon', $num_bon);
    $TBS->MergeField('total', $total);
    $TBS->MergeField('total_ar', $total_ar);


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