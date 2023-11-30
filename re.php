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

    $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

           

$mysqli = new mysqli($servername, $username, $password,$db);

if (isset($_GET['id'])) {
$id_s = $_GET['id'] ;}
 else $id_s=0;
if (isset($_POST['firstname'])) {

    $cl = $_POST['cl'];


  //$conn = new mysqli('localhost','root','','exlogin');
  //connection established
   $request_firstname = $_POST['firstname'];
    $request_lastname = $_POST['lastname'];
    $request_birthplace = $_POST['birthplace'];
    $request_birthdate = $_POST['birthdate'];
  //  $request_entreprise = $_POST['entreprise'];
    $request_address = $_POST['address'];
    $request_training = $_POST['training'];
    $request_phone = $_POST['phone'];
    $request_mail = $_POST['mail'];
    $request_drivinglicensedate = $_POST['drivinglicensedate'];
    $request_drivinglicense = $_POST['drivinglicense'];
    $request_commune = $_POST['commune'];
    $request_drivinglicenseclass = $_POST['drivinglicenseclass'];
    if (isset($_POST['date'])) {
    $now = $_POST['date'];

    } else {
        $now = date("Y-m-d"); 
  # code...
    }
    if ($cl == 0) {
    
  $sql = "INSERT INTO clientt (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values ('$request_firstname', '$request_lastname', '$request_birthplace', '$request_birthdate', '', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass','$now')";
  
              if ($conn->query($sql)=== TRUE) {
            }
            else{
            }
        echo"<script>
    Swal.fire({
  icon: 'success',
  title: 'تهانينا',
  text: 'لقد تم التسجيل بنجاح',
  type: 'success',
  animation: true,
  showConfirmButton: false,
  footer: '<a class=\"btn btn-primary\" href=\"pdf.php\">طباعة  الطلب</a>'
})

</script>";     
} else {
    $sql = "UPDATE clientt SET firstname = '$request_firstname', lastname = '$request_lastname', birthplace ='$request_birthplace' ,birthdate ='$request_birthdate' , training = '$request_training' , address = '$request_address', phone = '$request_phone', mail = '$request_mail',drivinglicensedate ='$request_drivinglicensedate' , drivinglicense = '$request_drivinglicense', commune = '$request_commune', drivinglicenseclass = '$request_drivinglicenseclass', created_at = '$now' where id= $cl";
 
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
            }
            else{

            //  echo "Error:".$sql."<br>".$conn->error;
    }
    $result = $mysqli -> query("SELECT entreprise FROM clientt where id = $cl");
    $row = $result->fetch_row();
    $id_d = $row[0];
    if($id_d){
     $result = $mysqli -> query("SELECT id_ep FROM ep_demande where id = $id_d");
    $row = $result->fetch_row();
    $ep = "?ep=".$row[0];
  }
   else $ep="";
  echo"<script>
    Swal.fire({
  icon: 'success',
  text: 'لقد تم التحديث بنجاح',
  type: 'success',
  animation: true,
  showConfirmButton: false,

  footer: '<a class=\"btn btn-primary\" href=\"Registration_Ep_candidat.php".$ep."\">رجوع</a>'
})

</script>";       }

}

    $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

           

