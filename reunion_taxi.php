<?php
    include_once('tbs_class.php'); 
    include_once('plugins/tbs_plugin_opentbs.php'); 
    $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

           
    $date = date("Y-m-d"); 

if (isset($_GET['f'])) {
$id_f=$_GET['f'];

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
$trs=['لم يحدد بعد','نقل الاشخاص','نقل البضائع' ,'نقل الأشخاص و البضائع'];
    
$result = $mysqli -> query("SELECT * FROM formation where id=".$id_f);
    $rows = $result->fetch_row();
    $f_nbr = $rows[1];
    $duree = $rows[2];
    $f_tr = $rows[5];
    $f_date_ar = $rows[6];
    $f_date = $rows[7];
 $f_annee= explode('-', $f_date)[0];
                /*if ($duree == 1) {
                                $f_duree = 'شهر واحد';
                            } else if ($duree == 2) {
                                $f_duree = 'شهرين  ('.$duree.')';
                            } else if ($duree <= 10) {
                                $f_duree = $duree.' أشهر';
                            } else {
                                $f_duree = $duree.' شهر';
                            }*/


                            if ($duree == 1) {
                                $f_duree = date("Y-m-d", strtotime($f_date.' +2 month'));
                            } else if ($duree == 2) {
                                $f_duree = date("Y-m-d", strtotime($f_date.' +11 day'));
                            } 
    $f_duree = $rows[9];

    $TBS = new clsTinyButStrong; 
    $TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); 
$result = $mysqli -> query("SELECT count(id) FROM condidat_f where redoublant=0 and id_f=".$id_f);
    $rows = $result->fetch_row();
    $f_c_nbr = $rows[0];
    $result = $mysqli -> query("SELECT count(id) FROM condidat_f where acc=1 and  redoublant=0 and id_f=".$id_f);
    $rows = $result->fetch_row();
    $f_c_acc_nbr = $rows[0];
    if ($f_c_acc_nbr ==1 or $f_c_acc_nbr>10) {
        $mtr= ' متربص';
        # code...
    }else{
        $mtr = ' متربصين';
    }
    $result = $mysqli -> query("SELECT grp FROM formation where   id=".$id_f);
    $rows = $result->fetch_row();
    if ($rows) {
    $f_c_nbr_grp = $rows[0];
    if ($f_c_nbr_grp == 1 ) {
        
    } else  if ( $f_c_nbr_grp >10) {
            $mtr .= ' على '.$f_c_nbr_grp.' فوج';
        } else if ($f_c_nbr_grp==2) {
            $mtr .= ' على فوجين';
            
        } else{
            $mtr .= 'على '.$f_c_nbr_grp. ' أفواج';
        }
        
        
    } 
    
    $detail ='';
    for ($i=1; $i <= $f_c_nbr_grp ; $i++) { 
        if ($f_c_nbr_grp == 1) {
            $x=0;
        } else {
            $x=1;
        }
        if ($i==1 && $f_c_nbr_grp == 1) {
            # code...
        } else if ($i==1 ) {
              $detail .= 'الفوج '.$i.' : ';
        } else {
            $detail .= '
الفوج '.$i.' : ';
        }
        
         $result = $mysqli -> query("SELECT count(id) FROM condidat_f where acc=1 and redoublant=0 and  ep_id=0 and grp=".$i." and id_f=".$id_f);
    $rows = $result->fetch_row();
    if ($rows) {
    $f_c_nbr_l = $rows[0];
        if ($f_c_nbr_l==0) {
            # code...
        } else if ($f_c_nbr_l == 1) {
            $detail .= ' متربص حر ';
        } else {
            $detail .= ' منهم '. $f_c_nbr_l. 'متربصين أحرار ، ';
        }
        
        
    } 
    $result_c = $mysqli -> query("SELECT * FROM condidat_f where acc=1 and redoublant=0 and grp=".$i." and id_f=".$id_f);
    $tt=0;
while ($row_c = $result_c->fetch_assoc()) {
   
if ($tt != $row_c["training"] && $tt <3 ) {
             $tt += $row_c['training'];
           }           
     
  }
   if ($tt == 1) {
        $t= 'نقل الأشخاص ';
      }else if ($tt == 2) {
        $t= 'نقل البضائع ';
      } else {
        $t= 'نقل الأشخاص و البضائع';
      }
    $result = $mysqli -> query("SELECT count(id) FROM condidat_f where acc=1 and redoublant=0 and  ep_id!=0 and grp=".$i." and id_f=".$id_f.' group by ep_id');
    $rows = $result->fetch_row();
    if ($rows) {
    $f_c_nbr_ep = $rows[0];
        if ($f_c_nbr_ep==0) {
            # code...
        } else {
             $resultx = $mysqli -> query("SELECT ep_id,count(*) FROM condidat_f where redoublant=0 and acc=1 and grp=".$i." and ep_id!=0 and  id_f=".$id_f.' group by ep_id');
             while ($rowx = $resultx->fetch_assoc()) {
                $x= $rowx['count(*)'];
                 if ($x == 1) {
            $y = ' متربص   ';
        } else {
            $y = $x. ' متربصين  ';
        }
        $result = $mysqli -> query("SELECT id_ep FROM ep_demande where  id=".$rowx['ep_id']);
    $rows = $result->fetch_row();
        $result = $mysqli -> query("SELECT nom FROM entreprise where  id=".$rows[0]);
    $rows = $result->fetch_row();
                        $detail .= $y.' لصالح  '.$rows[0].' ،';
                 }
            }
        
        
    } $detail .= 'تخصص  '.$t;
    }
   
    $detail .= ' وهذا ابتداءا من: '.$f_date.' .';

