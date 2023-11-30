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

if (isset($_GET['id'])) {
$id=$_GET['id'];
} else $id=0;

if (isset($_GET['ep'])) {
$id_ep=$_GET['ep'];
} else $id_ep=0;
$sql = "SELECT * FROM entreprise where id=".$id_ep;
$result = $mysqli -> query($sql);
    $row = $result->fetch_row();
    $nom = $row[1];
    $address = $row[7];
         
$result = $mysqli -> query("SELECT * FROM ep_demande where id=".$id);
    $row = $result->fetch_row();
    $nbr = $row[3];
             $tt = $row[6];
                     
      if ($tt == 1) {
        $t= 'نقل الأشخاص ';
      }else if ($tt == 2) {
        $t= 'نقل البضائع ';
      } else {
        $t= 'نقل الأشخاص و البضائع';
      }
$prix = 22500-1857.8;
    $total= $nbr*$prix;
    $t_ttc= $nbr*22500;
    $tva= $t_ttc-$total;
$result_ar = $mysqli -> query("SELECT * FROM montant_ar where montant=$t_ttc");
    $row_ar = $result_ar->fetch_row();
    $total_ar = $row_ar[2];
         
 $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    $template = 'PROFORMA.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    $TBS->MergeField('date',$now);
    $TBS->MergeField('nom',$nom);
    $TBS->MergeField('address',$address);
    $TBS->MergeField('nbr',$nbr);
    $TBS->MergeField('training',$t);
    $TBS->MergeField('total',$total);
    $TBS->MergeField('t_ttc',$t_ttc);
    $TBS->MergeField('prix',$prix);
    $TBS->MergeField('tva',$tva);
    $TBS->MergeField('montant_ar',$total_ar);
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