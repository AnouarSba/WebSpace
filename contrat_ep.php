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
$result = $mysqli -> query("SELECT id,created_at,code FROM contrat_ep where ep=$id");
    $rows = $result->fetch_row();
   if ($rows) {
        $num = $rows[2];
        $annee = explode('-', $rows[1])[0];
        $dc= $rows[1];
   }
  else { 
              $annee = explode('-', $now)[0];

$result1 = $mysqli -> query("SELECT count(id) FROM contrat_ep where created_at LIKE '".$annee."%'");
    $row1 = $result1->fetch_row();
    $num = $row1[0]+1;
    $dc = $now;
    include('db_connect/db.php');
if (isset($_GET['c']) && $_GET['c']!=null) {
   $num= $_GET['c']; # code...
}




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

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Perform query
$result1 = $mysqli -> query("SELECT * FROM ep_demande where id=$id");
    $row1 = $result1->fetch_row();
    $id_ep = $row1[2];
    $nb=$row1[3];
    $total = $nb*22500;
    $result_ar = $mysqli -> query("SELECT * FROM montant_ar where montant=$total");
    $row_ar = $result_ar->fetch_row();
    $total_ar = $row_ar[2];
      if ($nb==1) {
        $nbb = 'سائق ';
      } else if ($nb==2) {
        $nbb = 'سائقين';
      } else {
        $nbb = '('.$nb.') سائقين  ';
      }
if ($result = $mysqli -> query("SELECT id FROM entreprise where id=$id_ep")) {

$sql = "SELECT * FROM client where entreprise=$id";
$result_c = $mysqli -> query($sql);
$data = array();
  
$tt=0;
while ($row_c = $result_c->fetch_assoc()) {
      
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
      $lc=['','1ج','2ج', 'د','ج1 - ج2'];
$tr=['','نقل الاشخاص','نقل البضائع'];

      $row_c["drivinglicenseclass"]= $lc[$row_c["drivinglicenseclass"]];
      $row_c["training"]= $tr[$row_c["training"]];
      $user = $row_c["user"];

       array_push($data, $row_c);
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
    $template = 'contrat_ep_cl.docx';
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
    $TBS->MergeField('date_c', $dc);
    $TBS->MergeBlock('data', $data);
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