$l_num=$f_nbr;
$r_num=$f_nbr;
$l_date= $date;
 $l_annee= explode('-', $date)[0];
 
 $f_nbr_ar = $_GET['f_ar'];
 $f_nbr_ar_f = $_GET['f_ar_f'];
$c1_nom = 'رحامنية فتحي مدير مركز التكوين';
$c1_grade = 'رئيسا';
$c2_nom = 'منصورة حنان، المسؤول البيداغوجي';
$c2_grade = 'عضوا';
$result = $mysqli -> query("SELECT * FROM reunion where formation=".$id_f);
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


    $template = 'Reunion.docx';
    $TBS->LoadTemplate($template, OPENTBS_ALREADY_UTF8);

  $data = array();
  $datas = array();
$infos = array();  
$info = array();  
    for ($i=1; $i <= $f_c_nbr_grp ; $i++) { 
 $result_c = $mysqli -> query("SELECT * FROM condidat_f where acc=1 and redoublant=0 and grp=".$i." and id_f=".$id_f);
    $tt=0;
while ($row_c = $result_c->fetch_assoc()) {
   
if ($tt != $row_c["training"] && $tt <3 ) {
             $tt += $row_c['training'];
           }           
     
  }
   if ($tt == 1) {
        $t= 'نقل الأشخاص ';
      }else if ($tt == 2) {
        $t= 'نقل البضائع ';
      } else {
        $t= 'نقل الأشخاص و البضائع';
      }
    $result = $mysqli -> query("SELECT * FROM condidat_f where redoublant=0 and id_f=$id_f and grp=".$i);


while ($row = $result->fetch_assoc()) {
$result_c = $mysqli -> query("SELECT * FROM client where id=".$row['id_c']);


while ($row_c = $result_c->fetch_assoc()) {


$tr=['','نقل الاشخاص','نقل البضائع'];
if ($row_c['entreprise'] == 0) {
    $nom= 'مترشح حر';
} else {
    $results = $mysqli -> query("SELECT id_ep FROM ep_demande where  id=".$row_c['entreprise']);
    $rows = $results->fetch_row();
        $results = $mysqli -> query("SELECT nom FROM entreprise where  id=".$rows[0]);
    $rows = $results->fetch_row();
                        $nom = $rows[0];
}
        $results = $mysqli -> query("SELECT num, created_at FROM attestation where  client_id=".$row_c['id']);
    $rows = $results->fetch_row();
    if ($rows) {
        $row_c['att'] = $rows[0].' '.$rows[1];
    } else {
        $row_c['att'] = '';
    }
        $row_c['tt'] = $tt;

      $row_c["entreprise"]= $nom;
      $row_c["training"]= $tr[$row_c["training"]]; 
       array_push($data, $row_c);
}
    
} array_push($infos, $data);
       $info[$i] = $t;

    $datas[$i] = $data ;
$data =[];
}
$c3_grade = 'عضوا';
    $TBS->MergeField('l_num', $l_num);
    $TBS->MergeField('r_num', $r_num);
    $TBS->MergeField('l_annee', $l_annee);
    $TBS->MergeField('l_date', $l_date);
 $TBS->MergeField('f_nbr_ar', $f_nbr_ar);
    $TBS->MergeField('f_nbr_ar_f', $f_nbr_ar_f);
    $TBS->MergeField('f_date', $f_date);
 $TBS->MergeField('f_date_ar', $f_date_ar);
    $TBS->MergeField('f_annee', $f_annee);
    $TBS->MergeField('f_duree', $f_duree); 
    $TBS->MergeField('f_nbr', $f_nbr);
    $TBS->MergeField('f_c_nbr', $f_c_nbr);
    $TBS->MergeField('f_c_acc_nbr', $f_c_acc_nbr);
    $TBS->MergeField('mtr', $mtr);
    $TBS->MergeField('f_training', $trs[$f_tr]);
    $TBS->MergeBlock('infos', $infos);
for ($i=1; $i <= $f_c_nbr_grp ; $i++) { 
    $TBS->MergeBlock('info'.$i, $datas[$i]);
    
}for ($i=1; $i <= $f_c_nbr_grp ; $i++) { 
    $TBS->MergeField('inf'.$i, $info[$i]);
    
}
$TBS->MergeField('detail', $detail);

$TBS->MergeField('c1_nom', $c1_nom);
    $TBS->MergeField('c1_grade', $c1_grade);

$TBS->MergeField('c2_nom', $c2_nom);
    $TBS->MergeField('c2_grade', $c2_grade);

$TBS->MergeField('c3_nom', $c3_nom);
    $TBS->MergeField('c3_grade', $c3_grade);



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