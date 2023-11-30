<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

           
    $date = date("Y-m-d"); 

if (isset($_GET['id_list'])) {
$id_f=$_GET['id_list'];

}

else $id_f=0;

$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
include('db_connect/db.php');
/*

'منهم (........) متربصين أحرار، (.........) متربص لصالح سوناليكا فماق، (................) متربص لصالح بلدية سيدي إبراهيم، و (.................) متربصين لصالح شركة  T-PLAST'
*/

  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established
$trs=['', 'ولاية سيدي بلعباس'];
$trs_fr=['' , 'Wilaya de Sidi Bel Abbes'];
    
$result = $mysqli -> query("SELECT * FROM list_taxi where id=".$id_f);
    $rows = $result->fetch_row();
    $dd = $rows[2];
    $df = $rows[3];
    $dtw = $trs[$rows[4]];
    $dtw_fr = $trs_fr[$rows[4]];
                /*if ($duree == 1) {
                                $f_duree = 'شهر واحد';
                            } else if ($duree == 2) {
                                $f_duree = 'شهرين  ('.$duree.')';
                            } else if ($duree <= 10) {
                                $f_duree = $duree.' أشهر';
                            } else {
                                $f_duree = $duree.' شهر';
                            }*/



    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 

    $template = 'List_candidat.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
$result_c = $mysqli -> query("SELECT * FROM client_taxi where training=1 and valid=1 and  valider_le BETWEEN '".$dd."' and '".$df."'");

$data=[];
while ($row_c = $result_c->fetch_assoc()) {

 
       array_push($data, $row_c);
}
    
    $TBS->MergeField('dtw', $dtw);
    $TBS->MergeField('dtw_fr', $dtw_fr);
  $TBS->MergeBlock('info', $data);


// Merging rows
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


?>
<script type="text/javascript">
    function dbl(x) {
        return x*2;
    } 
</script>