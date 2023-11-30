<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           
$date_f = date("Y-m-d", strtotime($date.' +3 month'));


if (isset($_GET['id'])) {
$id=$_GET['id'];
$num_b=$_GET['num_b'];
$date_b=$_GET['date_b'];
$m=$_GET['m'];
$m_ar=$_GET['m_ar'];
$type=$_GET['training'];
$l=['','الأولية','الاضافية', 'الكاملة'];
if (isset($_GET['date'])) {
    $date = $_GET['date'];

    } else {
        $date = date("Y-m-d"); 
  # code...
    }
}

else $id=0;
$tr=['','نقل الاشخاص','نقل البضائع'];

$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Perform query
              $annee = explode('-', $date)[0];
    $num = 1;
$result = $mysqli -> query("SELECT count(id) FROM bon where created_at LIKE '".$annee."%'");
    $row = $result->fetch_row();
    $num = $row[0]+1;
 
    include('db_connect/db.php');


$num= $_GET['b'];
  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established
    $now = date("Y-m-d"); 
  $sql = "INSERT INTO bon (code,num_b, date_b, type, montant, created_at, ep) values ('$num','$num_b', '$date_b', '$type', '$m', '$date', '$id')";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
             /*/* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";/*/
             
if ($result = $mysqli -> query("SELECT id FROM client where entreprise=$id")) {

$result = $mysqli -> query("SELECT * FROM client where entreprise=$id");

$data = array();

$tt=0;
while ($row = $result->fetch_assoc()) {


if ($tt != $row["training"] && $tt <3 ) {
             $tt += $row['training'];
           }           
      if ($tt == 1) {
        $t= 'نقل الأشخاص ';
      }else if ($tt == 2) {
        $t= 'نقل البضائع ';
      } else {
        $t= 'نقل الأشخاص و البضائع';
      }
$lc=['','1ج','2ج', 'د','ج1 - ج2'];
$tr=['','نقل الاشخاص','نقل البضائع'];

      $row["drivinglicenseclass"]= $lc[$row["drivinglicenseclass"]];
      $row["training"]= $tr[$row["training"]];
      $user = $row["user"];
       array_push($data, $row);
}
                
    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    //Parametros
    $nomprofesor = $_GET["nom_ep"];

  
            $template = 'bon_ep.docx';# code...
        $result = $mysqli -> query("SELECT * FROM contrat_ep where ep=$id");
    $row = $result->fetch_row();
    if ($row) {
         $num_c = $row[1];
    $date_c = $row[4];
              $annee = explode('-', $date_c)[0]; # code...
    } else {
       
              $annee = explode('-', $date)[0];

$result1 = $mysqli -> query("SELECT count(id) FROM contrat_ep where created_at LIKE '".$annee."%'");
    $row1 = $result1->fetch_row();
    $num_c = $row1[0]+1;
    
    include('db_connect/db.php');





  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established
  $sql = "INSERT INTO contrat_ep (code, created_at, ep) values ('$num_c','$date', '$id')";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }

    }
    
  
    
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    //Escribir Nuevos campos
    $TBS->MergeField('nom', $nomprofesor);
    $TBS->MergeField('num', $num);
   $TBS->MergeField('date_b', $date_b);
   $TBS->MergeField('num_b', $num_b);
   $TBS->MergeField('date_c', $date_c);
   $TBS->MergeField('num_c', $num_c);
   $TBS->MergeField('annee', $annee);
   $TBS->MergeField('user', $user);
    $TBS->MergeBlock('data', $data);

       $TBS->MergeField('formation', $t);
    $TBS->MergeField('montant', $m);
    $TBS->MergeField('montant_ar', $m_ar);
    $TBS->MergeField('date', $date);
    $TBS->MergeField('type', $l[$type]);
    $TBS->VarRef['x'] = $firmadecano;

    $TBS->PlugIn(OPENTBS_DELETE_COMMENTS);

    $save_as = (isset($_POST['save_as']) && (trim($_POST['save_as'])!=='') && ($_SERVER['SERVER_NAME']=='localhost')) ? trim($_POST['save_as']) : '';
    $output_file_name = str_replace('.', '_'.$num.'-'.$annee.$save_as.'.', $template);
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
?>