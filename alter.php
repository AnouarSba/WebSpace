 
<?php 
   $servername = "65.108.43.126";
$username = "etusd549_etus";
$password = "aBfvV$%yZdu$";
$db = "etusd549_WebSpace";

           


$mysqli = new mysqli($servername, $username, $password,$db);
$id= $_GET['id'];
$result = $mysqli -> query("SELECT * FROM client where id=$id ");
    $row = $result->fetch_row();
    $nom = $row[2].' '.$row[3];
 ?>

<h2> Nom: <?php echo $nom; ?> </h2>
 <form action="contrat.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                     <label for="validationCustom55">رقم   العقد </label>

       <input type="number" name="c" >
        <label for="validationCustom55">رقم   الاستمارة</label>

       <input type="number" name="a" ><input type="date" name="date">
                    
                    <button class="btn btn-primary" type="submit"  > استخراج الاستمارة و عقد التكوين</button> 
                  </form>
                  <br>
                   <form action="edit_info.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                     <label for="validationCustom55">رقم   الوصل</label>

       <input type="number" name="b" >
                    
                    <button class="btn btn-primary" type="submit"  > استخراج الوصل</button> 
                  </form>