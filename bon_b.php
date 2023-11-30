<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
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
include('db_connect/db.php');





  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established

if (isset($_GET['id'])) {
$id=$_GET['id'];
  $sql = "INSERT INTO dossier (code, fournee, d1, d2, d3, d4, client_id) values ('$id', 1, 1, 1, 1, 1, '$id')";
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
            $sql = "SELECT * FROM client where id=$id";
$result = $mysqli -> query($sql);

    $rows = $result->fetch_row();
      if (!$rows[17]) {
                      $annee = explode('-', $rows[15])[0];

$result1 = $mysqli -> query("SELECT count(id) FROM client where valid=1 and created_at LIKE '".$annee."%'");
    $row1 = $result1->fetch_row();
    $num = $row1[0]+1;
         $sql1 = "UPDATE client SET code=".$num." , valid = 1 where id=".$id;
   if ($conn->query($sql1)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
      }
            $c=1;
}

if (isset($_GET['ep'])) {
$id=$_GET['ep'];

$sql = "SELECT * FROM entreprise where id=$id";
$c=0;
}
else $id=0;
    


// Perform query
if ($result = $mysqli -> query($sql)) {

$result = $mysqli -> query($sql);

while ($row = $result->fetch_assoc()) {
    $num_c = explode('-', $row["created_at"])[0].'-'.$row["id"];
                 
    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    //Parametros
    if ($c) {
      $nomprofesor = $row["lastname"].' '.$row["firstname"];# code...
    } else {
      $nomprofesor = $row["nom"];
    }
    
    
    //$fechaprofesor = $row["id"];
    //Cargando template
    $template = 'CPA.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    //Escribir Nuevos campos
    $TBS->MergeField('nom', $nomprofesor);
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
    
  // Free result set
  $result -> free_result();
}
}

?>