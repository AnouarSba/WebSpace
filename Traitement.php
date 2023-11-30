

<!DOCTYPE html>
<html  style="background-color: #eceef1" lang="en">

<?php
include 'nav.php';

?> 
 <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
  body{
    background-color: #fefefe
  }
  #main{
    display: none;
  }
  #dmnd{
    display: none;
  }
   h3 {
            font-weight: 400;
            font-size: 2em;
            text-align: center;
            color: white;
        }
        
       
        
        .inbox {
            max-width: 700px;
            margin: 50px auto;
            margin-right: 300px;
            background: white;
            border-radius: 5px;
            box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.1);
            padding-right: 50px
        }
        
        .item {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #F1F1F1;
        }
        
        .item:last-child {
            border-bottom: 0;
        }
        
        input:checked+p {
            background: #F9F9F9;
            text-decoration: line-through;
          color:red;
        }
        
        input[type="checkbox"] {
            margin: 20px;
        }
        
        p {
            margin: 0;
            padding: 20px;
            transition: background 0.2s;
            flex: 1;
            font-size: 20px;
            font-weight: 200;
            border-left: 1px solid #D1E2FF;
        }
        .nav{
  height: 50px;
}
</style>
<body onload="password()">

  <div class="row main2" id="main2" dir="rtl">
    فضاء خاص بمسؤول المركز 
  </div>
<div id="main" style="background-color: #eceef1;">
  
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main" style="background-color: #eceef1; position: relative; top:70px; height:auto">
  <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="assets/js/sweetalert.js" ></script>

 <?php include('db_connect/db.php');


if (isset($_GET['id'])) {
$id=$_GET['id'];
$c=1;
$sql= "SELECT id FROM bon where client_id=$id";
$act ="bon.php";
$h = '';
}
else if (isset($_GET['id_ce'])) {
  $id=$_GET['id_ce'];
$c=0;
$sql= "SELECT id FROM bon where ep=$id";
$act ="bon_ep.php";
$h = 'hidden';
}
else $id=0;
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
// Perform query
$result = $mysqli -> query("SELECT id,fournee,d1,d2,d3,d4 FROM dossier where client_id=$id");
    $row = $result->fetch_row();

    $y=0;
    $x=0;
    if ($row) {
      $x=1;
      if ($row[1]) {
        $y= 1;
      } 
      
    } 
$result = $mysqli -> query("SELECT * FROM client where id=$id");
    $rows = $result->fetch_row();
    $ide = $rows[6];
?>

<div class="row justify-content-md-center">
<div class="row  col-10 shadow p-3 mb-5 bg-white rounded" style="direction:rtl; padding 10%;">
    <div id="container">
            <form action="" method="POST" class=" needs-validation" >
              
              <div class="row justify-content-md-center ">
               
        <!--      https://laravel.com/docs/9.x/queries -->
             <div class="print" id="print" dir="rtl">
             <center><h1 class="" id="titre" style="color: #3d80e4" ><?php if ($y): ?>
               دفع مصاريف التكوين
             <?php else: ?>
               مراقبة الملف
             <?php endif ?></h1>
             <?php 
                if ($c) {
           echo "  <h2>السيد: ".$rows[2]." ".$rows[3]." </h2>";

                } else {
                  $result_e = $mysqli -> query("SELECT * FROM ep_demande where id=$id");
    $row_e = $result_e->fetch_row();
    $id_e = $row_e[2];
    $result_e = $mysqli -> query("SELECT * FROM entreprise where id=$id_e");
    $row_e = $result_e->fetch_row();
    $ep = $row_e[0];
           echo "  <h2>المؤسسة:  ".$row_e[1]." </h2>";
                }
                
              ?>
           </center>
             
