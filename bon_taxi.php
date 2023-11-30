<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           

if (isset($_GET['id'])) {
$id=$_GET['id'];
$num_b=$_GET['num_b'];
$date_b=$_GET['date_b'];
$m=$_GET['m'];
$m_ar=$_GET['m_ar'];
$type=0;
if (isset($_GET['date'])) {
    $date = $_GET['date'];

    } else {
        $date = date("Y-m-d"); 
  # code...
    }
}

else $id=0;

$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// Perform query
              $annee = explode('-', $date)[0];
    include('db_connect/db.php');
    $num = 1;

    $result = $mysqli -> query("SELECT count(id), id,created_at,code FROM bon  where taxi_id=$id ORDER BY id DESC");

    $row_att = $result->fetch_row();
    if ($row_att[0] >0) {
    $num = $row_att[3];
    } else {

$result = $mysqli -> query("SELECT count(id) FROM bon where created_at LIKE '".$annee."%'");
    $row = $result->fetch_row();
    $num = $row[0]+1;
 

if (isset($_GET['b']) && $_GET['b']!=null) {
  $num= $_GET['b'];
}

  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established
    $now = date("Y-m-d"); 

  $sql = "INSERT INTO bon (code,num_b, date_b, type, montant, created_at, taxi_id) values ('$num','$num_b', '$date_b', '$type', '$m', '$date', '$id')";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
             /*/* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";/*/
             }
if ($result = $mysqli -> query("SELECT id FROM client_taxi where id=$id")) {

$result = $mysqli -> query("SELECT * FROM client_taxi where id=$id");

while ($row = $result->fetch_assoc()) {
                 
    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
    //Parametros
    $nomprofesor = $row["lastname"].' '.$row["firstname"];
    $nomm = $row["firstname"];
    $nomp = $row["lastname"];
    $num_c = explode('-', $row["created_at"])[0].'-'.$row["code"];
    $address = $row["address"];
    $user = $row["user"];
    $date_n = $row["birthdate"];
    $num_tel = $row["phone"];
    $email = $row["email"];

          
if (isset($_GET['att']) && $_GET['att']!=null) {
  $att_num= $_GET['att'];
}

    $result = $mysqli -> query("SELECT count(id), id,created_at,num FROM attestation  where taxi_id=$id ORDER BY id DESC");

    $row_att = $result->fetch_row();
    if ($row_att[0] >0) {
     $att_nb = $row_att[0];
    $date_att = $row_att[2];
    $att_num_old = $row_att[1];
    $att_num = $row_att[3].'-'.$annee;
    } else {
        $result = $mysqli -> query("SELECT count(id) FROM attestation where created_at LIKE '".$annee."%'");

    $row = $result->fetch_row();
    $att_num = $row[0]+1;

$sql = "INSERT INTO attestation (num, created_at, taxi_id) values ('$att_num','$date', '$id')";
  if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
    $date_att = $date;
    }
    
    
            $template = 'bon_taxi.docx';# code...

    $sql = "SELECT * FROM bon where taxi_id = $id ";


$result_b = $mysqli -> query($sql);
$i=0;   
 $pay='';
 $row_cnt = $result_b->num_rows;
$nbr=$p[$row_cnt-1];
while ($row_b = $result_b->fetch_assoc()) {
    if ($row_cnt==1  ) {
      if ($row_b[4]==4000) {
        $x=['الكاملة'];# code...
        $pp='';
      } else {
        $x=['الكاملة'];
        $pp='';
      }
      
          
    } else {
          $x=['الأولى','الثانية','الثالثة','الرابعة','الخامسة'];

      
    }
    
    $y=$row_b['montant'];
    
    $z=$row_b['created_at'];
  //  $y=explode('-', $z)[0].' / '.$row_b['num'];
      $pay.='
- الدفعة '.$x[$i].': مبلغ '.$y.'دج بتاريخ  '.$z.' :
';
    $i++;

    }
if ($att_nb>1) {
    $att_nb = '- '.intval($att_nb).' -';
} else $att_nb='';
     $sql = "SELECT * FROM attestation where taxi_id = $id ";


$result_b = $mysqli -> query($sql);
$i=0;   
 $his='';
while ($row_b = $result_b->fetch_assoc()) {
   
    
    $z=$row_b['created_at'];
    $y=explode('-', $z)[0].' / '.$row_b['num'];
    if ($i==0) {
      $his.='
- هذه الشهادة هي تمديد لاستمارة التسجيل المسجلة تحت رقم '.$y.': المسجلة بتاريخ '.$z.':
';
    } else {
     $his.='
والممددة بشهادة تمديد لاستمارة التسجيل المسجلة تحت رقم '.$y.': المسجلة بتاريخ '.$z.':
';
   
    }
    
      
    $i++;

    }
        }
        
    }
    
    
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    //Escribir Nuevos campos
    $TBS->MergeField('nom', $nomprofesor);
    $TBS->MergeField('nomm', $nomm);
    $TBS->MergeField('pnom', $nomp);
    $TBS->MergeField('num', $num);
    $TBS->MergeField('num_c', $num_c);
    $TBS->MergeField('nb', $att_nb);
    $TBS->MergeField('num_b', $num_b);
    $TBS->MergeField('num_att', $att_num);
    $TBS->MergeField('annee', $annee);
    $TBS->MergeField('att_num_old', $att_num_old);
    $TBS->MergeField('date_b', $date_b);
    $TBS->MergeField('num_tel', $num_tel);
    $TBS->MergeField('email', $email);

    $TBS->MergeField('his', $his);
    $TBS->MergeField('pay', $pay);
    $TBS->MergeField('nbr', $nbr);
    $TBS->MergeField('date_a', $date_att);
    $TBS->MergeField('date_f', $date_f);
    $TBS->MergeField('date_n', $date_n);
    $TBS->MergeField('mnt', $m);
    $TBS->MergeField('montant', $m);
    $TBS->MergeField('montant_ar', $m_ar);
    $TBS->MergeField('date', $date);
    $TBS->MergeField('address', $address);
    $TBS->MergeField('user', $user);
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
    

?>