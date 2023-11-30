
<?php
	session_start();
	include 'nav.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
		body{
  background: #eceef1;
}
	</style>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">الدورات التكوينية الخاصة بشهادات الكفاءة المهنية لسائقي مركبات  نقل الأشخاص و البضائع</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row" dir="rtl">
				<div class="col-2">
					<a href="add_formation.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> اضافة  </a> 
				</div>

			<!--
				&nbsp; &nbsp; &nbsp; <a href="Registration_Ep.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> اضافة  مؤسسة </a>
				<a href="list.php" class="btn btn-success pull-right" style="margin: 0 10px">القائمة</a> 
				<a href="Registration_Ep_candidat.php" class="btn btn-success pull-right">المؤسسات</a>&nbsp; &nbsp; &nbsp;
			-->
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped" dir="rtl">
					<thead>
						<th>الرقم</th>
						<th>تاريخ نهاية الدورة</th>
						<th>عدد المترشحين</th>
						<th>عدد المترشحين المقبولين</th>
						<th>التخصص</th>
						<th>التاريخ</th>
						<th></th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM formation ";
$tr=['لم يحدد بعد','نقل الاشخاص','نقل البضائع' ,'نقل الأشخاص و البضائع'];

							//use for MySQLi-OOP
    							

							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								$grp = '(';
								if ($row['grp']>1) {
									for ($i=1; $i <= $row['grp'] ; $i++) { 
										$result = $conn -> query("SELECT count(id) FROM condidat_f where acc=1 and redoublant=0 and  id_f=".$row['id']." and grp=".$i);
    										$rows = $result->fetch_row();
    										if ($i==1) {
    											$x='';# code...
    										} else {
    											$x=' ، ';# code...
    										}
    										
    										$grp .= $x.'الفوج  '.$i.': '.$rows[0];
									}
									$grp.=' )';
									
								} else {
									$grp='';
								}
								
								$result = $conn -> query("SELECT count(id) FROM condidat_f where redoublant=0 and id_f=".$row['id']);
    $rows = $result->fetch_row();
    $result1 = $conn -> query("SELECT count(distinct id_c) FROM condidat_f where acc=1 and redoublant=0 and id_f=".$row['id']);
    $rows1 = $result1->fetch_row();
								$result_r = $conn -> query("SELECT id FROM reunion where formation=".$row['id']);
    $row_r = $result_r->fetch_row();
    if ($row_r) {
    	$arr = '';
    	$result_c = $conn -> query("SELECT id FROM commission where reunion=".$row_r[0]);
    $row_c = $result_c->fetch_row();
    if ($row_c) {
   	$com = '';

    	$open = "<form action='reunion.php' method='get'>
                        <input type='hidden'  name='f' id='f".$row['id']."' value='".$row['id']."'><input type='hidden' name='f_ar' id='f_ar".$row['id']."'><input type='hidden' name='f_ar_f' id='f_ar_f".$row['id']."'>
                        <button class='btn btn-success' type='submit' onclick='trad(".$row['id'].")'   > استخراج محضر الافتتاح</button> 
                      </form> <br><form action='Evaluation.php' method='get'>
                        <input type='hidden' name='id' value='".$row['id']."'>
                        <button class='btn btn-warning' type='submit'  >تقييم المترشحين</button> 
                      </form><br><form action='profs_charge.php' method='get'>
                        <input type='hidden' name='id' value='".$row['id']."'>
                        <button class='btn btn-danger' type='submit'  >أتعاب الأساتذة</button> 
                      </form>";
    }
   else{
   	$open = '';
    	$com= '<button class="btn btn-primary" type="button" onclick="com('.$row_r[0].');"  data-toggle="modal" data-target="#exampleModal1"  >تشكيل لجنة</button> ';
   }
    } else{ $arr='  <form action="ajout.php" method="get">
                        <input type="hidden" name="id" value="'.$row['id'].'">
                        <input type="hidden" name="r" >
                        <button class="btn btn-warning" type="submit"  >فتح محضر</button> 
                      </form>';
   	$open = '';
                      $com= '';}
    						
    							$act = "<td>".$arr.$com.$open." 
									</td>";
    						
    						
    						/*if ($row['duree'] == 1) {
    							$mois = 'شهر واحد';
    						} else if ($row['duree'] == 2) {
    							$mois = 'شهرين  ('.$row['duree'].')';
    						} else if ($row['duree'] <= 10) {
    							$mois = $row['duree'].' أشهر';
    						} else {
    							$mois = $row['duree'].' شهر';
    						}
    						*/if ($row['duree'] == 1) {
    							$mois = 'لا تتجاوز شهرين';
    						} else if ($row['duree'] == 2) {
    							$mois = '11 يوم';
    						} $mois = $row['date_f'];
								echo 
								"<tr>
									<td>".$row['num'].'.'.explode('-', $row["created_at"])[0]."</td>
									<td>".$mois."</td>
									<td>".$rows[0].'/'.$row['nbr_c']."</td>
									<td>".$rows1[0].'/'.$row['nbr_c']." ".$grp."</td>
									<td>".$tr[$row["training"]]."</td>
									<td>".$row["created_at"]."</td>
									".$act."
								</tr>";
								include('edit_delete_modal.php');
							}
							/////////////////

							//use for MySQLi Procedural
							// $query = mysqli_query($conn, $sql);
							// while($row = mysqli_fetch_assoc($query)){
							// 	echo
							// 	"<tr>
							// 		<td>".$row['id']."</td>
							// 		<td>".$row['firstname']."</td>
							// 		<td>".$row['lastname']."</td>
							// 		<td>".$row['address']."</td>
							// 		<td>
							// 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
							// 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							// 		</td>
							// 	</tr>";
							// 	include('edit_delete_modal.php');
							// }
							/////////////////

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>
<div class="modal fade" style="direction:rtl" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color: black;background-color:#3d80e4">
        <h5 class="modal-title" id="exampleModalLabel1" style="color: black;">تشكيل لجنة</h5>
        <button type="button" style="position:absolute;float:left;left:0" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color:black">
      <form action="ajout.php" method="get"> 
      <div class="col-6 form-outline" style="width: 65%">
   <label  class="form-label" for="validationCustom01">ممثل الأساتذة</label>

          <select name="prof" required >
          	<option value="">ختيار</option>
          	<option value="1">تساكي الحاج</option>
          	<option value="2">ناصري ابراهيم</option>
          	<option value="3">عمرون كريم</option>
          </select>
        </div>

	<div class="row py-3 px-lg-5 text-right">
        <div class="col-6 form-outline">
    <!-- <label for="validationCustom01">رقم الهاتف</label> -->

          <input type="hidden" name="formation" id="formation"  class="form-control" >
   
      
<div class="button-area" >
        <span></span>
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
        <button type="submit" class="btn btn-primary" >إنشاء</button>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
	    function trad(x){
var x = document.getElementById("f"+x).value;
document.getElementById("f_ar"+x).value = ordinalsAr(x);
document.getElementById("f_ar_f"+x).value = ordinalsAr(x, true);

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
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
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

function com(x){
				$('#formation').val(x); 
				
			}
</script>
</body>
</html>
