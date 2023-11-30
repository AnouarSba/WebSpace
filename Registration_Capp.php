 <link rel="stylesheet" href="./style.css">
<link href="assets/image/log.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">

  <link href="assets/css/main3.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body dir="rtl">

<?php
include 'header.php';

?> 

<style type="text/css">
	html {
  box-sizing: border-box;
  color: #202020;
}

*,
*::before,
*::after {
  box-sizing: inherit;
}

.background {
  background: #066999;
  background-image: repeating-linear-gradient(-135deg, transparent 0, transparent 9px, rgba(255, 255, 255, 0.05) 0, rgba(255, 255, 255, 0.06) 10px), repeating-linear-gradient(-135deg, transparent 0, transparent 19px, rgba(255, 255, 255, 0.07) 0, rgba(255, 255, 255, 0.08) 20px), repeating-linear-gradient(-135deg, transparent 0, transparent 29px, rgba(255, 255, 255, 0.07) 0, rgba(255, 255, 255, 0.04) 30px);
  position: fixed;
  height: 100%;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.app__form {
  background-color: #eaeaea;
  width: 100%;
  max-width: 500px;
  padding: 30px;
  border-radius: 5px;
}

.app__heading {
  font-size: 24px;
  text-align: center;
  margin-top: 0;
}

.app_input-text,.app_input-date,.app_input-number,
.app_input-textarea {
  width: 100%;
  padding: 10px;
}

.app_input-numbe {
  width: 40%;
  padding: 10px;
}

.app_input-textarea {
  height: 80px;
}

.app__label {
  display: block;
  margin-top: 10px;
  font-size: 14px;
  margin-left: 10px;
  margin-bottom: 2px;
}

.app__base64__fields.is-hidden {
  display: none;
}

.app__hidden-upload {
  position: absolute;
  z-index: -1;
  outline: 0;
}

.app__uploads {
  display: flex;
  justify-content: space-between;
}

.upload__wrapper {
  flex: 0 0 45%;
  margin: 20px 0;
  position: relative;
  overflow: hidden;
}

.app__upload-label {
  background-color: #202020;
  color: #fff;
  padding: 14px;
  width: 100%;
  display: inline-block;
  border-radius: 5px;
  font-weight: bold;
  font-size: 14px;
  text-align: center;
}
.app__upload-label:hover {
  cursor: pointer;
  opacity: 0.9;
}
.app__upload-label .fa {
  margin-right: 10px;
}

.app__submit {
  width: 100%;
  padding: 10px;
  width: 100%;
  /* margin: 0 auto 0 40px; */
  /* margin: 0 40px 0 auto; */
  /* margin: 0 auto; */
  /* background-color: transparent; */
  /* border: 1px solid #292929; */
  display: block;
  background: #1e7299;
  background: linear-gradient(to bottom, #1e7299 0%, #096b99 44%, #006699 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr="#1e7299", endColorstr="#006699",GradientType=0 );
  border: 1px solid #666;
  border-bottom: 2px solid #666;
  border-right: 2px solid #666;
  color: #fefefe;
  font-weight: bold;
}
</style>
<center><h2 style="    position: absolute;
    top: 150px;
    text-align: center;
    left: 30%;
    color: white;
    z-index: 20;
    width: 39%;">المؤسسة العمومية للنقل الحضري و الشبه الحضري  <br>
مركز التكوين  - سيدي بلعباس</h2></center>
<div class="background">

  <form class='app__form' style="position: relative;top: 200px; text-align: right;" action="send.php" method="POST" enctype="multipart/form-data" dir="rtl">
    <header>
     <h1 class="app__heading">مديرية النقل لولاية <?php 
 $wilaya = $_POST['wilaya'];
$w = ['سيدي بلعباس', 'تلمسان', 'عين تموشنت', 'مستغانم', 'وهران', 'غليزان', 'النعامة'];
echo $w[$wilaya];  ?></h1> <br> <h2 class='app__heading'>ارسال قائمة المترشحين</h2>
    </header>
    <input type="hidden" name="wilaya" value="<?php echo $_POST['wilaya'];?>">
    
    <label for="full_name" class='app__label'>
      رقم الارسال
    </label>
    <input type="text" name='num' class='app_input-text' required/>
    
    <label for="date" class='app__label'>
      تاريخ الارسال
    </label>
    <input type="date"  
name="date"           class='app_input-date' 
           required/>
    <label for="phone_number" class='app__label'>
      عدد المترشحين
    </label>
   
    <input type="number"  
name="nbr"           class='app_input-number' 
           required/>

           <div style="width: 49%; display: inline-block;">
    	 <label for="number" class='app__label'>
      عدد مترشحي الصنف أ
    </label>
    <input type="number"  
name="nbr_a"           class='app_input-number2' 
           required/>

    </div>
           <div style="width: 49%; display: inline-block;">
    	 <label for="number" class='app__label'>
      عدد مترشحي الصنف ب
    </label>
    <input type="number"  
name="nbr_b"           class='app_input-number2' 
           required/>
    </div>
            <div style="width: 49%; display: inline-block;">
    	 <label for="number" class='app__label'>
      عدد مترشحي الصنف ج
    </label>
    <input type="number"  
name="nbr_c"           class='app_input-number2' 
           required/>

    </div>
           <div style="width: 49%; display: inline-block;">
    	 <label for="number" class='app__label'>
      عدد مترشحي الصنف د
    </label>
    <input type="number"  
name="nbr_d"           class='app_input-number2' 
           required/>
    </div>
          
    
    
    <div class="app__base64__fields is-hidden ">
      <textarea name='full_name' class='js-cover-letter__textarea'> </textarea>
      <textarea name='full_name' class='js-cv__textarea'> </textarea>
    </div>
    
    <div class="app__uploads">
      <div class='upload__wrapper'>
        <input type="file"  id="cover-letter" class="app__hidden-upload" name="uploaded_file" required>

        <label for="cover-letter" class="app__upload-label">
          <i class="fa fa-upload"></i>قائمة المترشحين

        </label>
      </div>
    <div class='upload__wrapper'>
        <input type="file"  id="cv" class="app__hidden-upload" name="uploaded_file_list" required>

        <label for="cv" class="app__upload-label">
          <i class="fa fa-upload"></i>ملفات المترشحين

        </label>
      </div>
     
    </div>
    
    <button class='app__submit'>ارسال</button>
    
    
  </form>
  
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
	(function() {
  $(function() {
    var handleFileSelect, swapIcon;
    handleFileSelect = function(evt) {
      var file, files, reader;
      files = evt.target.files;
      file = files[0];
      if (files && file) {
     //   reader = new FileReader();
       // reader.trigger = this.id;
      //  reader.filename = file.name;
       /* reader.onload = function(readerEvt) {
          var binaryString;
          binaryString = readerEvt.target.result;
          if (this.trigger === "cover-letter") {
            $('.js-cover-letter__textarea').val(this.filename + ":" + btoa(binaryString));
          } else if (this.trigger === "cv") {
            $('.js-cv__textarea').val(this.filename + ":" + btoa(binaryString));
          }
          
        };
        */
        swapIcon(this.id);
        if (file.size > 1000000) {
          alert("<p>File too large. Please select a file under 2MB.</p>");
          $(this).val(null);
        } /*else if (!/\.(doc|docx|pdf)$/i.test(file.name)) {
          alert("<p>Filetype not allowed. Please use .doc, .docx, .pdf only.</p>");
          $(this).val(null);
        }*//* else {
          reader.readAsBinaryString(file);
        }*/
      }
    };
    if (window.File && window.FileReader && window.FileList && window.Blob) {
      document.getElementById('cover-letter').addEventListener('change', handleFileSelect, false);
      document.getElementById('cv').addEventListener('change', handleFileSelect, false);
    } else {
      alert('The File APIs are not fully supported in this browser.');
    }
    return swapIcon = function(id) {
      return $('label[for=' + id + ']').css({
        "background-color": "#006699"
      }).children('i.fa').removeClass('fa-upload').addClass('fa-check-square-o');
    };
  });

}).call(this);
</script>