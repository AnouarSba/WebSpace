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
		}body{
  background: #eceef1;
}
	</style>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">قائمة المسجلين بمركز المؤسسة للحصول على شهادة الكفاءة المهنية لسائقي مركبات  نقل الأشخاص و البضائع</h1>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-2">
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
				<div class="col-6" dir="rtl">
						<label>عرض  المترشحين حسب: </label>

				<select class="sel_c">
					<option value="1">الكل</option>
					<option value="مدرج بالتكوين">المدرجين بالتكوين</option>
					<option value="غير مدرج بالتكوين">غير المدرجين بالتكوين</option>
				</select>
				</div>
				<div class="col-6" dir="rtl">
					و <select class="sel">
					<option value="0">الكل</option>
					<option value="4">تاريخ التسجيل</option>
					<option value="9">تاريخ الاستمارة</option>
				</select> من: 
					<input type="date" name="" id="min" value="2021-01-01"> إلى:
				<input type="date" name="" id="max">
				</div>
				
			
			</div>	
			<div class="height10">
			</div>
			<div class="row" dir="rtl">
				<table id="myTable" class="table table-bordered table-striped" style="width: 100%;    border-right-width: 1;
" dir="rtl">
					<thead>
						<th>الرقم</th>
						<th >الاسم  اللقب</th>
						<th > </th>
						<th>التخصص</th>
						<th>تاريخ الطلب</th>
						<th>المبلغ الأولي (دج)</th>
						<th>تاريخ وصل الدفع </th>
						<th>المبلغ الاضافي (دج)</th>
						<th>تاريخ وصل الدفع </th>
						<th>تاريخ ورقم استمارة التسجيل</th>
						<th>تاريخ ورقم تمديد استمارة التسجيل</th>
						<th style="display: none;"></th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM client where valid = 1 ORDER BY id DESC";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){

								 $id=$row['id'];
							if($row['entreprise'])	{
    $result1 = $conn -> query("SELECT * FROM bon where ep=".$row['entreprise']." LIMIT 1");
    $row1 = $result1->fetch_row();
     $result3 = $conn -> query("SELECT * FROM ep_demande where id=".$row['entreprise']);
    								$roww = $result3->fetch_row();
    								$nb = $roww[3];
							}else{
    $result1 = $conn -> query("SELECT * FROM bon where client_id=$id LIMIT 1");
    $row1 = $result1->fetch_row();
    $nb=1;
							}
   
    if ($row1) {
    $date_bon = $row1[7];
    $mnt = $row1[5]/$nb;
    $type = $row1[4];
    $id_bon = $row1[0];
   } else {
   	 $date_bon = '';
    $mnt = 0;
    $type = 0;
    $id_bon = 0;
   }

  
