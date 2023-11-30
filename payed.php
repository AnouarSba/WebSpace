<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           
    $date = date("Y-m-d"); 


$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
include('db_connect/db.php');


if (isset($_POST['mois'])) {
$mois=$_POST['mois'];
}

if (isset($_POST['annee'])) {
$annee=$_POST['annee'];
}



  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established
$date = $annee.'-'.$mois;
if ($mois=='01') {
  $mois = 'جانفي';
} else if ($mois=='02') {
  $mois = 'فيفري';
} else if ($mois=='03') {
  $mois = 'مارس';
} else if ($mois=='04') {
  $mois = 'أفريل';
}
if ($mois=='05') {
  $mois = 'ماي';
} else if ($mois=='06') {
  $mois = 'جوان';
} else if ($mois=='07') {
  $mois = 'جويلية';
} else if ($mois=='08') {
  $mois = 'أوت';
}
if ($mois=='09') {
  $mois = 'سبتمبر';
} else if ($mois=='10') {
  $mois = 'أكتوبر';
} else if ($mois=='11') {
  $mois = 'نوفمبر';
} else if ($mois=='12') {
  $mois = 'ديسمبر';
}

$sql = "SELECT * FROM bon where  created_at LIKE '".$date."%'";
             
    $TBS = new clsTinyButStrong; 
   $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
// Perform query
$data = array();


if ($result = $mysqli -> query($sql)) {
 $result = $mysqli -> query($sql);
 $tt = 0;
 $i=0;
 $total_p = 0;
 $total_s = 0;
while ($row = $result->fetch_assoc()) {

  if ($row['client_id']) {
    
    $last = $row['id'];

$sqlsum = "SELECT sum(montant) FROM bon where  client_id= ".$row['client_id']." and id <=".$last;
   $resultsum = $mysqli -> query($sqlsum);
    $rowsum = $resultsum->fetch_row();
if ($rowsum[0] >= 22500) {
  $i++;
   $results = $mysqli -> query("SELECT firstname, lastname, birthdate, birthplace,training FROM client where  id= ".$row['client_id']);
    $rows = $results->fetch_row();
    $j=0;
  $row['nom'] = $rows[0].' '.$rows[1];
  $row['birth'] = $rows[2].' '.$rows[3];
 
  $row['tva'] = 1857.8;
  $row['ttc'] = 22500 ;
if ($tt != $rows[4] && $tt <3 ) {
             $tt += $rows[4];
           }           
      if ($tt == 1) {
        $t= 'نقل الأشخاص ';
      }else if ($tt == 2) {
        $t= 'نقل البضائع ';
      } else {
        $t= 'نقل الأشخاص و البضائع';
      }
      
$result2 = $mysqli -> query("SELECT * FROM attestation where client_id=".$row['client_id']." LIMIT 1");
    $row2 = $result2->fetch_row();
    if ($row2) {
      $row['att_num'] =$row2[1];
  $row['att_date'] = $row2[3];
    }
    $sqlsum = "SELECT sum(montant) FROM bon where  client_id= ".$row['client_id']." and id !=".$last ;
   $resultsum = $mysqli -> query($sqlsum);
    $rowsum = $resultsum->fetch_row();

  $row['mnt_p'] = $rowsum[0];
  $row['mnt_s'] = $row['montant']- 1857.8;
  $total_s += $row['montant']- 1857.8;
  $total_p += $rowsum[0];
    array_push($data, $row);

}
 
  }
  else if ($row['ep'] ) {
    
    $last = $row['id'];
$sqlsum = "SELECT sum(montant) FROM bon where  ep= ".$row['ep']." and id <=".$last;
   $resultsum = $mysqli -> query($sqlsum);
    $rowsum = $resultsum->fetch_row();
if ($rowsum[0] >= 22500) {
  $i++;
  $sql = "SELECT * FROM client where entreprise=".$row['ep'];
  
if ($result_c = $mysqli -> query($sql)) {
$result_c = $mysqli -> query($sql);

while ($rows = $result_c->fetch_assoc()) {
                 
    $j=0;
  $row['nom'] = $rows['firstname'].' '.$rows['lastname'];
  $row['birth'] = $rows['birthdate'].' '.$rows['birthplace'];
 
  $row['tva'] = 1857.8;
  $row['ttc'] = 22500 ;
if ($tt != $rows['training'] && $tt <3 ) {
             $tt += $rows[4];
           }           
      if ($tt == 1) {
        $t= 'نقل الأشخاص ';
      }else if ($tt == 2) {
        $t= 'نقل البضائع ';
      } else {
        $t= 'نقل الأشخاص و البضائع';
      }
      
$result2 = $mysqli -> query("SELECT * FROM attestation where client_id=".$rows['id']." LIMIT 1");
    $row2 = $result2->fetch_row();
    if ($row2) {
      $row['att_num'] =$row2[1];
  $row['att_date'] = $row2[3];
    }
    $sqlsum = "SELECT sum(montant) FROM bon where  ep= ".$row['ep']." and id !=".$last ;
   $resultsum = $mysqli -> query($sqlsum);
    $rowsum = $resultsum->fetch_row();
 $result3 = $mysqli -> query("SELECT * FROM ep_demande where id=".$row['ep']);
                    $roww = $result3->fetch_row();
                    $nb = $roww[3];
  $row['mnt_p'] = $rowsum[0]/$nb;
  $row['mnt_s'] = intval($row['montant'])/$nb - 1857.8;
  $total_s += $row['mnt_s'];
  $total_p += $row['mnt_p'];
    array_push($data, $row);

}
}
}
 
  }
  
}
  //$fechaprofesor = $row["id"];
    //Cargando template

//$trs=['لم يحدد بعد','نقل الاشخاص','نقل البضائع' ,'نقل الأشخاص و البضائع'];
 
    $template = 'payed.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);


    $TBS->MergeField('total_tva',$i* 1857.8);
    $TBS->MergeField('total_ttc',$i*22500);
    $TBS->MergeField('total_s',$total_s);
    $TBS->MergeField('total_p',$total_p);
    $TBS->MergeField('annee',$annee);
    $TBS->MergeField('mois', $mois);
    $TBS->MergeField('training',$t);

    $TBS->MergeBlock('data', $data);

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
    
  // Free result set
  $result -> free_result();

    
}
  else {
          echo '<script language="javascript">';
echo 'alert("لايوجد فع مصاريف لهذا الشهر"); window.location.replace("centerF.php");';

echo '</script>'; 
  }


?>