<legend>
   <div class="inbox" dir="rtl" style="text-align: right;">
    <div class="row" id="dossier" <?php if ($y): ?>
      hidden
    <?php endif ?> >
      <div class="item">
          
            <input type="checkbox"   <?php if ($row[2]): ?>
             checked 
            <?php endif ?> onclick="check();" name="ch">
            <p>03 صور شمسية حديثة.</p>
        </div>
        <div class="item">
            <input type="checkbox"   <?php if ($row[3]): ?>
             checked 
            <?php endif ?> onclick="check();" name="ch">
            <p>نسخة من رخصة السياقة.</p>
        </div>
        <div class="item">
            <input type="checkbox"   <?php if ($row[4]): ?>
              checked
            <?php endif ?> onclick="check();" name="ch">
            <p>شهادة طبية (طب عام، طب العيون، طب الأمراض الصدرية).</p>
        </div>
        <div class="item">
            <input type="checkbox"   <?php if ($row[5]): ?>
              checked
            <?php endif ?> onclick="check();" name="ch">
            <p>تصريح إقامة ساري المفعول (أثناء مدة التكوين للأجانب).</p>
        </div>
      </form>
      <div id="dmnd">
        <center>
          <?php 
              if (!isset($_GET['ep'])) {
                $link= "bon_b.php?id=".$id;
                $txt = "طلب  وصل  البنك  ";
                $t= 'target="_blank"'; 
              } else {
                $link= "Registration_Ep_candidat.php?ep=".$ep."&id=".$id;
                $txt = "تأكيد ";
                $t = "";
              }
              
           ?>
                <button class="btn btn-primary" name="save_client" type="submit" ><a style="color: white" href=<?php echo $link; ?> <?php echo $t; ?> onclick="swtch();"><?php echo $txt; ?> </a></button>

        </center>
      </div>

    </div>
        

        <div class="item" id="pay" <?php if (!$y): ?>
      hidden
    <?php endif ?>>
                        
<?php $result_b = $mysqli -> query($sql);
    $row_b = $result_b->fetch_row(); ?>
            <div class="row" id="bon">
              
                <div class="row">
                  <div class="col-6">
 <form action=<?php echo $act; ?> method="GET" class=" needs-validation">
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                <input type="hidden" value="<?php echo $row_e[1]; ?>" name="nom_ep"> <div class=" ">
    <label for="validationCustom55">تاريخ  </label>
    <input type="date" name="date" class="form-control text-right" id="validationCustom55"  >
    <label for="validationCustom55">رقم   </label>

       <input type="number" name="b" >

  </div>
                <div class="row">
                  <div class="col-12">
                    <label for="validationCustom01">رقم وصل البنك</label> 

         
                  <input type="text" style="width: 80%" name="num_b" id="validationCustom01" class="form-control text-right" placeholder="رقم وصل البنك" required>
                  </div>
                  <div class="col-12">
                    <label for="validationCustom02">تاريخ وصل البنك </label> 

 <input type="date" style="width: 80%" name="date_b" id="validationCustom02" class="form-control text-right" placeholder="تاريخ وصل البنك " required>
                  </div>

                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="validationCustom03">نوع المصاريف</label> 
<select class="form-control text-right" name="training" id="type" onchange="shw()" required>
        <option value="" hidden>-- اختيار --</option>
        <?php if (!$row_b[0]): ?>
        <option value="1">أولية</option>
         <?php endif ?> 
        <?php if ($row_b[0]): ?>
           <option value="2">اضافية</option>           
         <?php endif ?> 
        <option value="3">كاملة</option>
      </select> 
                  </div>
                  <div class="col-12">
                    
 <label for="validationCustom04">مبلغ المصاريف</label> 

         
                  <input type="text" onkeyup="conv()" style="width: 80%" name="m" id="validationCustom04" class="form-control text-right" placeholder="مبلغ المصاريف" required>
                   <input type="text" onkeyup="conv()" style="width: 80%" name="m_ar" id="validationCustom05" class="form-control text-right" placeholder="مبلغ المصاريف" required>
                  </div>

                </div>
                
                <div class="" hidden id="fin" style="font-size: 16px">
                   <input type="checkbox" <?php echo  $h; ?> name="chx" onclick="ch2();">انتهاء صلاحية استمارة التسجيل
                </div>
 
 <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-left">
  <input type="number" id="att" name="att" hidden >
                   <button class="btn btn-primary" id="btn" name="save_client" onclick="swtch2();"type="submit" >استخراج  وصل الدفع</button>
                </div> 
              </form>

              </div>
              <div class="col-6" dir="rtl">
                <div class="row" id="contrat" hidden>
                <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
                  <form action="contrat.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                     <label for="validationCustom55">رقم   العقد </label>

       <input type="number" name="c" style="display: inline-block;"><input type="date" name="date_c" style="display: inline-block;">
       <br>
        <label for="validationCustom55">رقم   الاستمارة</label>

       <input type="number" name="a" ><input type="date" name="date_a">
                    
                    <button class="btn btn-primary" type="submit"  > استخراج الاستمارة و عقد التكوين</button> 
                  </form>
                  
                </div>   
                
                               
              </div>
              </div>
