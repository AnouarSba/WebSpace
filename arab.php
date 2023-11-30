<div dir="rtl">
	<form action="edit_info.php" method="get">
                     <label for="">المبلغ </label>

       <input type="number" onkeyup="conv2()" name="s" id="s">
       <input type="text" onkeyup="conv2()" name="m" id="m">
        <label for="">بالعربي</label>

       <input type="text" name="ar" onkeyup="conv2()" id="ar" >
                    
                    <button class="btn btn-primary" type="submit"  > اضافة</button> 
                  </form>
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
</script>