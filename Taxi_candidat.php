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
	<h1 class="page-header text-center">قائمة المترشحين لنيل دفتر المقاعد الخاص بسائقي سيارات الأجرة</h1>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
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
			<div class="row" >
					<div class="col-12 text-right" style="font-size: 18px" dir="rtl">
						
			<!--		<form action="payed.php" method="post">
		استخراج قائمة المترشحين الذين دفعوا حقوق التسجيل كاملة  لشهر 
&nbsp;<select name="mois">
			<option value="01">جانفي</option>
			<option value="02">فيفري</option>
			<option value="03">مارس</option>
			<option value="04">أفريل</option>
			<option value="05">ماي</option>
			<option value="06">جوان</option>
			<option value="07">جويلية</option>
			<option value="08">أوت</option>
			<option value="09">سبتمبر</option>
			<option value="10">أكتوبر</option>
			<option value="11">نوفمبر</option>
			<option value="12">ديسمبر</option>
		</select>&nbsp;
		من سنة &nbsp;
		<input type="number" name="annee" value="2023">
		<input type="submit" class="btn btn-default" name="" value="استخراج">
	</form>
				</div> <br> 
				<div class="col-2">
					<a href="Registration.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> اضافة  مترشح حر</a> 
				</div>
				
				

				<div class="col-2"><div style="width: 20px"></div>
					<a href="Registration_Ep.php" class="btn btn-primary  pull-right"><span class="glyphicon glyphicon-plus "></span> اضافة  مؤسسة </a>
				</div>

			-->

				<!--
				&nbsp; &nbsp; &nbsp;  <a href="Formations.php" class="btn btn-warning pull-right" style="margin: 0 10px">تسيير الدورات التكوينية</a> 
				<a href="list.php" class="btn btn-success pull-right" style="margin: 0 10px">القائمة</a> 
				<a href="Registration_Ep_candidat.php" class="btn btn-success pull-right">المؤسسات</a>&nbsp; &nbsp; &nbsp; -->
			</div>
			<div class="height10">
			</div>
			<div class="row" style="width: 100%">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th >الرقم</th>
						<th hidden="">الرقم</th>
						<th>مديرية النقل</th>
						<th>الاسم</th>
						<th>اللقب</th>
						<th>رقم المستخدم</th>
						<th>رقم الهاتف</th>
						<th></th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM client_taxi where training=1 ORDER BY id DESC";
