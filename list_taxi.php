
<?php
	session_start();
	include 'nav_dtw.php';
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
	<h1 class="page-header text-center">قوائم المقبولين لنيل دفتر المقاعد الخاص بسائقي سيارات الأجرة</h1>
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
				 $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";
 include('db_connect/db.php');
$mysqli = new mysqli($servername, $username, $password,$db);

           
if (isset($_GET['add'])) {


$result = $mysqli -> query("SELECT count(id) FROM list_taxi ");

    $row_att = $result->fetch_row();
    $att_nb = $row_att[0]+1;
   

$sql = "INSERT INTO list_taxi (num, dtw) values ('$att_nb', 1)";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
            }
    }
			?>
			</div>
			<div class="row" dir="rtl">
				<div class="col-2">
					<a href="list_taxi.php?add" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> انشاء قائمة اضافية  </a> 
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
						<th>عدد المدرجين في القائمة</th>
						<th>التاريخ من - إلى</th>
						<th style="width: 250px"></th>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM list_taxi  ";

							//use for MySQLi-OOP
$query = $mysqli -> query("SELECT * FROM list_taxi where dtw=1 ");
    							

						//	$query = $conn->query($sql);

							while($row = $query->fetch_assoc()){

								$grp = 0;
								if($row['date_d']){
										$result = $mysqli -> query("SELECT count(id) FROM client_taxi where training=1 and valid=1 and  valider_le BETWEEN '".$row['date_d']."' and '".$row['date_f']."'");
    										$rows = $result->fetch_row();
    										
    										$grp = $rows[0];
    										$print = "
    										<form action='list_candidat.php' method='get'>
                        <input type='hidden'  name='id_list' id='list".$row['id']."' value='".$row['id']."'>
                         <button class='btn btn-success' type='submit'   >   طباعة القائمة</button> 
                      </form>

    										";
    									}
    										else {
    											$print = "";
    										$grp = 'تاريخ لم يحدد بعد';
    										}
									

    	$com= '<button class="btn btn-primary" type="button" onclick="com('.$row['id'].');"  data-toggle="modal" data-target="#exampleModal1"  >تحديد تاريخ</button> ';
   							
    						
    							$act = "<td style='width:250px;display: flex;
    flex-flow: nowrap;'>".$com.$print." 
									</td>";
    						
								echo 
								"<tr>
									<td>".$row['num']."</td>
									<td>".$grp."</td>
									<td>".$row["date_d"]." - ".$row["date_f"]."</td>
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
        <h5 class="modal-title" id="exampleModalLabel1" style="color: black;"> تحديد تاريخ</h5>
        <button type="button" style="position:absolute;float:left;left:0" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color:black">
      <form action="ajout_taxi.php" method="get"> 
      <div class="col-6 form-outline" style="width: 65%">
   <label  class="form-label" for="validationCustom01"> تاريخ بداية</label>

          <input type="date" id="dd" name="dd">
   <label  class="form-label" for="validationCustom01"> تاريخ نهاية</label>

          <input type="date" id="df" name="df">
          <input type="hidden" id="date" name="date">
        </div>

	<div class="row py-3 px-lg-5 text-right">
        <div class="col-6 form-outline">
    <!-- <label for="validationCustom01">رقم الهاتف</label> -->

   
      
<div class="button-area" >
        <span></span>
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
        <button type="submit" class="btn btn-primary" >تحديث</button>
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
function com(x){
				$('#date').val(x); 
				
			}
</script>
</body>
</html>
