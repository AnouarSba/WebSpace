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


if (isset($_GET['id'])) {
$id=$_GET['id'];
}


  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established


$sql = "SELECT * FROM condidat_f where redoublant = 0 and  training=2 and id_f=$id";
$sql2 = "SELECT * FROM condidat_f where redoublant = 0  and training=1 and id_f=$id";
$sql3 = "SELECT * FROM condidat_f where redoublant = 1 and  training=2 and id_f=$id";
$sql4 = "SELECT * FROM condidat_f where redoublant = 1  and training=1 and id_f=$id";
             
    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
// Perform query
$data = array();
$data2 = array();
$data3 = array();
$data4 = array();

$f_abs=0;
$f_sursis=0;
$f_abandonne=0;
$f_redoublant=0;
$result = $mysqli -> query("SELECT count(id) FROM condidat_f where redoublant=0 and id_f=".$id);
    $rows = $result->fetch_row();
    $f_c_nbr = $rows[0];
    $result = $mysqli -> query("SELECT count(id) FROM condidat_f where redoublant=0 and acc=1 and  id_f=".$id);
    $rows = $result->fetch_row();
    $f_c_acc_nbr = $rows[0];
$res = ['راسب','ناجح'];
$x=0;
$y=0;
$y1=1;
$z=0;
$z1=0;
$z12=1;
$z2=0;
if ($result = $mysqli -> query($sql)) {
 $result = $mysqli -> query($sql);
while ($row = $result->fetch_assoc()) {
  $results = $mysqli -> query("SELECT firstname, lastname, birthdate, birthplace FROM client where  id=".$row['id_c']);
    $rows = $results->fetch_row();
    $j=0;
  $row['nom'] = $rows[0].' '.$rows[1];
  $row['birth'] = $rows[2].' '.$rows[3];
  if ($row['n1'] == 21) {
    $x1 = 0;
    $j++;
    $row['n1'] = 'غائب';
  } else {
    $x1= $row['n1'];
  }
  if ($row['n2'] == 21) {
    $x2 = 0;
    $j++;
    $row['n2'] = 'غائب';
  } else {
    $x2= $row['n2'];
  }
  if ($row['n3'] == 21) {
    $x3 = 0;
    $j++;
    $row['n3'] = 'غائب';
  } else {
    $x3= $row['n3'];
  }
  if ($row['n4'] == 21) {
    $x4 = 0;
    $j++;
    $row['n4'] = 'غائب';
  } else {
    $x4= $row['n4'];
  }
if ($j==4) {
    $f_abs++;
}
if ($row['status'] == 2) {
  $f_abandonne++;
}
if ($j >0 && $j <4 ) {
    $f_sursis++;
}
  $row['total'] = $x1+$x2+$x3+$x4;
  $row['moy'] = $row['total']/ 4;
  $row['resultat'] = $res[$row['resultat']] ;

    array_push($data, $row);
    $x=1;}
    
}

if ($result = $mysqli -> query($sql2)) {
    
    $result = $mysqli -> query($sql2);
while ($row = $result->fetch_assoc()) {
  $j=0;
   $results = $mysqli -> query("SELECT firstname, lastname, birthdate, birthplace FROM client where  id=".$row['id_c']);
    $rows = $results->fetch_row();
  $row['nom'] = $rows[0].' '.$rows[1];
  $row['birth'] = $rows[2].' '.$rows[3];
  if ($row['n1'] == 21) {
    $x1 = 0;
    $j++;
    $row['n1'] = 'غائب';
  } else {
    $x1= $row['n1'];
  }
  if ($row['n2'] == 21) {
    $x2 = 0;
    $j++;
    $row['n2'] = 'غائب';
  } else {
    $x2= $row['n2'];
  }
  if ($row['n3'] == 21) {
    $x3 = 0;
    $j++;
    $row['n3'] = 'غائب';
  } else {
    $x3= $row['n3'];
  }
  if ($row['n4'] == 21) {
    $x4 = 0;
    $j++;
    $row['n4'] = 'غائب';
  } else {
    $x4= $row['n4'];
  }

  if ($row['n5'] == 21) {
    $x5 = 0;
    $j++;
    $row['n5'] = 'غائب';
  } else {
    $x5= $row['n5'];
  }

if ($j ==5) {
    $f_abs++;
}
if ($row['status'] == 2) {
  $f_abandonne++;
}
if ($j>0 && $j <5) {
    $f_sursis++;
}
  $row['total'] = $x1+$x2+$x3+$x4+$x5;
  $row['moy'] = $row['total']/ 5;
  $row['resultat'] = $res[$row['resultat']] ;

    array_push($data2, $row);
    $y=1;}
    
    if ($x) {
      $y1=2;
    }
    
    }
if ($result = $mysqli -> query($sql3)) {
    $result = $mysqli -> query($sql3);
while ($row = $result->fetch_assoc()) {
  $f_redoublant++;
  $z=1;
 $results = $mysqli -> query("SELECT firstname, lastname, birthdate, birthplace FROM client where  id=".$row['id_c']);
    $rows = $results->fetch_row();
  $row['nom'] = $rows[0].' '.$rows[1];
  $row['birth'] = $rows[2].' '.$rows[3];
  if ($row['n1'] == 21) {
    $x1 = 0;
    $row['n1'] = 'غائب';
  } else {
    $x1= $row['n1'];
  }
  if ($row['n2'] == 21) {
    $x2 = 0;
    $row['n2'] = 'غائب';
  } else {
    $x2= $row['n2'];
  }
  if ($row['n3'] == 21) {
    $x3 = 0;
    $row['n3'] = 'غائب';
  } else {
    $x3= $row['n3'];
  }
  if ($row['n4'] == 21) {
    $x4 = 0;
    $row['n4'] = 'غائب';
  } else {
    $x4= $row['n4'];
  }

  $row['total'] = $x1+$x2+$x3+$x4;
  $row['moy'] = $row['total']/ 4;
  $row['resultat'] = $res[$row['resultat']] ;

    array_push($data3, $row);
       $z1 = 1;
 }
  }
    
