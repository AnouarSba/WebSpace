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
	<h1 class="page-header text-center">أتعاب الأساتذة</h1>
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
			<div class="row" dir="rtl">
				<div class="col-2">
					<a href="Registration.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> اضافة  أستاذ</a> 
				</div>
				

				

				<div class="col-8">
					
				</div>

				<!--
				&nbsp; &nbsp; &nbsp;  <a href="Formations.php" class="btn btn-warning pull-right" style="margin: 0 10px">تسيير الدورات التكوينية</a> 
				<a href="list.php" class="btn btn-success pull-right" style="margin: 0 10px">القائمة</a> 
				<a href="Registration_Ep_candidat.php" class="btn btn-success pull-right">المؤسسات</a>&nbsp; &nbsp; &nbsp; -->
			</div>
			<div class="height10">
			</div>
			<div class="row" style="width: 100%" dir="rtl">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th style="text-align: right;" >الرقم</th>
						<th style="text-align: right;">الاسم</th>
						<th style="text-align: right;">اللقب</th>
						<th style="text-align: right;">المقياس</th>
						<th style="text-align: right;">ساعات العمل</th>
						<th style="text-align: right;"></th>
					</thead>
					<tbody>
						<?php
						$i=0;
						if (isset($_GET['id'])) {
$id=$_GET['id'];
}
							include_once('connection.php');
							$sql = "SELECT * FROM profs_charge where id_f =".$id;

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							$j=0;
							while($row = $query->fetch_assoc()){
								$result = $conn -> query("SELECT * FROM profs where id=".$row['id_prof']);
    $rows = $result->fetch_row();
    if ($rows) { $i++;
    		if ($row['hour']) {
    			$j++;
    		}
    	$arr = '  <form action="payed_prof.php" method="POST">
                    <input type="hidden" name="id" value="'.$row['id'].'">
                    <input type="hidden" name="nom" value="'.$rows[2].' '.$rows[3].'">
                    <input type="hidden" name="id_f" value="'.$row['id_f'].'">
                    <input type="hidden" name="num" value="'.$row['num'].'">
                    <input type="number" name="hour" id="hour_'.$i.'"  value="'.$row['hour'].'" hidden>
                    <input type="date" name="now" id="now" >
                    <button class="btn btn-warning" type="submit"  >استخراج </button> 
                  </form>';
                  $cours='';
                  $pieces = explode(",", $row['module']);
                  foreach ($pieces as  $value) {
                  	$resultt = $conn -> query("SELECT * FROM module where id=".$value);
    $rowss = $resultt->fetch_row();
    $cours .= $rowss[1].'<br>';
                  }
								echo 
								"<tr>
									<td>".$i."</td>
									<td>".$rows[2]."</td>
									<td>".$rows[3]."</td>
									<td>".$cours."</td>
									<td><input type='number' name='hour2' id='hour2_".$i."' value='".$row['hour']."' onkeyup='rep(".$i.");'></td>
									<td>".$arr."</td>
								</tr>";
								include('edit_delete_modal.php');
    } 		
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
			<?php 
				if ($i==$j) {
					echo "<a href='payed_profs.php?id_f=".$id."' class='btn btn-success btn-sm' ><span class='glyphicon glyphicon-file'></span> استخراج</a>";
				}
			 ?>
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
	 function rep(y) {
	 	var x = $('#hour2_'+y).val();
	 	$('#hour_'+y).val(x)
	 }
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
function com(x,y,z){
				$('#client').val(x); 
				$('#ep').val(y); 
				$('#tr').val(z); 
				
			}
</script>
</body>
</html>