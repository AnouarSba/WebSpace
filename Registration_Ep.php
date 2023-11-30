<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';

?> 

<body>

<?php
include 'header.php';

?> 
<style>
  body{
    background-color: #fefefe
  }
  @media print {
    .print {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}
</style>
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main" style="top:50px; height:auto">
  <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="assets/js/sweetalert.js" ></script>

 <?php include('db_connect/db.php');
  
    $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           

$mysqli = new mysqli($servername, $username, $password,$db);

if (isset($_POST['nom'])) {

    $request_training = $_POST['ep'];


  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established
   $request_firstname = $_POST['nom'];
    $request_lastname = $_POST['actv'];
    $request_birthplace = $_POST['gerant'];
  //  $request_entreprise = $_POST['entreprise'];
    $request_address = $_POST['address'];
    $request_tr = $_POST['فقضهىهىل'];
    $request_phone = $_POST['phone'];
    $request_mail = $_POST['email'];
    $nb = $_POST['nbr_c'];
    if (isset($_POST['date'])) {
    $now = $_POST['date'];

    } else {
        $now = date("Y-m-d"); 
  # code...
    }
    if ($request_training==0) {
  $result = $mysqli -> query("SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES 
WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'entreprise' ");
    $row = $result->fetch_row();
    $last_id = $row[0];
 $sql = "INSERT INTO entreprise (nom, actv, gerant, address, phone, email, created_at) values ('$request_firstname', '$request_lastname', '$request_birthplace',  '$request_address', '$request_phone', '$request_mail','$now')";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
       //   footer: '<a class=\"btn btn-primary\" href=\"pdf.php\">طباعة  الطلب</a>'
    }
  /*  $result = $mysqli -> query("SELECT count(id) FROM entreprise ");
    $row = $result->fetch_row();
    $last_id = $row[0];*/
  //$last_id = mysqli_insert_id($conn);

  } else {
    $sql = "UPDATE entreprise SET nom = '$request_firstname', actv = '$request_lastname', gerant ='$request_birthplace' , address = '$request_address', phone = '$request_phone', email = '$request_mail' where id= $request_training";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
       //   footer: '<a class=\"btn btn-primary\" href=\"pdf.php\">طباعة  الطلب</a>'
    }
    $last_id = $request_training;
  }
     $result = $mysqli -> query("SELECT AUTO_INCREMENT FROM INFORMATION_SCHEMA.TABLES 
WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'ep_demande' ");
    $row = $result->fetch_row();
    $last_id_d = $row[0];

     $sql = "INSERT INTO ep_demande (id_ep, nbr_c, training,  created_at) values ('$last_id', '$nb', '$request_tr','$now')";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
       //   footer: '<a class=\"btn btn-primary\" href=\"pdf.php\">طباعة  الطلب</a>'
    }
  
              $annee = explode('-', $now)[0];

$result = $mysqli -> query("SELECT count(id) FROM client where created_at LIKE '".$annee."%'");
    $row = $result->fetch_row();
    $code = $row[0];
    for ($i=0; $i < $nb; $i++) { 

    $code +=1;
       $sql2 = "INSERT INTO client (entreprise,  created_at) values ( $last_id_d, '$now')";
      
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql2)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error; footer: '<a class=\"btn btn-success\" href=\"Registration_Ep_candidat.php?ep=".$last_id."\">حسنا</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class=\"btn btn-default\" href=\"#\" onclick = \"swal.close();\">لاحقا</a>'

            }
    }
 
        echo"<script>
    Swal.fire({
  icon: 'success',
  title: 'لقد تم التسجيل بنجاح',
  text: 'يرجى ملء بيانات المترشحين',
  type: 'success',
  animation: true,
  showConfirmButton: false,
  footer: 'لتأكيد طلبك يرجى الاتصال بمركز التكوين عبر: <br> 048764072 <br>cf22sba@gmail.com'
 
})

</script>";     
}


    $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           

$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
 $sql = "SELECT id,nom FROM entreprise ";
$result = $mysqli -> query($sql);

                

?>

<br>
<br>
<br>

<div class="row justify-content-md-center">
<div class="row  col-10 shadow p-3 mb-5 bg-white rounded" style="direction:rtl; padding 10%;">
    <div id="container">
            <form action="Registration_Ep.php" method="POST" class=" needs-validation" >
              
              <div class="row justify-content-md-center ">
               
        <!--      https://laravel.com/docs/9.x/queries -->
             <div class="print" id="print">
             <center><h1 class="" style="color: #3d80e4">التسجيل الالكتروني - مؤسسات - </h1></center>
<br>
<div class="row">
  <div class=" col-4 text-right">
    <label for="validationCustom55">تاريخ  طلب التسجيل </label>
    <input type="date" name="date" class="form-control text-right" id="date"  >

  </div>
  <div class="col-4" hidden="">
    <label for="validationCustom55">المؤسسة </label>

     <select class="form-control text-right" name="ep"  id="ep1" onchange="change()" required>
        <option value="0" >-- اضافة مؤسسة --</option>
        <?php 
