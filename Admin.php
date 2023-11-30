<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10 {
			height: 10px;
		}

		.mtop10 {
			margin-top: 10px;
		}

		.modal-label {
			position: relative;
			top: 7px
		}
	</style>
</head>

<body>
	<div class="container">
		<h1 class="page-header text-center">فضاء خاص بمعالجة شكاوى الزبائن</h1>
		<div class="row">
			<div class="col-sm-12 col-sm-offset-0">
				<div class="row">
					<?php
					if (isset($_SESSION['error'])) {
						echo
						"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						" . $_SESSION['error'] . "
					</div>
					";
						unset($_SESSION['error']);
					}
					if (isset($_SESSION['success'])) {
						echo
						"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						" . $_SESSION['success'] . "
					</div>
					";
						unset($_SESSION['success']);
					}
					?>
				</div>
				<!--
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
				<a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a>
			</div> -->
				<div class="height10">
				</div>
				<div class="row" dir="rtl">
					<label>عرض  الشكاوى حسب: </label>
				<select class="sel">
					<option value="1">الكل</option>
					<option value="">لشكاوى غير المعالجة</option>
					<option value="تمت معالجتها">الشكاوى المعالجة</option>
					<option value="محفوظة">الشكاوى المحفوظة</option>
				</select>
					<table id="myTable" class="table table-bordered table-striped">
						<thead>
							<th>رقم الشكوى</th>
							<th>المرسل</th>
							<th>رقم الهاتف</th>
							<th>البريد الالكتروني</th>
							<th>مضمون الشكوى</th>
							<th id="date">يوم</th>
							<th >مآل الشكوى</th>
							<th></th>
						</thead>
						<tbody>
							<?php
							include_once('connection.php');
							$sql = "SELECT * FROM plnt ";
							$ar = ['', 'محفوظة','تمت معالجتها'];
							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while ($row = $query->fetch_assoc()) {
								$color = ($row['status']) ? "" : 'lightgoldenrodyellow';
								if ($row['status'] != 1) {
									$b1= "<a data-toggle='modal' data-target='#exampleModal1' class='btn btn-success btn-sm' onclick='sv(". $row['id'] .");' data-toggle='modal'> حفظ</a>";
								} else {
									$b1= "";
								}
								if ($row['status'] != 2) {
									$b2= "<a data-toggle='modal' onclick='sv2(". $row['id'] .");' data-target='#exampleModal' class='btn btn-danger btn-sm' data-toggle='modal'> معالجة</a>";
								} else {
									$b2= "<a data-toggle='modal' onclick='sv2(". $row['id'] .");' data-target='#exampleModal' class='btn btn-danger btn-sm' data-toggle='modal'> عديل الاجراء</a>";
								}
								
								echo
								"<tr  style='background-color:" . $color . " ;'>
									<td>" . $row['id'] . "</td>
									<td>" . $row['name'] . "</td>
									<td>" . $row['phone'] . "</td>
									<td>" . $row['email'] . "</td>
									<td>" . $row['message'] . "</td>
									<td>" . $row['created_at'] . "</td>
									<td>" . $ar[$row['status']] . "</td>
									<td>
										".$b1.$b2."
										
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
							/////////////////<span class='glyphicon glyphicon-edit'></span>

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
	<div class="modal fade" style="direction:rtl" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" style="color: black;font-size: 22px">معالجة شكوى</h5>
					<button type="button" style="position:absolute;float:left;left:0" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="color:black">
					<form action="msg2_1.php" method="get">
						<div class="row py-3 px-lg-5 text-right">
							<div class="col-12">
								<div class="col-sm-12 col-md-12 py-3 px-lg-5 text-right">
									<label for="validationCustom01">الاجراءات المتبعة</label>
						<input type="hidden" id="sv2" name="idd">

									<textarea required placeholder="" cols="72" id="message" rows="10" name="message"></textarea>
								</div>
								<div class="button-area">
									<span></span>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
								<button type="submit" class="btn btn-primary">تأكيد</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" style="direction:rtl" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" style="color: black;font-size: 22px">حفظ شكوى</h5>
					<button type="button" style="position:absolute;float:left;left:0" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="color:black">
					هل أنت متأكد من حفظ هذه الشكوى ؟
				</div>
				<div class="modal-footer">
					<form action="msg2_1.php" method="get">
						<input type="hidden" id="sv" name="id">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
								<button type="submit" class="btn btn-primary">تأكيد</button>
					</form>
				</div>
			</div>
		</div>
	</div>
		<?php include('add_modal.php') ?>

		<script src="jquery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="datatable/jquery.dataTables.min.js"></script>
		<script src="datatable/dataTable.bootstrap.min.js"></script>
		<!-- generate datatable on our table -->
		<script>
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

let username = getCookie("Etus-Admin");
		if (username == "" || username == null) {
			setc();
		}
function setc(){
	let pwd = prompt("Please enter Etus password");

if (pwd == 'Etus22') {
 const d = new Date();
  d.setTime(d.getTime() + (180*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = "Etus-Admin =" + pwd + ";" + expires + ";path=/";
}
else setc();
}
			$.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
    var sel = $('.sel').val();
    var age = data[6] ; // use data for the age column
    if (sel == age || sel== '1')
     {
        return true;
    }
    return false;
    });


			$(document).ready(function() {
				//inialize datatable
				$('#myTable').DataTable();
var table = $('#myTable').DataTable();
 $('.sel').change(function () {
  				table.draw();
    });
				//hide alert
				$(document).on('click', '.close', function() {
					$('.alert').hide();
				})
				$('#date').click();
				$('#date').click();
			});
			function sv(x){
				$('#sv').val(x); 
				
			}
			function sv2(x){
				$('#sv2').val(x); 
				$.ajax({
                                type: 'get',
                                url: 'info.php',
                                data: { id: x },
                                success: function(data) {
                                    $("#message").val(data);
                                }
                            });
			}

		</script>
</body>

</html>