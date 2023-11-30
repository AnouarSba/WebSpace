<?php 

    use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use phpseclib\phpseclib\Net\SFTP;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
if (isset($_POST['nbr'])) {
    $nbr = $_POST['nbr'];
    $nbr_a = $_POST['nbr_a'];
    $nbr_b = $_POST['nbr_b'];
    $nbr_c = $_POST['nbr_c'];
    $nbr_d = $_POST['nbr_d'];
    $date = $_POST['date'];
    $num = $_POST['num'];
    $wilaya = $_POST['wilaya'];
$w = ['سيدي بلعباس', 'تلمسان', 'عين تموشنت', 'مستغانم', 'وهران', 'غليزان', 'النعامة'];
$mail = new PHPMailer(true);
try {
//Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    echo "string";
    $mail->isSMTP();                                          //Send using SMTP
    $mail->Host       = 'Smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'cf22sba@gmail.com';                     //SMTP username
    $mail->Password   = 'ofeotvnppfdgsepo';                            //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('DTW@CF.com', 'Mailer');
    $mail->addAddress('cf22sba@gmail.com', 'Joe User');     //Add a recipient
//    $mail->addAddress('ellen@example.com');               //Name is optional
   /* $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
*/
if (isset($_FILES['uploaded_file'])
    && $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK
) {
    $mail->addAttachment($_FILES['uploaded_file']['tmp_name'],
                         $_FILES['uploaded_file']['name']);
} 
  if (isset($_FILES['uploaded_file_list'])
    && $_FILES['uploaded_file_list']['error'] == UPLOAD_ERR_OK
) {
    $mail->addAttachment($_FILES['uploaded_file_list']['tmp_name'],
                         $_FILES['uploaded_file_list']['name']);
}   //Content
// connect to SFTP server


    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'List candidat';
    $mail->Body    = 'إلى مركز تكوين  <b>سيدي بلعباس</b><br>مديرية النقل لولاية <b>'.$w[$wilaya].'</b><br>قائمة المترشحين للحصول على شهادة الكفاءة المهنية و البيداغوجية لتعليم سياقة السيارات <br>رقم الارسال المتعلق بقائمة المترشحين: <b>'.$num.'</b><br>تاريخ الارسال المتعلق بقائمة المترشحين:  <b>'.$date.'</b><br><table dir="rtl" border="1"> 
<thead> 
<th>عدد المترشحين </th>
<th>الصنف أ </th>
<th>الصنف ب </th>
<th>الصنف ج  </th>
<th>الصنف د </th>
</thead>
<tbody> 
<tr> 
<td>'.$nbr.'</td>
<td>'.$nbr_a.'</td>
<td>'.$nbr_b.'</td>
<td>'.$nbr_c.'</td>
<td>'.$nbr_d.'</td>
</tr>
</tbody>
</table>';

   $mail->send();
        echo '<script language="javascript">';
echo 'alert("لقد تم ارسال البريد الالكتروني بنجاح"); window.location.replace("Registration_Capp.php");';

echo '</script>'; 
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>