if ($type==1) {
	if($row['entreprise'])	{
$result2 = $conn -> query("SELECT * FROM bon where ep=".$row['entreprise']." and id != $id_bon");
 $result3 = $conn -> query("SELECT * FROM ep_demande where id=".$row['entreprise']);
    								$roww = $result3->fetch_row();
    								$nb = $roww[3];
							}else{
$result2 = $conn -> query("SELECT * FROM bon where client_id=$id and id != $id_bon");
$nb = 1 ;
							}
    	$tr="";
    	$tr2="";
    	$cpt=0;

    	 while($rows = $result2->fetch_assoc()){
    	 	$cpt++;
    	 	$mt = intval($rows['montant'])/$nb;
    	$tr.="<tr>
              <td class='middle' style='font-size:12px' dir='rtl'>".$mt." </td>
            </tr>";
            $tr2.="<tr>
              <td class='middle' style='font-size:10px' dir='rtl'>".$rows['created_at']." </td>
            </tr>";
							}
    if ($cpt>0) {
            
    	$pls = "<td colspan='1'>
        <table width='100%'>
          <tbody>". $tr."
          
          </tbody>
        </table>
      </td>";
      $pls2 = "<td colspan='1'>
        <table width='100%'>
          <tbody>". $tr2."
          
          </tbody>
        </table>
      </td>";
    } else {
	$pls = "<td style='background-color:grey;'></td>";
	$pls2 = "<td style='background-color:grey;'></td>";
    	# code...
    }
    
	
} else {
	$pls = "<td style='background-color:grey;'></td>";
	$pls2 = "<td style='background-color:grey;'></td>";
}


 $result2 = $conn -> query("SELECT * FROM attestation where client_id=$id LIMIT 1");
    $row2 = $result2->fetch_row();
    if ($row2) {
    	$date_att = $row2[3];
    $id_att = $row2[0];# code...
    $num_att = $row2[1];# code...
    } else {
    	$date_att = '';
    $id_att = 0;
    $num_att = 0;
    }
    
    $result2 = $conn -> query("SELECT * FROM attestation where client_id=$id  and id != $id_att");
			$cpt=0;
	    	$tr="";
    	 while($rows = $result2->fetch_assoc()){
    	 	$cpt++;
    	 	$tr.="<tr>
              <td class='middle' style='font-size:10px' dir='rtl'>".$rows['num'].": ".$rows['created_at']."</td>
            </tr>";
							}
    if ($cpt>0) {
            
    	$att_p_info = "<td style='padding:10px' colspan='1'>
        <table width='100%'>
          <tbody>". $tr."
          
          </tbody>
        </table>
      </td>";
    } else {
    	
    
	$att_p_info = "<td style='background-color:grey;'></td>";
    }
    						if ($row['entreprise'] ==0 || $row['entreprise'] == null) {
    							$e = "<td >".$row['firstname'].' '.$row['lastname']."</td><td style='text-align:center'>مترشح حر</td>";
    							$ep=0;
    						} else {
    							 $result3 = $conn -> query("SELECT * FROM ep_demande where id=".$row['entreprise']);
    								$roww = $result3->fetch_row();
    								 $result3 = $conn -> query("SELECT * FROM entreprise where id=".$roww[2]);
    								$roww = $result3->fetch_row();
    								$ep = $row['entreprise'];
    								$e = "<td>".$row['firstname'].' '.$row['lastname']."</td><td >".$roww[1]."</td>";
    							
    							
    						}
    						$result = $conn -> query("SELECT count(id) FROM condidat_f where id_c=".$row['id']);
    										$rows = $result->fetch_row();
    										if ($rows[0]!=0) {
    											$exist=1;# code...
    										} else {
    											$exist=0;# code...
    										}
							$tr=['','نقل الاشخاص','نقل البضائع'];
							$ar=['غير مدرج بالتكوين','مدرج بالتكوين'];
							
							
								echo 
								"<tr>
									<td>".$row['id']."</td>
									
									".$e."
									<td style='text-align:center'>".$tr[$row["training"]]."</td>
									<td style='font-size:10px; padding:7px'>".$row['created_at']."</td>
									<td style='text-align:center'>".$mnt." </td>
									<td style='font-size:10px'>".$date_bon."</td>"
									.$pls.$pls2."
									<td style='font-size:12px'>".$num_att.': '.$date_att."</td>
									".$att_p_info."
									<td style='display:none'>" . $ar[$exist] . "</td>
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

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
	document.getElementById("max").valueAsDate = new Date();

		$.fn.dataTable.ext.search.push(function (settings, data, dataIndex) {
    var min = $('#min').val();
    var max = $('#max').val();
    var val = $('.sel').val(); 
    var val2 = $('.sel_c').val(); 
     var age3 = data[11] || 0; // use data for the age column
   
     
    var age = 0;
    if (val==0) { age = data[parseInt(val)+4]; age2 = data[parseInt(val)+8] ;}
    else  age = data[val].split(': ').pop() || 0;
     // use data for the age column
 if ( max <= min) {return false;}
 if (val == 0) {
 	if ((min <= age || min <= age2) && (age <= max || age2 <= max ) && (val2== age3 || val2== '1'))
     {
        return true;
    }
 } else {
 	if (min <= age && age <= max && (val2== age3 || val2== '1') )
     {
        return true;
    }
 }
    
    return false;
});


$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();
var table = $('#myTable').DataTable();
    table.draw();
  $('#min, #max').keyup(function () {
        table.draw();
    });
  $('#min, #max').change(function () {
        table.draw();
    });
  $('.sel').change(function () {
        table.draw();
    });
   $('.sel_c').change(function () {
        table.draw();
    });
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
</script>
</body>
</html>