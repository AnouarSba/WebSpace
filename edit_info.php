<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           
$mysqli = new mysqli($servername, $username, $password,$db);
    include('db_connect/db.php');
if (isset($_GET['m'])) {
$m=$_GET['m'] * $_GET['s'];
$ar=$_GET['ar'];
$sql = "INSERT INTO montant_ar (montant, montant_ar) values ($m, '$ar')";
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }

}
else {
if (isset($_GET['b'])) {
$id=$_GET['id'];
$num=$_GET['b'];
}

else $id=0;
$tr=['','نقل الاشخاص','نقل البضائع'];


// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Perform query
$result = $mysqli -> query("SELECT * FROM bon where client_id=$id ");
    $row = $result->fetch_row();
$num_b=$row[2];
$date_b=$row[3];
$m=$row[5];
$date=$row[7];


  $sql = "UPDATE bon SET code =".$num." where client_id=".$id;
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
             /*/* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";/*/
             
if ($result = $mysqli -> query("SELECT id FROM client where id=$id")) {

$result = $mysqli -> query("SELECT * FROM client where id=$id");

while ($row = $result->fetch_assoc()) {
                 
    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    //Parametros
    $nomprofesor = $row["lastname"].' '.$row["firstname"];
    $num_c = explode('-', $row["created_at"])[0].'-'.$row["code"];
    $address = $row["address"];
    $date_n = $row["birthdate"];
    $formation = $tr[$row["training"]];

   
        $template = 'bon_r.docx';# code...
    
    
    
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    //Escribir Nuevos campos
    $TBS->MergeField('nom', $nomprofesor);
    $TBS->MergeField('num', $num);
    $TBS->MergeField('num_c', $num_c);
    $TBS->MergeField('nb', $att_nb);
    $TBS->MergeField('num_b', $num_b);
    $TBS->MergeField('att_num', $att_num);
    $TBS->MergeField('att_ann', $annee);
    $TBS->MergeField('att_num_old', $att_num_old);
    $TBS->MergeField('date_b', $date_b);

    $TBS->MergeField('his', $his);
    $TBS->MergeField('pay', $pay);
    $TBS->MergeField('nbr', $nbr);
    $TBS->MergeField('date_att', $date_att);
    $TBS->MergeField('date_f', $date_f);
    $TBS->MergeField('training', $formation);
    $TBS->MergeField('date_n', $date_n);
    $TBS->MergeField('montant', $m);
    $TBS->MergeField('montant_ar', $m_ar);
    $TBS->MergeField('date', $date);
    $TBS->MergeField('address', $address);
    $TBS->MergeField('type', $l[$type]);
    $TBS->VarRef['x'] = $firmadecano;

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

}
?>