$tr=['','ولاية سيدي بلعباس','نقل البضائع'];

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
						/*		if ($row['valid']) {
								
								$result = $conn -> query("SELECT id FROM contrat where client_id=".$row['id']);
    $rows = $result->fetch_row();
    if ($rows) {
    	$arr = '  <form action="bon_p.php" method="get">
                    <input type="hidden" name="id" value="'.$row['id'].'">
                    <input type="number" name="att">
                    <input type="date" name="date">
                    <button class="btn btn-warning" type="submit"  >تمديد استمارة التسجيل </button> 
                  </form>';

    } else $arr=''; 
    						if ($row['entreprise']) {
    							$arr = '  <form action="bon_p.php" method="get">
                    <input type="hidden" name="id" value="'.$row['id'].'">
                    <input type="number" name="att">
                    <input type="date" name="date">
                    <button class="btn btn-warning" type="submit"  >تمديد استمارة التسجيل </button> 
                  </form>';
    							$act = "".$arr;

    	

    						} else {
    							$act = "
										<a href='Traitement.php?id=".$row['id']."' class='btn btn-success btn-sm' ><span class='glyphicon glyphicon-edit'></span> متابعة  الملف</a>
										<a href='pdf.php?id=".$row['id']."' class='btn btn-primary btn-sm' ><span class='glyphicon glyphicon-edit'></span>طباعة الطلب</a>
										<a href='bon_b.php?id=".$row['id']."' class='btn btn-default btn-sm' ><span class='glyphicon glyphicon-edit'></span>طلب  وصل  البنك </a>".$arr."
										
										
									";
    						}
    						$act.= "<button class='btn btn-danger' type='button' onclick='com(".$row['id'].",".$row['entreprise'].",".$row['training'].");choice()'  data-toggle='modal' data-target='#exampleModal1'  >ادراج لتكوين</button>";
    					} else {
    							if ($row['entreprise']) {
    									$act = "
    					    					<a href='Registration_Ep_candidat.php?ep=".$row['entreprise']."' class='btn btn-warning btn-sm' ><span class='glyphicon glyphicon-eye'></span>   معاينة طلب المؤسسة</a>
    					    						
    					    					";
    							} else {
    									$act = "
    					    					<a href='Traitement.php?id=".$row['id']."' class='btn btn-success btn-sm' ><span class='glyphicon glyphicon-edit'></span> متابعة  الملف</a>
    					    						<a href='ajout.php?delete=1&id=".$row['id']."' class='btn btn-danger btn-sm' ><span class='glyphicon glyphicon-delete'></span>حذف المترشح</a>
    					    					";
    							}
    							
    					
    					    				} 
    					    				*/$code = ($row['valid']) ? $row['code'].'-'.explode('-', $row["created_at"])[0] : '' ;
    					    				$act = (!$row['valid']) ?  "<a href='taxi_pdf.php?id=".$row['id']."' class='btn btn-primary btn-sm' ><span class='glyphicon glyphicon-edit'></span>طباعة الطلب</a>
    					    					<a href='ajout_taxi.php?confirm=1&id=".$row['id']."' class='btn btn-success btn-sm' ><span class='glyphicon glyphicon-edit'></span> قبول الطلب</a>
    					    						<a href='ajout_taxi.php?delete=1&id=".$row['id']."' class='btn btn-danger btn-sm' ><span class='glyphicon glyphicon-delete'></span>حذف المترشح</a>
    					    					" : "<a href='taxi_pdf.php?id=".$row['id']."' class='btn btn-primary btn-sm' ><span class='glyphicon glyphicon-edit'></span>طباعة الطلب</a>";
								echo 
								"<tr>
									<td hidden>".$row['id'].'.'.explode('-', $row["created_at"])[0]."</td>
									<td>".$code."</td>
									<td>".$tr[$row['training']]."</td>
									<td>".$row['firstname']."</td>
									<td>".$row['lastname']."</td>
									<td>".$row['user']."</td>
									<td>".$row["phone"]."</td>
									<td>".$act."</td>
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
      <div class="modal-body" style="color:black" dir="rtl">
      <form action="ajout.php" method="get"> 
      <div class="col-8 form-outline" style="width: 65%">
   <label  class="form-label" for="validationCustom01">التكوين</label>

          <select name="form" id="formation"  required onchange="choice()">
           <?php 
         $sql = "SELECT id,created_at,num FROM formation ";
$result = $conn -> query($sql);
while ($row = $result->fetch_assoc()) {
         echo "<option value=".$row['id'].">".$row['num'].' - '.$row['created_at']."</option>";
        }
        ?>
          </select> &nbsp; &nbsp; الفوج  &nbsp; &nbsp;
          <select name="grp" id="grp" disabled="">
          
          </select>
        </div>
       
      <div dir="rtl" class="text-right"><input class="coupon_question" type="checkbox" name="rdb" value="1" onchange="valueChanged()"/>&nbsp; &nbsp;معيد من الدورة  السابقة<br>
      	<textarea id="abs" cols="45"  rows="10" name="abs" ></textarea>
      </div>
	<div class="row py-3 px-lg-5 text-right">
        <div class="col-6 form-outline">
    <!-- <label for="validationCustom01">رقم الهاتف</label> -->

          <input type="hidden" name="client" id="client"  class="form-control" >
          <input type="hidden" name="ep" id="ep"  class="form-control" >
          <input type="hidden" name="tr" id="tr"  class="form-control" >
   
      
<div class="button-area" >
        <span></span>
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
        <button type="submit" class="btn btn-primary" >تأكيد</button>
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
	 $("#abs").hide();
	function valueChanged()
    {
        if($('.coupon_question').is(":checked"))  { 
                    $("#abs").show();
                document.getElementById("abs").required = true;}

        else{
                    $("#abs").hide();
                document.getElementById("abs").required = false;
        }
    }
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
function choice() {
	x = $('#formation').val();
	 $.ajax({
        url : "info_form.php",
      data:{id:x},             
        type:'GET',
        dataType: 'json',
        success: function(value) {
            $("#grp").attr('disabled', false);
                           $("#grp").find('option').remove();

            	for (var i = 1; i <= value; i++) {
            		$("#grp").append('<option value=' + i + '>' + i + '</option>');
            		}
                
            
         }
    }); 
}
function com(x,y,z){
				$('#client').val(x); 
				$('#ep').val(y); 
				$('#tr').val(z); 
				
			}
</script>
</body>
</html>