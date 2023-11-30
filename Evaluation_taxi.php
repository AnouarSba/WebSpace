<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h1 {
  font-family: Arial;
  font-size: 20px;
  color: #666;
}

.data-table {
  border: solid 1px #eee;
  border-collapse: collapse;
  border-spacing: 0;
  font: normal 13px Arial, sans-serif;
  width: 100%;
}

.data-table tbody td {
  border: solid 1px #eee;
  color: #333;
  padding: 10px;
  text-shadow: 1px 1px 1px #fff;
}

.data-table-highlight tbody tr:hover {
  background-color: #f8f8f8;
}

.data-table-horizontal tbody td {
  border-left: none;
  border-right: none;
}

.top-buffer {
  margin-top: 20px;
}

.pull-right {
  float: right;
}

#main {
  width: 60%;
  margin: 5%;
}
	</style>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
</head>
<body>
  <?php 
    $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

$tr=['','الاشخاص','البضائع' ];
           


$mysqli = new mysqli($servername, $username, $password,$db);
      if (isset($_GET['id'])) {
$id_f=$_GET['id'];

} else $id_f = 0; ?>
<div id="main" dir="rtl" style="width: 80%">
  <h1>تقييم المترشحين</h1>
  <form action="ajout.php">
    <input type="hidden" name="id_f" value=<?php echo $id_f; ?>>
    <input type="hidden" name="note">
  <table id="data" class="data-table data-table-horizontal data-table-highlight">
    <thead>
      <tr>
        <th>الرقم</th>
        <th>الاسم و اللقب</th>
        <th style="text-align: center;">الوضعية</th>
        <th style="text-align: center;width: 10%">التخصص <br> نقل</th>
        <th style="text-align: center;"><table>
          <tr>
      <td style="width: 20%;">أبعاد النقل و الجانب التنظيمي المتعلق بنقل البضائع </td>
      <td style="width: 15%;">الوقاية و السلامة أثناء نقل البضائع </td>
      <td style="width: 22%;">المفاهيم التقنية لمركبات ذات محرك خاص بنقل البضائع </td>
      <td style="width: 13%;">التطبيقي</td>
      <td style="width: 33%;">فن حسن التصرف</td>
    </tr>
    
  </table> </th>
        
      </tr>
    </thead>
    <tbody>
    	<?php 
    
   $result_c = $mysqli -> query("SELECT * FROM condidat_f where acc=1  and id_f=".$id_f);
   $i =0;