while ($row = $result->fetch_assoc()) {
         echo "<option value=".$row['id'].">".$row['nom']."</option>";
        }
        ?>
      </select>
  </div>
  <div class="col-4 text-right" >
    <label for="validationCustom55">المؤسسة </label>

     <select class="form-control text-right" name="ep1"  id="ep" onchange="change()" required>
        <option value="0" >-- اضافة مؤسسة --</option>
        <?php 
$result = $mysqli -> query($sql);
while ($row = $result->fetch_assoc()) {
         echo "<option value=".$row['id'].">".$row['nom']."</option>";
        }
        ?>
      </select>
  </div>
   </div>
<div class="row ">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom01">المؤسسة</label>
    <input type="text" name="nom" class="form-control text-right" id="nom" placeholder="المؤسسة"  required>
    <div class="invalid-feedback">
      يرجى تقديم اللقب
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom02">نشاط المؤسسة</label>
    <input type="text" name="actv" class="form-control text-right" id="actv" placeholder="نشاط المؤسسة" required>
    <div >
      <small style="font-size: 11px">أشغال عمومية، الري، البناء، نقل البضائع  .... </small>
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom03">المسير</label>
    <input type="text" name="gerant" class="form-control text-right" id="gerant" placeholder="المسير" required>
    <div class="invalid-feedback">
      يرجى تقديم مكان الميلاد
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom06">العنوان</label>
    <input type="text" name="address" class="form-control text-right" id="address" placeholder="العنوان" required>
    <div class="invalid-feedback">
      يرجى تقديم العنوان
    </div>
  </div>

</div>




<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom08">رقم الهاتف</label>
    <input type="text" name="phone" class="form-control text-right" id="phone" placeholder="رقم الهاتف" required>
    <div class="invalid-feedback">
      يرجى تقديم رقم الهاتف
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom09">البريد الالكتروني</label>
    <input type="email" name="email" class="form-control text-right" id="email" placeholder="name@example.com" >
    <div class="invalid-feedback">
      يرجى تقديم البريد الالكتروني
    </div>
  </div>

</div>

<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom08">عدد السائقين</label>
    <input type="number" name="nbr_c" class="form-control text-right" id="nbr_c" placeholder="عدد السائقين" required>
    <div class="invalid-feedback">
      يرجى تقديم رقم الهاتف
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom07">التكوين المرغوب فيه</label>

   <select class="form-control text-right" name="training" id="training"  required>
        <option value="" hidden>-- اختيار --</option>
        <option value="1">نقل الاشخاص</option>
        <option value="2">نقل البضائع</option>
        <option value="3">نقل الاشخاص و البضائع</option>
      </select>
  </div>

</div>


             </div>

                
              <div class="row">
                <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-left">
                    <button class="btn btn-primary" name="save_client" type="submit">إرسال</button>
                </div>   
                
                               
              </div>

            </form>




                <!-- MESSAGES -->

                <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php session_unset(); } ?>


        </div>
  </div>
</div>

  




    </section><!-- End Testimonials Section -->

<?php
include 'footer.php';

?> 
  <script>
    var x = new Date().toISOString().slice(0, 10);
    $("#date").val(x);
     $('#ep').change(function () {
         id= $('#ep').val() ;
         $.ajax({
                                type: 'get',
                                url: 'info_ep.php',
                                data: { id: id },
                                success: function(value) {
                                   var data = value.split(",");
                                    $("#nom").val(data[0]);
                                    $("#actv").val(data[1]);
                                    $("#gerant").val(data[2]);
                                    $("#phone").val(data[3]);
                                    $("#email").val(data[4]);
                                    $("#address").val(data[5]);
                                }
                            });
    });
    function ep(x){
        $('#training').val(x); 
        
      }
    function change(){
var x = document.getElementById("validationCustom07").value;
if (x==2) {
var option = document.createElement("option");
option.text = "ج1";
option.value = "1";
var option1 = document.createElement("option");
option1.text = "ج2";
option1.value = "2";
var option3 = document.createElement("option");
option3.text = "ج1 -ج2";
option3.value = "4";
var option2 = document.createElement("option");
option2.text = "-- اختيار --";
option2.value = "";
var select = document.getElementById("validationCustom13");
select.options.length=0;
select.appendChild(option2);
select.appendChild(option);
select.appendChild(option1); 
select.appendChild(option3); 
}
else{
 var option = document.createElement("option");
option.text = "د";
option.value = "3";
var select = document.getElementById("validationCustom13");
select.options.length=0;
select.appendChild(option);
}

       
    }
    function print() {

var divToPrint=document.getElementById('print');

var newWin=window.open('','Print-Window');

newWin.document.open();

newWin.document.write('<html><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

newWin.document.close();

setTimeout(function(){newWin.close();},10);

}
function p(){
window.print();
  }
  </script>

</body>
</html>




     
    