</div>
            
  
            </div>
        </div> 
       
    </div>
      

</legend>
<!-- <input type="button" value="رجوع" onclick="history.back()">
<div class="row ">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom01">اللقب</label>
    <input type="text" name="firstname" class="form-control text-right" id="validationCustom01" placeholder="اللقب"  required>
    <div class="invalid-feedback">
      يرجى تقديم اللقب
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom02">الاسم</label>
    <input type="text" name="lastname" class="form-control text-right" id="validationCustom02" placeholder="الاسم" required>
    <div class="invalid-feedback">
      يرجى تقديم الاسم
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom03">مكان الميلاد</label>
    <input type="text" name="birthplace" class="form-control text-right" id="validationCustom03" placeholder="مكان الميلاد" required>
    <div class="invalid-feedback">
      يرجى تقديم مكان الميلاد
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom04">تاريخ الميلاد</label>
    <input type="date" name="birthdate" class="form-control text-right" name="dateofbirth" placeholder="تاريخ الميلاد" id="validationCustom04" required>
    <div class="invalid-feedback">
      يرجى تقديم تاريخ الميلاد
    </div>
  </div>

</div>


<div class="row">
  
  <!- <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom05">المؤسسة المنتمي اليها</label>
    <input type="text" name="entreprise" class="form-control text-right" id="validationCustom05" placeholder="المؤسسة المنتمي اليها" required>
    <div class="invalid-feedback">
      يرجى تقديم المؤسسة المنتمي اليها
    </div>
  </div> ->

  <div class="col-sm-12 col-md-12 py-3 px-lg-5 text-right">
    <label for="validationCustom06">العنوان</label>
    <input type="text" name="address" class="form-control text-right" id="validationCustom06" placeholder="العنوان" required>
    <div class="invalid-feedback">
      يرجى تقديم العنوان
    </div>
  </div>
<div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right offset-md-6">
    <label for="validationCustom07">التكوين المرغوب فيه</label>
      <select class="form-control text-right" name="training" id="validationCustom07" onchange="change()" required>
        <option value="" hidden>-- اختيار --</option>
        <option value="1">نقل الاشخاص</option>
        <option value="2">نقل البضائع</option>
      </select>
    <div class="invalid-feedback">
      يرجى تقديم التكوين المرغوب فيه
    </div>
  </div>

</div>
<img id="barcode" 
            src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100" 
            alt="" 
            title="HELLO" 
            width="50" 
            height="50" />

<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom08">رقم الهاتف</label>
    <input type="text" name="phone" class="form-control text-right" id="validationCustom08" placeholder="رقم الهاتف" required>
    <div class="invalid-feedback">
      يرجى تقديم رقم الهاتف
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom09">البريد الالكتروني</label>
    <input type="email" name="mail" class="form-control text-right" id="validationCustom09" placeholder="name@example.com" required>
    <div class="invalid-feedback">
      يرجى تقديم البريد الالكتروني
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">

      <label for="validationCustom10">تاريخ صدور رخصة  السياقة</label>
      <input type="date" name="drivinglicensedate" class="form-control text-right" id="validationCustom10" placeholder="تاريخ صدور رخصة  السياقة" required>
      <div class="invalid-feedback">
       يرجى تقديم تاريخ صدور رخصة  السياقة
      </div>

  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom11">رقم رخصة السياقة</label>
    <input type="text" name="drivinglicense" class="form-control text-right" id="validationCustom11" placeholder="رخصة السياقة" required>
    <div class="invalid-feedback">
      يرجى تقديم رخصة السياقة
    </div>
  </div>

</div>


