<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           


$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
include('db_connect/db.php');

     $now = date("Y-m-d"); 

if (isset($_POST['id'])) {
$id=$_POST['id'];
} else $id=0;

if (isset($_POST['id_f'])) {
$id_f=$_POST['id_f'];
} else $id_f=0;

if (isset($_POST['num'])) {
$num=$_POST['num'];
} else $num=0;

if (isset($_POST['nom'])) {
$nom=$_POST['nom'];
} else $nom='';

if (isset($_POST['hour'])) {
$hour=$_POST['hour'];
} else $hour='';

if (isset($_POST['now'])) {
$now=$_POST['now'];
} else      $now = date("Y-m-d"); 


$result = $mysqli -> query("SELECT * FROM formation where id=".$id_f);
    $row = $result->fetch_row();
    $f_num = $row[1];
    $fdd = $row[7];
    $fdf = $row[9];
              $f_annee = explode('-', $fdd)[0];
/*
$result = $mysqli -> query("SELECT count(id) FROM bon where created_at LIKE '".$f_annee."%'");
    $row = $result->fetch_row();
    $num = $row[0]+1;*/

  $sql = "  UPDATE profs_charge SET hour =".$hour." where id=".$id;
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }



    $ttc= $hour*1000;

    $prix= $ttc*1.1111111;
    $tva= $ttc*0.1111111;



 $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    $template = 'payed_prof.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    $TBS->MergeField('num',$num);
    $TBS->MergeField('date',$now);
    $TBS->MergeField('nom',$nom);
    $TBS->MergeField('f_num',$f_num);
    $TBS->MergeField('f_annee',$f_annee);
    $TBS->MergeField('f_dd', $fdd);
      $TBS->MergeField('f_df',$fdf);
    
    $TBS->MergeField('hour',$hour);
    $TBS->MergeField('ttc',$ttc);
    $TBS->MergeField('prix',$prix);
    $TBS->MergeField('tva',$tva);
  //  $TBS->MergeField('training',$t);

   // $TBS->MergeBlock('data', $data);

    //Escribir Nuevos campos
   // $TBS->MergeField('nom', $nomprofesor);
    //$TBS->MergeField('num', $fechaprofesor);
    //$TBS->MergeField('num_b', $num_b);
   

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
    

    


?>