$mysqli = new mysqli($servername, $username, $password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
 $sql = "SELECT id,firstname,lastname FROM clientt ";
$result = $mysqli -> query($sql);

?>

<br>
<br>
<br>

<div class="row justify-content-md-center">
<div class="row  col-10 shadow p-3 mb-5 bg-white rounded" style="direction:rtl; padding 10%;">
    <div id="container">
            <form action="re.php" method="POST" class=" needs-validation" >
              
              <div class="row justify-content-md-center ">
               
        <!--      https://laravel.com/docs/9.x/queries -->
             <div class="print" id="print">
             <center><h1 class="" style="color: #3d80e4">التسجيل الالكتروني </h1></center>

<div class="row">
  <div class=" col-4">
    <label for="validationCustom55">تاريخ  </label>
    <input type="date" name="date" class="form-control text-right" id="date"  >

  </div>
  <div class="col-4">
    <label for="cl">المترشح </label>

     <select class="form-control text-right" name="cl"  id="cl" onchange="change()" required>
        <option value="0" >-- اضافة مترشح --</option>
        <?php 
while ($row = $result->fetch_assoc()) {
    if ($row['firstname']) {
      $name = $row['firstname'].' '.$row['lastname'];
    } else {
      $name = 'المترشح '.$row['id'];
    }
         echo "<option value=".$row['id']." >".$name."</option>";
        }
        ?>
      </select>
  </div>
   </div>
<div class="row ">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom01">اللقب</label>
    <input type="text" name="firstname" class="form-control text-right" id="firstname" placeholder="اللقب"  required>
    <div class="invalid-feedback">
      يرجى تقديم اللقب
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom02">الاسم</label>
    <input type="text" name="lastname" class="form-control text-right" id="lastname" placeholder="الاسم" required>
    <div class="invalid-feedback">
      يرجى تقديم الاسم
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom03">مكان الميلاد</label>
    <input type="text" name="birthplace" class="form-control text-right" id="birthplace" placeholder="مكان الميلاد" required>
    <div class="invalid-feedback">
      يرجى تقديم مكان الميلاد
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom04">تاريخ الميلاد</label>
    <input type="date" name="birthdate" class="form-control text-right"  placeholder="تاريخ الميلاد" id="birthdate" required>
    <div class="invalid-feedback">
      يرجى تقديم تاريخ الميلاد
    </div>
  </div>

</div>


<div class="row">
  
  <!-- <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom05">المؤسسة المنتمي اليها</label>
    <input type="text" name="entreprise" class="form-control text-right" id="validationCustom05" placeholder="المؤسسة المنتمي اليها" required>
    <div class="invalid-feedback">
      يرجى تقديم المؤسسة المنتمي اليها
    </div>
  </div> -->

  <div class="col-sm-12 col-md-12 py-3 px-lg-5 text-right">
    <label for="validationCustom06">العنوان</label>
    <input type="text" name="address" class="form-control text-right" id="address" placeholder="العنوان" required>
    <div class="invalid-feedback">
      يرجى تقديم العنوان
    </div>
  </div>
<div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right offset-md-6">
    <label for="validationCustom07">التكوين المرغوب فيه</label>
      <select class="form-control text-right" name="training" id="training" onchange="change()" required>
        <option value="" hidden>-- اختيار --</option>
        <option value="1">نقل الاشخاص</option>
        <option value="2">نقل البضائع</option>
      </select>
    <div class="invalid-feedback">
      يرجى تقديم التكوين المرغوب فيه
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
    <input type="email" name="mail" class="form-control text-right" id="mail" placeholder="name@example.com" >
    <div class="invalid-feedback">
      يرجى تقديم البريد الالكتروني
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">

      <label for="validationCustom10">تاريخ صدور رخصة  السياقة</label>
      <input type="date" name="drivinglicensedate" class="form-control text-right" id="drivinglicensedate" placeholder="تاريخ صدور رخصة  السياقة" required>
      <div class="invalid-feedback">
       يرجى تقديم تاريخ صدور رخصة  السياقة
      </div>

  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom11">رقم رخصة السياقة</label>
    <input type="text" name="drivinglicense" class="form-control text-right" id="drivinglicense" placeholder="رخصة السياقة" required>
    <div class="invalid-feedback">
      يرجى تقديم رخصة السياقة
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom12">بلدية صدور رخصة  السياقة</label>
     <input type="text" name="commune" id="commune" class="form-control text-right" placeholder="بلدية صدور رخصة  السياقة  " required>
 
    <div class="invalid-feedback">
      يرجى تقديم بلدية صدور رخصة  السياقة
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom13">صنف رخصة السياقة</label>
      <select class="form-control text-right"  name="drivinglicenseclass" id="drivinglicenseclass" required>
         
      </select>
    <div class="invalid-feedback">
      يرجى تقديم صنف رخصة السياقة
    </div>
  </div>

</div>
             </div>

                
              <div class="row">
                <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-left">
                    <button class="btn btn-primary" name="save_clientt" type="submit">إرسال</button>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script>

    function aj(x){
       $.ajax({
                                type: 'get',
                                url: 'info_cl.php',
                                data: { id: x },
                                success: function(value) {
                                   var data = value.split(",");

 
                                    $("#firstname").val(data[0]);
                                    $("#lastname").val(data[1]);
                                    $("#birthplace").val(data[2]);
                                    $("#birthdate").val(data[3]);
                                    $("#address").val(data[4]);
                                  //  $("#training").val(data[5]);
                                    $("#mail").val(data[7]);
                                    $("#drivinglicensedate").val(data[8]);
                                    $("#drivinglicense").val(data[9]);
                                    $("#commune").val(data[10]);
                                  //  $("#drivinglicenseclass").val(data[11]);
                                    $("#date").val(data[12]);
                                    $("#phone").val(data[6]);
                                    const $select = document.querySelector('#training');
                                      $select.value = data[5]; 
                                      const $select2 = document.querySelector('#drivinglicenseclass');
                                      change();
                                      $select2.value = data[11];
                                }
                            });
    }
    $(document).ready(function() {
        //inialize datatable
       const $select_cl = document.querySelector('#cl');
                                      $select_cl.value = <?php echo $id_s ?>;
                                      aj(<?php echo $id_s ?>);
      });
    
     $('#cl').change(function () {
         id= $('#cl').val() ;
        aj(id);
    });
    function change(){
var x = document.getElementById("training").value;
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
var select = document.getElementById("drivinglicenseclass");
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
var select = document.getElementById("drivinglicenseclass");
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