<div class="row">
  
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom12">بلدية صدور رخصة  السياقة</label>
     <input type="text" name="commune" id="validationCustom12" class="form-control text-right" placeholder="بلدية صدور رخصة  السياقة  " required>
 
    <div class="invalid-feedback">
      يرجى تقديم بلدية صدور رخصة  السياقة
    </div>
  </div>
  <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-right">
    <label for="validationCustom13">صنف رخصة السياقة</label>
      <select class="form-control text-right" name="drivinglicenseclass" id="validationCustom13" required>
         
      </select>
    <div class="invalid-feedback">
      يرجى تقديم صنف رخصة السياقة
    </div>
  </div>

</div>
             </div>

                
              

-->

<!--
<form action="edit_info.php" method="get">
                     <label for="">المبلغ </label>

       <input type="number" onkeyup="conv2()" name="s" id="s">
       <input type="text" onkeyup="conv2()" name="m" id="m">
        <label for="">بالعربي</label>

       <input type="text" name="ar" onkeyup="conv2()" id="ar" >
                    
                    <button class="btn btn-primary" type="submit"  > اضافة</button> 
                  </form>-->
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
</div>

<script src="assets/js/arab.js" ></script>

<script type="text/javascript">
  window.no=1;
  function conv(){
      document.getElementById("validationCustom05").value= tafqit(document.getElementById("validationCustom04").value) ;

  }
  function conv2(){
      document.getElementById("ar").value= tafqit(document.getElementById("m").value * document.getElementById("s").value) ;

  }
  function swtch(){
    document.getElementById("dossier").hidden = true;
    document.getElementById("pay").hidden = false;
        document.getElementById("titre").innerHTML = "دفع مصاريف التكوين ";

  }
  function ch2(){
if (window.no) { document.getElementById("btn").innerHTML = "استخراج  وصل الدفع وشهادة التسجيل ";
    document.getElementById("att").hidden = false;

window.no =0;} else { document.getElementById("btn").innerHTML = "استخراج  وصل الدفع ";
    document.getElementById("att").hidden = true;

window.no=1}
       

  }
  function swtch2(){
    var x = <?php echo $c; ?>;
    if (x) 
    document.getElementById("contrat").hidden = false;
  }
  function shw(){
    document.getElementById("btn").innerHTML = "استخراج  وصل الدفع ";
    var selectBox = document.getElementById("type");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
if (selectedValue==2) { document.getElementById("fin").hidden = false;} else { document.getElementById("fin").hidden = true;}   
  }
  function password() {
   

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
    else {
       document.getElementById("main").style.display = "block";
        document.getElementById("main2").style.display = "none";
    }
function setc(){
  let pwd = prompt("Please enter CF password");

if (pwd == 'EtusCF22') {
 const d = new Date();
  d.setTime(d.getTime() + (180*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = "Etus-CF =" + pwd + ";" + expires + ";path=/";
   document.getElementById("main").style.display = "block";
        document.getElementById("main2").style.display = "none";
}
else setc();
}
/*
while(!valid) {
        var password = prompt("Please enter the password");
    if(password === "Etus_Cf"){
      valid = true;

    } 
    else alert("Password incorrect");
}

*/
}

  // We select the checkboxes
        let checkboxes = document.querySelectorAll('.inbox input[type="checkbox"]');
        console.log(checkboxes);

        let lastChecked;

        function handleCheck(e) {
            // Check if they had the shift key down
            // And check that they are checking it
            let inBetween = false;
            if (e.shiftKey && this.checked) {
                // loop over every single checkbox 
                checkboxes.forEach(checkbox => {
                    if (checkbox === this || checkbox === lastChecked) {
                        inBetween = !inBetween;
                        // Starting to check them inbetween!
                    }

                    if (inBetween) {
                        checkbox.checked = true;
                    }
                });
            }
            lastChecked = this;
        }


        checkboxes.forEach(checkbox => checkbox.addEventListener('click', handleCheck));

        function makeRandomId(length) {
            var result = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

 function check() {  
  var markedCheckbox = document.getElementsByName('ch'); 
  var x=0; 
  for (var checkbox of markedCheckbox) {  
    if (checkbox.checked)  
      x++;  
  }  
  if (x==4) {
    document.getElementById("dmnd").style.display = "block";
  }
}  
  </script>

</body>
</html>




     
    