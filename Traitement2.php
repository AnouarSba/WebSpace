

<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';

?> 
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
</style>
<body onload="password()">

  <div class="row main2" id="main2" dir="rtl">
    فضاء خاص بمسؤول المركز 
  </div>
<div id="main">
  
  <!-- ======= Testimonials Section ======= -->
  <section id="" class="main" style="top:50px; height:auto">
  <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="assets/js/sweetalert.js" ></script>

 <?php include('db_connect/db.php');


if (isset($_GET['id'])) {
$id=$_GET['id'];
echo "";
}

else $id=0;


?>

<div class="row justify-content-md-center">
<div class="row  col-10 shadow p-3 mb-5 bg-white rounded" style="direction:rtl; padding 10%;">
    <div id="container">
              
              <div class="row justify-content-md-center ">
               
        <!--      https://laravel.com/docs/9.x/queries -->
             <div class="print" id="print" dir="rtl">
             <center><h1 class="" style="color: #3d80e4">مراقبة الملف</h1></center>
<legend>
   <div class="inbox" dir="rtl" style="text-align: right;">
       

        <div class="" style="margin-right: 100px">
            <label>مصاريف التكوين.</label>
                        

            <div class="row" id="bon">
              <form action="bon.php" method="GET" class=" needs-validation">
                <input type="hidden" value="<?php echo $id; ?>" name="id">
                  <input type="text" style="width: 80%" name="num_b" id="validationCustom12" class="form-control text-right" placeholder="رقم وصل البنك" required>
 <input type="date" style="width: 80%" name="date_b" id="validationCustom12" class="form-control text-right" placeholder="تاريخ وصل البنك " required>
 <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-left">
                   <button class="btn btn-primary" name="save_client" type="submit" >استخراج  وصل الدفع</button>
                </div> 
              </form>
            
  
            </div>
        </div>
       
    </div>
</legend>
<!--
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
                
              


<div class="row" id="contrat">
                <div class="col-sm-12 col-md-6 py-3 px-lg-5 text-left">
                  <button class="btn btn-primary" name="save_client" > <a style="color: white" href="contrat.php?id=<?php echo $id; ?>">استخراج عقد التكوين</a></button> 
                </div>   
                
                               
              </div>


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
<?php
include 'footer.php';

?> 
<script type="text/javascript">
  function password() {
    var valid = false;document.getElementById("main").style.display = "block";
        document.getElementById("main2").style.display = "none";

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




     
    