while ($row_c = $result_c->fetch_assoc()) {
   
$results = $mysqli -> query("SELECT * FROM client where id=".$row_c['id_c']);
    $rows = $results->fetch_row();
  
      if ($rows) {
        $i++;
        $abs= 0 ;
       echo "
    <input type='hidden' name='tr".$i."' value='".$row_c['training']."'>
   ";  $r1 = ($row_c["n1"] <21 )? $row_c["n1"] : "";
        $dis1 = ($row_c["n1"] <21 )? '' : "disabled";
        $ch1 = ($row_c["n1"] <21 )? '' : "checked";
        
         $r2 = ($row_c["n2"] <21 )? $row_c["n2"] : "";
        $dis2 = ($row_c["n2"] <21 )? '' : "disabled";
        $ch2 = ($row_c["n2"] <21 )? '' : "checked";

         $r3 = ($row_c["n3"] <21 )? $row_c["n3"] : "";
        $dis3 = ($row_c["n3"] <21 )? '' : "disabled";
        $ch3 = ($row_c["n3"] <21 )? '' : "checked";

         $r4 = ($row_c["n4"] <21 )? $row_c["n4"] : "";
        $dis4 = ($row_c["n4"] <21 )? '' : "disabled";
        $ch4 = ($row_c["n4"] <21 )? '' : "checked";

         $r5 = ($row_c["n5"] <21 )? $row_c["n5"] : "";
        $dis5 = ($row_c["n5"] <21 )? '' : "disabled";
        $ch5 = ($row_c["n5"] <21 )? '' : "checked";
        $abs = ($row_c["n1"] ==21 || $row_c["n2"] ==21 || $row_c["n3"] ==21 || $row_c["n4"] ==21 || $row_c["n5"] ==21  )? 1 : 0;

         if ($rows[8]==1) {
      $inp = ' &nbsp; <td '.$hidden.' class="note'.$i.'"><input type="number" required step="0.25" id="ch5_'.$i.'" name="note5_'.$i.'" '.$dis5.' value="'.$r5.'" min=0 max=20 style="width:140px" /><br>
      <input type="checkbox" onclick="checkk(5,'.$i.')" '.$ch5.' name="ch5_'.$i.'">غائب</td> ';
    } else $inp = '';
        $bg = ($row_c['status']==2) ? 'grey' : '' ;
        $hidden = ($row_c['status']==2) ? 'hidden' : '' ;
        $op1 = ($row_c['status']==2) ? '' : 'selected' ;
        $op2 = ($row_c['status']==2) ? 'selected' : '' ;
        
           echo ' <tr>
      <td>'.$i.'</td>
      <td>'.$rows[2].' '.$rows[3].'</td>
        <td><select id="status'.$i.'" name="status'.$i.'" onchange="change('.$i.');">
          <option value="1" '.$op1.'>حاضر</option>
          <option value="2" '.$op2.'>تخلى عن التكوين</option>
        </select></td>
      <td style="text-align: center;">'.$tr[$rows[8]].'</td>

        <td class="td_note'.$i.'"  style="width: 100%; background-color:'.$bg.'">
        <table>
    <tr>
      <td '.$hidden.' class="note'.$i.'"><input type="number" required step="0.25" id="ch1_'.$i.'" name="note1_'.$i.'" value="'.$r1.'" '.$dis1.' min=0 max=20 style="width:140px" /><br>
      <input type="checkbox" onclick="checkk(1,'.$i.')" '.$ch1.' name="ch1_'.$i.'">غائب</td>

      <td '.$hidden.' class="note'.$i.'"><input type="number" required step="0.25" id="ch2_'.$i.'" name="note2_'.$i.'" value="'.$r2.'" '.$dis2.' min=0 max=20 style="width:140px" /><br>
      <input type="checkbox" onclick="checkk(2,'.$i.')" '.$ch2.' name="ch2_'.$i.'">غائب</td>

      <td '.$hidden.' class="note'.$i.'"> <input type="number" required step="0.25" id="ch3_'.$i.'" name="note3_'.$i.'" value="'.$r3.'" '.$dis3.' min=0 max=20 style="width:140px" /><br>
      <input type="checkbox" onclick="checkk(3,'.$i.')" '.$ch3.' name="ch3_'.$i.'">غائب</td>

      <td '.$hidden.' class="note'.$i.'"> <input type="number" required step="0.25" id="ch4_'.$i.'" name="note4_'.$i.'" value="'.$r4.'" '.$dis4.' min=0 max=20 style="width:140px" /><br>
      <input type="checkbox" onclick="checkk(4,'.$i.')" '.$ch4.' name="ch4_'.$i.'">غائب</td> '.$inp.'
    </tr>
  </table>           
      
                </td>
      </tr>';
         }   
     
  }   

    	  ?>

   </tbody> 
  </table>
  <div class="pull-right">
    <input type="submit" value="تحديث" class="top-buffer btn btn-primary" onclick="addRow('data')" />
  </div>

  </form>
  <form action="roulement.php" style=" top: 20px; right: 10px; position: relative;" method="GET">
  <?php 

  echo " <input type='hidden'  name='id' id='f".$id_f."' value='".$id_f."'><input type='hidden' name='f_ar' id='f_ar".$id_f."'><input type='hidden' name='f_num_ar_f' id='f_ar_f".$id_f."'> "; ?>
    <input type="hidden" value="<?php echo date('Y-m-d'); ?>" name="date" onchange="" class="form-control text-right" id="date"  />
    <input type="hidden" name="ar" class="form-control text-right" id="ar" placeholder="مدة التكوين"  required>
  
    <button name="" type="submit" class="btn btn-success" onclick='trad( <?php echo $id_f; ?> ); conv();' > استخراج محضر المداولة" 
    </button>
  </form>
