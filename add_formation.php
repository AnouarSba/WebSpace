<!DOCTYPE html>
<html  style="background-color: #eceef1" lang="en">


  


<?php
include 'nav.php';

?> 
<style>
  body{
    background-color: #eceef1
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
.nav{
  height: 50px;
}
</style>
<!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main"  style="background-color: #eceef1; top:50px; height:auto">
  <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="assets/js/sweetalert.js" ></script>

 <?php include('db_connect/db.php');
  
    $servername = "mysql.at.dz";
$username = "u0458";
$password = "wO4EnNk-OHb2N5XT";
$db = "db0458_etus-sba";

           

$mysqli = new mysqli($servername, $username, $password,$db);

if (isset($_POST['formation'])) {

    $request_training = $_POST['formation'];


    $nb = $_POST['nbr_c'];
    $grp = $_POST['nbr_g'];
    $ar = $_POST['ar'];
    $duree = $_POST['duree'];
    $date_f = $_POST['date_f'];
    if (isset($_POST['date'])) {
    $now = $_POST['date'];

    } else {
        $now = date("Y-m-d"); 
  # code...
    }
    if ($request_training==0) {
              $annee = explode('-', $now)[0];

$result = $mysqli -> query("SELECT count(id) FROM formation where created_at LIKE '".$annee."%'");
    $row = $result->fetch_row();
    $code = $row[0]+1;

   // $grp= intdiv($nb, 15)+1;
 $sql = "INSERT INTO formation (num, duree, nbr_c, created_at, date_ar, grp, date_f) values ($code, $duree, $nb,'$now','$ar',$grp, '$date_f')";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";*/
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
       //   footer: '<a class=\"btn btn-primary\" href=\"pdf.php\">طباعة  الطلب</a>'
    }
   

  } else {
   /* $sql = "UPDATE entreprise SET nom = '$request_firstname', actv = '$request_lastname', gerant ='$request_birthplace' , address = '$request_address', phone = '$request_phone', email = '$request_mail' where id= $request_training";
  /* $sql = "INSERT INTO client (firstname, lastname, birthplace, birthdate, entreprise, address, training, phone, mail, drivinglicensedate, drivinglicense, commune, drivinglicenseclass, created_at) values (N'$request_firstname', N'$request_lastname', '$request_birthplace', '$request_birthdate', '$request_entreprise', '$request_address', '$request_training', '$request_phone', '$request_mail', '$request_drivinglicensedate', '$request_drivinglicense', '$request_commune', '$request_drivinglicenseclass',$now)";
              if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
            }
            else{

             // echo "Error:".$sql."<br>".$conn->error;
       //   footer: '<a class=\"btn btn-primary\" href=\"pdf.php\">طباعة  الطلب</a>'
    }
    $last_id = $request_training;*/
  }
   
 
        echo"<script>
    Swal.fire({
  icon: 'success',
  title: 'لقد تم اضافة التكوين بنجاح',
  text: '',
  type: 'success',
  animation: true,
  showConfirmButton: false,
  footer: '<a class=\"btn btn-success\" href=\"Formations.php\">معاينة التكوين</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class=\"btn btn-default\" href=\"#\" onclick = \"swal.close();\">لاحقا</a>'

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


<div class="row justify-content-md-center" style="background-color: #eceef1">
<div class="row  col-10 shadow p-3 mb-5 bg-white rounded" style="direction:rtl; padding 10%;">
    <div id="container">
            <form action="add_formation.php" method="POST" class=" needs-validation" >
              
              <div class="row justify-content-md-center ">
               
        <!--      https://laravel.com/docs/9.x/queries -->
             <div class="print" id="print">
             <center><h1 class="" style="color: #3d80e4">اضافة  دورة تكوينية </h1></center>

<div class="row">
  
  <div class="col-4 text-right">
    <label for="validationCustom55">الدورة التكوينية </label>

     <select class="form-control text-right" name="formation"  id="formation"  required>
        <option value="0" >-- اضافة دورة تكوينية --</option>
        <?php 
         $sql = "SELECT id,created_at FROM formation ";
$result = $mysqli -> query($sql);
while ($row = $result->fetch_assoc()) {
         echo "<option value=".$row['id'].">".$row['id'].' - '.$row['created_at']."</option>";
        }
        ?>
      </select>
  </div>
   </div>
  
   <br>
  
    <div class="row  text-right">
      <div class="row col-6">
          <div class=" col-4">
    <label for="validationCustom55">تاريخ  بداية الدورة</label>
    <input type="date" name="date" onchange="conv();" class="form-control text-right" id="date"  />

  </div>
  <div class=" col-4">
    <label for="validationCustom55">تاريخ  نهاية الدورة</label>
    <input type="date" name="date_f"  class="form-control text-right" id="date_f"  />

  </div>
      </div>
      <div class="col-6">
         <label for="validationCustom01">نوع دورة التكوين</label>
     <select class="form-control text-right" name="duree"  id="duree"  required>
        <option value="" >-- اختيار--</option>
         <option value="1">تناوبية</option>";
         <option value="2">غير تناوبية</option>";

      </select>
    <div class="invalid-feedback">
      يرجى تقديم اللقب
    </div>
    <input type="hidden" name="ar" class="form-control text-right" id="ar" placeholder="مدة التكوين"  required>
  
      </div>
   
   </div>
   
<div class="row">
	<div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom08">عدد  المترشحين</label>
    <input type="number" name="nbr_c" class="form-control text-right" id="nbr_c" placeholder="عدد المترشحين" required>
    <div class="invalid-feedback">
      يرجى تقديم رقم الهاتف
    </div>
  </div>

  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom08">عدد  الأفواج</label>
    <input type="number" name="nbr_g" class="form-control text-right" id="nbr_g" placeholder="عدد الأفواج" required>
    <div class="invalid-feedback">
      يرجى تقديم رقم الهاتف
    </div>
  </div>
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
</body>
 <script src="assets/js/arab.js" ></script>

<script type="text/javascript">
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
     $('#formation').change(function () {
         id= $('#formation').val() ;
         $.ajax({
                                type: 'get',
                                url: 'info_formation.php',
                                data: { id: id },
                                success: function(value) {
                                   var data = value.split(",");
                                    $("#nom").val(data[0]);
                                    
                                    $("#nbr_c").val(data[5]);
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
     
    
function ordinalsAr(num, isFeminine=false) {
num %= 100;                  // only handle the lowest 2 digits (1-99) ignore others
let    the = "ال",           // set this to "" if you don't want the output prefixed with letters "ال"
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
// *=======================================================


//=======================================
//             Test Cases
//=======================================
// List the ordinal numbers from 1 to 99
// in both Masculine and Feminine genders
//=======================================
for (let i=1; i<100; i++) {
console.log(i,"M:  "+ordinalsAr(i),
              "F:  "+ordinalsAr(i,true) );
}

     
  </script>

</body>
</html>