if ($result = $mysqli -> query($sql4)) {

    $result = $mysqli -> query($sql4);
while ($row = $result->fetch_assoc()) {
  $f_redoublant++;
   $results = $mysqli -> query("SELECT firstname, lastname, birthdate, birthplace FROM client where  id=".$row['id_c']);
    $rows = $results->fetch_row();
  $row['nom'] = $rows[0].' '.$rows[1];
  $row['birth'] = $rows[2].' '.$rows[3];
  if ($row['n1'] == 21) {
    $x1 = 0;
    $row['n1'] = 'غائب';
  } else {
    $x1= $row['n1'];
  }
  if ($row['n2'] == 21) {
    $x2 = 0;
    $row['n2'] = 'غائب';
  } else {
    $x2= $row['n2'];
  }
  if ($row['n3'] == 21) {
    $x3 = 0;
    $row['n3'] = 'غائب';
  } else {
    $x3= $row['n3'];
  }
  if ($row['n4'] == 21) {
    $x4 = 0;
    $row['n4'] = 'غائب';
  } else {
    $x4= $row['n4'];
  }
 if ($row['n5'] == 21) {
    $x5 = 0;
    $row['n5'] = 'غائب';
  } else {
    $x5= $row['n5'];
  }

  $row['total'] = $x1+$x2+$x3+$x4+$x5;
  $row['moy'] = $row['total']/ 5;
  $row['resultat'] = $res[$row['resultat']] ;

   $z=1;
   array_push($data4, $row);
      $z2=1;
  }
    if ($z1) {
      $z12 = 2;
    } 
    
    }
    //$fechaprofesor = $row["id"];
    //Cargando template

$trs=['لم يحدد بعد','نقل الاشخاص','نقل البضائع' ,'نقل الأشخاص و البضائع'];
    
$result1 = $mysqli -> query("SELECT * FROM formation where id=$id");
    $rows = $result1->fetch_row();
    $f_nbr = $rows[1];
    $duree = $rows[2];
    $f_tr = $rows[5];
    $f_date_ar = $rows[6];
    $f_date = $rows[7];
 $f_annee= explode('-', $f_date)[0];


    $r_num = $f_nbr;
    $r_annee = $f_annee;
    $f_num_ar_f = $_GET['f_num_ar_f'];
    $r_date = $_GET['date'];
    $r_date_ar = $_GET['ar'];
    $f_annee_p = 2022;
    $f_training_p = 'نقل الأشخاص';
$c1_nom = 'رحامنية فتحي مدير مركز التكوين';
$c1_grade = 'رئيسا';
$c2_nom = 'منصورة حنان، المسؤول البيداغوجي';
$c2_grade = 'عضوا';
$result = $mysqli -> query("SELECT * FROM reunion where formation=".$id);
    $rows = $result->fetch_row();
    if ($rows) {
        $result = $mysqli -> query("SELECT * FROM commission where reunion=".$rows[0]);
    $rows = $result->fetch_row();
    if ($rows) {
        $p_nom = $rows[1];
    } else {
        $p_nom=0;
    }
    
if ($p_nom==1) {
    $c3_nom = 'تساكي الحاج';
} else if ($p_nom ==2) {
$c3_nom = 'ناصري ابراهيم';
} else {
$c3_nom = 'عمرون كريم';
}# code...
    }
$c3_grade = 'عضوا';
    $template = 'Roulement.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);
    $TBS->MergeField('r_num', $r_num);
    $TBS->MergeField('r_annee', $r_annee);
    $TBS->MergeField('r_date', $r_date);
    $TBS->MergeField('r_date_ar', $r_date_ar);
    $TBS->MergeField('x',$x);
    $TBS->MergeField('y',$y);
    $TBS->MergeField('y1',$y1);
    $TBS->MergeField('z',$z);
    $TBS->MergeField('z1',$z1);
    $TBS->MergeField('z12',$z12);
    $TBS->MergeField('z2',$z2);



$TBS->MergeField('c1_nom', $c1_nom);
    $TBS->MergeField('c1_grade', $c1_grade);

$TBS->MergeField('c2_nom', $c2_nom);
    $TBS->MergeField('c2_grade', $c2_grade);

$TBS->MergeField('c3_nom', $c3_nom);
    $TBS->MergeField('c3_grade', $c3_grade);


    $TBS->MergeField('f_annee_p',$f_annee_p);
    $TBS->MergeField('f_num_ar_f',$f_num_ar_f);
    $TBS->MergeField('f_training_p',$f_training_p);
    $TBS->MergeField('f_training',$trs[$f_tr]);
    $TBS->MergeField('f_num',$f_nbr);
    $TBS->MergeField('f_annee',$f_annee);

    $TBS->MergeField('f_c_nbr',$f_c_nbr);
    $TBS->MergeField('f_c_acc_nbr',$f_c_acc_nbr);
    $TBS->MergeField('f_abs',$f_abs);
    $TBS->MergeField('f_redoublant',$f_redoublant);
    $TBS->MergeField('f_sursis',$f_sursis-$f_abandonne);
    $TBS->MergeField('f_abandonne',$f_abandonne);

    $TBS->MergeBlock('data', $data);
    $TBS->MergeBlock('data2', $data2);
    $TBS->MergeBlock('data3', $data3);
    $TBS->MergeBlock('data4', $data4);

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



?>