</div>
</body>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<script src="assets/js/arab.js" ></script>
<script type="text/javascript">
function trad(x){
var x = document.getElementById("f"+x).value;
document.getElementById("f_ar"+x).value = 'ال'+ordinalsAr(x);
document.getElementById("f_ar_f"+x).value = 'ال'+ordinalsAr(x, true);

      }

function ordinalsAr(num, isFeminine=false) {
num %= 100;                  // only handle the lowest 2 digits (1-99) ignore others
let    the = "",           // set this to "" if you don't want the output prefixed with letters "ال"
      unit = num % 10,
    ordinal= the + [,"أول","ثاني","ثالث","رابع","خامس","سادس","سابع","ثامن","تاسع","عاشر"]
                   [num === 10 ? num : unit],                       // letters for lower part of ordinal string
    female = isFeminine ? "ة" : "",                                 // add letter "ة" if Feminine
      ones = (unit === 1 ? the + "حادي" : ordinal) + female;        // special cases for 21, 31, 41, etc.
return num <11 ? ordinal + (isFeminine && num ===1 ? "ى" : female): // from 1 to 10
       num <20 ? ones + " عشر" + female :                           // from 11 to 19
       (unit ? ones + " و" : "") +                                  // else 20 to 99
       "ال" +                                                       // always add "ال"
       [,,"عشر","ثلاث","أربع","خمس","ست","سبع","ثمان","تسع"]       // letters for 20, 30, 40...
       [ ~~(num / 10)] + "ون";
}

 function conv(){
    var d= document.getElementById("date").value;
    var arr1 = d.split('-');
    var a=  arr1[0];
    var b=  arr1[1];
    var c=  arr1[2];
   //  document.getElementById("ar").value= tafqit(document.getElementById("m").value * document.getElementById("s").value, {AG:'on'}) ;
   var z= ordinalsAr(c);
    switch (b)
{
case '01' :
y= " من شهر  جانفي";
break;
case '02' :
y= " من شهر  فيفري";
break;
case '03' :
y= " من شهر مارس";
break;
case '04' :
y= " من شهر أفريل";
break;
case '05' :
y= " من شهر  ماي";
break;
case '06' :
y= " من شهر  جوان";
break;
case '07' :
y= " من شهر  جويلية";
break;
case '08' :
y= " من شهر  أوت";
break;
case '09' :
y= " من شهر  سبتمبر";
break;
case '10' :
y= " من شهر  أكتوبر";
break;
case '11' :
y= " من شهر  نوفمبر";
break;
case '12' :
y= " من شهر ديسمبر";
break;
default :
y= " ";
}
   var x=tafqit(a, {AG:'on'});
      document.getElementById("ar").value= z+y+' لسنة '+x;

  }

  function checkk(x,y) {  
        var cbIsChecked = $("#ch"+x+"_"+y).prop('disabled');
    $("#ch"+x+"_"+y).attr('disabled', !cbIsChecked)
  }

	function change(y) {
		x= $('#status'+y).val();
		if (x==1){
			$('.note'+y).show();
			$('.td_note'+y).css("background-color", "");

		} else {
			$('.note'+y).hide();
			$('.td_note'+y).css("background-color", "grey");
		}
	}
	function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

let username = getCookie("Etus-CF");
		if (username == "" || username == null) {
			setc();
		}
function setc(){
	let pwd = prompt("Please enter CF password");

if (pwd == 'EtusCF22') {
 const d = new Date();
  d.setTime(d.getTime() + (180*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = "Etus-CF =" + pwd + ";" + expires + ";path=/";
}
else setc();
}
</script>
</html>