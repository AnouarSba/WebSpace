<?php
  session_start();
  include 'nav.php';
?>
<!DOCTYPE html>
<html>


<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style type="text/css">

body {
  background: #eceef1;
  font-family: 'Slabo 27px', serif;
  color: #333a45;
}

.wrapper {
  margin: 5em auto;
  max-width: 1000px;
  background-color: #fff;
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.06);
}


.cards {
  padding: 15px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
}

.card {
  margin: 15px;
  width: calc((100% / 3) - 30px);
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
@media screen and (max-width: 991px) {
  .card {
    width: calc((100% / 2) - 30px);
  }
}
@media screen and (max-width: 767px) {
  .card {
    width: 100%;
  }
}
.card:hover .card__inner {
  background-color: #1abc9c;
  -webkit-transform: scale(1.05);
          transform: scale(1.05);
}
.card__inner {
  width: 100%;
  padding: 30px;
  position: relative;
  cursor: pointer;
  background-color: #949fb0;
  color: #eceef1;
  font-size: 1.5em;
  text-transform: uppercase;
  text-align: center;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.card__inner:after {
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.card__inner .fa {
  width: 100%;
  margin-top: .25em;
}
.card__expander {
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  background-color: #333a45;
  width: 100%;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-transform: uppercase;
  color: #eceef1;
  font-size: 1.5em;
}
.card__expander .fa {
  font-size: 0.75em;
  position: absolute;
  top: 10px;
  right: 10px;
  cursor: pointer;
}
.card__expander .fa:hover {
  opacity: 0.9;
}
.card.is-collapsed .card__inner:after {
  content: "";
  opacity: 0;
}
.card.is-collapsed .card__expander {
  max-height: 0;
  min-height: 0;
  overflow: hidden;
  margin-top: 0;
  opacity: 0;
}
.card.is-expanded .card__inner {
  background-color: #1abc9c;
}
.card.is-expanded .card__inner:after {
  content: "";
  opacity: 1;
  display: block;
  height: 0;
  width: 0;
  position: absolute;
  bottom: -30px;
  left: calc(50% - 15px);
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-bottom: 15px solid #333a45;
}
.card.is-expanded .card__inner .fa:before {
  content: "\f115";
}
.card.is-expanded .card__expander {
  max-height: 1000px;
  min-height: 200px;
  overflow: visible;
  margin-top: 30px;
  opacity: 1;
}
.card.is-expanded:hover .card__inner {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.card.is-inactive .card__inner {
  pointer-events: none;
  opacity: 0.5;
}
.card.is-inactive:hover .card__inner {
  background-color: #949fb0;
  -webkit-transform: scale(1);
          transform: scale(1);
}

@media screen and (min-width: 992px) {
  .card:nth-of-type(3n+2) .card__expander {
    margin-left: calc(-100% - 30px);
  }

  .card:nth-of-type(3n+3) .card__expander {
    margin-left: calc(-200% - 60px);
  }

  .card:nth-of-type(3n+4) {
    clear: left;
  }

  .card__expander {
    width: calc(300% + 60px);
  }
}
@media screen and (min-width: 768px) and (max-width: 991px) {
  .card:nth-of-type(2n+2) .card__expander {
    margin-left: calc(-100% - 30px);
  }

  .card:nth-of-type(2n+3) {
    clear: left;
  }

  .card__expander {
    width: calc(200% + 30px);
  }
}



a {
  color: #35a785;
  text-decoration: none;
}

/* -------------------------------- 
-------------------- 

Main components 

-------------------------------- */
header {
  height: 200px;
  line-height: 200px;
  text-align: center;
  background-color: #5e6e8d;
  color: #FFF;
}
header h1 {
  font-size: 20px;
  font-size: 1.25rem;
}
/*
.cd-popup-trigger {
  display: block;
  width: 170px;
  height: 50px;
  line-height: 50px;
  margin: 3em auto;
  text-align: center;
  color: #FFF;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: bold;
  text-transform: uppercase;
  border-radius: 50em;
  background: #35a785;
  box-shadow: 0 3px 0 rgba(0, 0, 0, 0.07);
}
/* -------------------------------- 

xpopup 

-------------------------------- */
.cd-popup {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
  z-index:1;
}
.cd-popup.is-visible {
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}

.cd-popup-container {
  position: relative;
  width: 100%;
  height:100%;
  background: #FFF;
  border-radius: .25em .25em .4em .4em;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translatex(-400px);
  -moz-transform: translatex(-400px);
  -ms-transform: translatex(-400px);
  -o-transform: translatex(-400px);
  transform: translatex(-400px);
  /* Force Hardware Acceleration in WebKit */
  -webkit-backface-visibility: hidden;
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  transition-property: transform;
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  transition-duration: 0.5s;
}
.cd-popup-container p {
  padding: 0px;
  margin:0px;
}

.cd-popup-container .cd-popup-close {
  position: absolute;
  top: 8px;
  right: 8px;
  width: 30px;
  height: 30px;
}
.cd-popup-container .cd-popup-close::before, .cd-popup-container .cd-popup-close::after {
  content: '';
  position: absolute;
  top: 12px;
  width: 14px;
  height: 3px;
  background-color: #8f9cb5;
}
.cd-popup-container .cd-popup-close::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  left: 8px;
}
.cd-popup-container .cd-popup-close::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  right: 8px;
}
.is-visible .cd-popup-container {
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
}
  </style>
</head>
<body>
  <?php 
    $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

           
if (isset($_GET['id'])) {
include('db_connect/db.php');
$id=$_GET['id'];
  $sql = "INSERT INTO dossier (code, fournee, d1, d2, d3, d4, client_id) values ('$id', 1, 1, 1, 1, 1, '$id')";
   if ($conn->query($sql)=== TRUE) {
            //  echo "DATA INSERTED";
                
            }
            else{ 

             // echo "Error:".$sql."<br>".$conn->error;
            }

} else $id=0;
$ids_array = array();



$mysqli = new mysqli($servername, $username, $password,$db);
    $resulte = $mysqli -> query("SELECT id_ep FROM ep_demande ");
while($row = $resulte->fetch_assoc())
{
    $ids_array[] = $row['id_ep'];
}
$row_d = "'".implode("','",$ids_array)."'";
    $result = $mysqli -> query("SELECT * FROM entreprise where id in ($row_d) ");


        
  ?>
<div class="wrappeer">
  <div class="cards">
    <?php 
    if (isset($_GET['ep']) && $_GET['ep'] != null) {
    $ep=$_GET['ep'];
    }
    else {
          $ep=0;
          $h=1;
    }

  while ($row = $result->fetch_assoc()) {
    if ($row['id'] != $ep) {
        if($ep)  $h = 0;
  $c = "[ is-collapsed ]";
    } else{
          $h=1;
 $c= "is-expanded";}
    $ep_d ='';
    $id=$row['id'];
    $results = $mysqli -> query("SELECT * FROM ep_demande where id_ep=$id ");
  while ($rows = $results->fetch_assoc()) {
    $ide=$rows['id'];
    $id_ep=$rows['id_ep'];
    if ($rows['valid']) {
      $trait = '';
    } else {
      $trait = '   <a href="proforma.php?ep='.$id_ep.'&id='.$ide.'" class="btn btn-warning btn-sm" style="font-size:18px" ><span class="glyphicon glyphicon-file"></span> طباعة الفاتورة الشكلية</a>
      <a href="ajout.php?ept='.$ide.'" class="btn btn-success btn-sm" style="font-size:18px" ><span class="glyphicon glyphicon-confirm"></span>   تأكيد</a>
                              <a href="ajout.php?delete_ep=1&id='.$ide.'" class="btn btn-danger btn-sm" style="font-size:18px" ><span class="glyphicon glyphicon-delete"></span>حذف الطلب</a>';
    }
    
    $nb=$rows['nbr_c'];
    $tr ='';
    $results_c = $mysqli -> query("SELECT * FROM client where entreprise=$ide ");
    $cp = 0;
    $cpp = 0;
    $p='';
    $i=0;
  while ($row_c = $results_c->fetch_assoc()) {
    $i++;
    if ($row_c['firstname']) {
      $cp++;
      $name = $row_c['firstname'].' '.$row_c['lastname'];
      $result_d = $mysqli -> query("SELECT id FROM dossier where client_id=".$row_c['id']);
    $row_d = $result_d->fetch_row();
    if ($row_d) {
      $cpp++;
      $b= 'disabled';
      $link = '#';
      # code...
    } else {$b='';
      $link = 'Traitement.php?id='.$row_c['id'].'&ep' ;

     }
    } else {
      $name = 'المترشح '.$row_c['id'];
       $b= 'disabled';
      $link = '#';
    }
    $result_b = $mysqli -> query("SELECT id FROM bon where ep=".$ide);
    $row_b = $result_b->fetch_row();
    if($row_b){
      $bon=1;
      $att = '<form action="contrat_ce.php" method="get">
                     <label for="">الرقم </label>

       <input type="number"  name="a" id="a">
                    <input type="hidden" name="id" value="'.$ide.'">
                    <input type="hidden" name="id_c" value="'.$row_c['id'].'">
                    <input type="hidden" name="n" value="'.$i.'">
                  
                    <button class="btn btn-success" type="submit" style="font-size:22px" >استمارة التسجيل</button> 
                  </form>';


    } else{
      $bon=0;
      $att ='';
    }
    $tr.="<tr style='color: black'>
                  <td>" . $row_c['id'] . "</td>
                  <td>" . $name . "</td>
                  
                  <td>
                    <a href='Registration.php?id=".$row_c['id']."' style='font-size:22px' class='btn btn-primary btn-sm'>ملء البيانات </a>
                    <a href=".$link." style='font-size:22px' class='btn btn-warning btn-sm' ".$b.">مراقبة الملف</a>".$att."
                  </td>
                </tr>";

}
if ($nb == $cp && $nb!=0) {
  if ($nb == $cpp && $nb!=0) {
   
  $btn_b ='<a href="bon_b.php?ep='.$id_ep.'" class="btn btn-default btn-sm" style="font-size:22px" ><span class="glyphicon glyphicon-edit"></span>طلب  وصل  البنك </a> <a style="font-size:22px;display: inline-block;" href="Traitement.php?id_ce='.$ide.'" style="font-size:22px" class="btn btn-warning btn-sm">استخراج  وصل الدفع</a>';
  } else {
    $btn_b = '';
  }
  
      if ($bon) {
   
  $btn_c ='<form style="display: inline-block;color:black" action="contrat_ep.php" method="get">
                    <input type="hidden" name="id" value="'.$ide.'">
                    <input type="date" style="color: black" name="date">
                    <input type="text" name="c" >
                    <button style="font-size:22px;" class="btn btn-primary" type="submit"  > استخراج  اتفاقية اطار</button> 
                  </form>';
  } else {
    $btn_c = '';
  }
  $p = '<center> <a style="font-size:22px;display: inline-block;" href="pdf.php?id_ep='.$ide.'" style="font-size:22px" class="btn btn-primary btn-sm">طباعة الطلب </a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
         '.$btn_b.$btn_c.'         
                  
      </center>';
}

    $ep_d .= '<div class="card-header"  style="direction:rtl;text-align: right;" id="heading'.$row["id"].$rows["id"].'">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" style="direction:rtl;text-align: right;font-size: 28px;" data-toggle="collapse" data-target="#collapse'.$row["id"].$rows["id"].'" aria-expanded="false" aria-controls="collapse'.$row["id"].$rows["id"].'">
        الطلب  رقم: '.$rows["id"].' عدد المترشحين: '.$rows["nbr_c"].' يوم: '.$rows["created_at"].'
       </button>

      </h5>
      '.$trait.'
    </div>
    <div id="collapse'.$row["id"].$rows["id"].'" class="collapse  justify-content-center" aria-labelledby="heading'.$row["id"].$rows["id"].'" data-parent="#accordion" style="height:2000px;">
      <div class="card-body justify-content-center"  style="direction:rtl;text-align: right;height:2000px;">
      <div class="col-12 justify-content-center"  style="padding:4%">
<table id="myTable" class="table table-bordered table-striped">
            <thead style="color: blue;">
              <th>رقم المترشح</th>
              <th>الاسم و القب</th>
              
              <th></th>
            </thead>
            <tbody>
             '.$tr.'
            </tbody>
          </table>

      </div>
      '.$p.'
          </div>
    </div>';}
        if ($h) {
 echo '
    <div class=" card '.$c.'  "  style="border:none; background-color:inherit">
      <div class="card__inner [ js-expander ]">
        <span>'.$row['nom'].'</span>
        <i class="fa fa-folder-o"></i>
      </div>
      <div class="card__expander" dir="rtl" style="z-index:9; height:fit-content;padding-top:50px">
          <div id="accordion" class=" col-10 shadow p-3 mb-5 bg-white rounded" style="font-family: Aparajita;font-size: 25px;direction:rtl;width:90%;overflow:scroll;">
    
    
    '.$ep_d.'
</div>   

      </div>
      
      <!-- cd-popup -->
    </div>';
         }
}
    ?>
  </div>
</div>

      
</body>

</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="datatable/jquery.dataTables.min.js"></script>
    <script src="datatable/dataTable.bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
        //inialize datatable

    // Event listener to the two range filtering inputs to redraw on input
  /*/  $('#min, #max').keyup(function () {
        table.draw();
    });*/
        //hide alert
       
      });
  var $cell = $('.card');

//open and close card when clicked on card
$cell.find('.js-expander').click(function() {

  var $thisCell = $(this).closest('.card');

  if ($thisCell.hasClass('is-collapsed')) {
    $cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed');   
    //$cell.not($thisCell).removeClass('is-expanded').addClass('is-collapsed').addClass('is-inactive');

    $thisCell.removeClass('is-collapsed').addClass('is-expanded');
    
    if ($cell.not($thisCell).hasClass('is-inactive')) {
      //do nothing
    } else {
      //$cell.not($thisCell).addClass('is-inactive');
    }

  } else {
    $thisCell.removeClass('is-expanded').addClass('is-collapsed');
    $cell.not($thisCell).removeClass('is-inactive');
  }
});

//close card when click on cross
$cell.find('.js-collapser').click(function() {

  var $thisCell = $(this).closest('.card');

  $thisCell.removeClass('is-expanded').addClass('is-collapsed');
  $cell.not($thisCell).removeClass('is-inactive');

});

jQuery(document).ready(function($){
  //open popup
  
  //close popup
  $('.cd-popup').on('click', function(event){
    if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
      event.preventDefault();
      $(this).removeClass('is-visible');
    }
  });
  //close popup when clicking the esc keyboard button
  $(document).keyup(function(event){
      if(event.which=='27'){
        $('.cd-popup').removeClass('is-visible');
      }
    });
});
   
function openpopup(id) {
  event.preventDefault();
      $("#"+id+"").addClass('is-visible');
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
</script>