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

if (isset($_GET['id_f'])) {
$id_f=$_GET['id_f'];
} else $id_f=0;

if (isset($_GET['now'])) {
$now=$_GET['now'];
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
$data = array();
$t_hour=0;
$t_ttc=0;
$t_prix=0;
$t_tva=0;
              $sql = "SELECT * FROM profs_charge where id_f =".$id_f;
  $query = $mysqli->query($sql);
              while($row = $query->fetch_assoc()){
$result = $mysqli -> query("SELECT * FROM profs where id=".$row['id_prof']);
    $rows = $result->fetch_row();
      $row['nom'] = $rows[2].' '.$rows[3];
      $row['ttc'] = $row['hour'] *1000;
      $row['prix'] = $row['ttc']* 1.1111111;
      $row['tva'] = $row['ttc']* 0.1111111;

      $t_hour += $row['hour'];
$t_ttc += $row['ttc'];
$t_prix += $row['prix'];
$t_tva += $row['tva'];
    array_push($data, $row);

    }


 $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    $template = 'payed_profs.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    $TBS->MergeField('f_num',$f_num);
    $TBS->MergeField('f_annee',$f_annee);
    $TBS->MergeField('f_dd', $fdd);
      $TBS->MergeField('f_df',$fdf);
    
    $TBS->MergeField('total_hour',$t_hour);
    $TBS->MergeField('total_ttc',$t_ttc);
    $TBS->MergeField('total_prix',$t_prix);
    $TBS->MergeField('total_tva',$t_tva);

    $TBS->MergeBlock('data', $data);
   
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