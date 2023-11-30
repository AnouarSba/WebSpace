<?php


//require_once(dirname(__FILE__)"].'/TCPDF-6.3.2/tcpdf_config.php');


//require_once('TCPDF-6.3.2/tcpdf.php');
require_once('tcpdf/tcpdf.php');

class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		$this->setRTL(true);
		// Logo
		$image_file1 = 'assets/image/log.png';
		//$image_file = 'assets/image/quran-logo.gif';

		//$this->Image($image_file, 150, 10, 30, '30', 'gif', '', 'L', false, 300, '', false, false, 0, false, false, false);
    $this->Image($image_file1, 40, 20, 20, 20, 'png', 'http://etus-sba.dz/', '', true, 150, '', false, false, 0, false, false, false);
    $this->Image($image_file1, 190, 20, 20, 20, 'PNG', 'http://etus-sba.dz/', '', true, 150, '', false, false, 0, false, false, false);
    
    $this->SetFont('ae_alarabiya', 'B', 18);
    $this->Cell(50, 10, '');
    $this->Cell(30,20, ' الجمهورية الجزائرية الديمقراطية الشعبية', 0, false, 'B', 0, '', 0, false, '', '');
    $this->Cell(40,40, 'وزارة النقل', 0, true, 'B', 0, '', 0, false, '', '');
    $this->SetFont('ae_alarabiya', 'B', 2);
    $this->Cell(45, 1, '');
    $this->SetFont('ae_alarabiya', 'B', 16);
    $this->Cell(32, 0, 'المؤسسة العمومية للنقل الحضري و الشبه الحضري', 0, false, 'B', 0, '', 0, true, 'C', 'C');
    $this->Cell(20, 20, 'سيدي بلعباس', 0, false, 'B', 0, '', 0, false, '', 'M');

		//$this->Image($image_file, '', '', '30');

		// Set font
		$this->SetFont('ae_alarabiya', 'B', 20);
		// Title
		//$this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
		//$this->Cell(0, 15, 'title', 0, 1, '', 0, '', 0);
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		 $this->setRTL(true);
		// Set font
		$this->SetFont('ae_alarabiya', 'I', 8);
		// Page number
	




	}
/*
 <div style="text-align: center;  font-weight: bold; font-size: 16pt;">
        الجمهورية الجزائرية الديمقراطية الشعبية

<br> وزارة النقل

<br>
المـؤسسة العمومية للنــقل الحضــري والشبه الحضري 
<br>
 سيدي بلعباس
        </div>
    </htmlpageheader>
    <htmlpagefooter name="myFooter1" style="display:none">
    </htmlpagefooter>
    <div class="row" style="padding-top:60px;direction:rtl;height:100%; font-size: 11pt;">
	*/
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// create new PDF document
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Etus-Sba');
$pdf->SetTitle('استمارة التسجيل');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);


// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language dependent data:
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'rtl';
$l['a_meta_language'] = 'ar';

// TRANSLATIONS --------------------------------------
$l['w_page'] = 'صفحة';

// set some language-dependent strings (optional)
$pdf->setLanguageArray($lg);

// ---------------------------------------------------------

// set LTR direction for english translation
$pdf->setRTL(true);
// set font
//$pdf->SetFont('bahijjannab', '', 18);

//$pdf->SetFontSize(10);

// print newline
$pdf->Ln();
// add a page
$pdf->AddPage();

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
  $htmlarabic ='';

if (isset($_GET['id'])) {
$id=$_GET['id'];
$results = $mysqli -> query("SELECT * FROM ep_demande where id=$id");
    $rows = $results->fetch_row();
      $ep_id=$rows[2];
if ($ep_id) {

$result = $mysqli -> query("SELECT * FROM entreprise where id=$ep_id");
    $ep_rows = $result->fetch_row();
if ($ep_rows) {

$sql = "SELECT * FROM client where entreprise=$id";
  
$htmlarabic .= '
<html>
<head>
<style>
    @page {
        size: auto;
        odd-header-name: html_myHeader1;
        even-header-name: html_myHeader2;
        odd-footer-name: html_myFooter1;
        even-footer-name: html_myFooter2;
    }
    @page noheader {
        odd-header-name: _blank;
        even-header-name: _blank;
        odd-footer-name: _blank;
        even-footer-name: _blank;
    }
    div.noheader {
        page-break-before: right;
        page: noheader;
    }
</style>
 
</head>

<body>

    <htmlpageheader name="myHeader1" style="display:none">
   <br>    
   <br>    
   <br>    
   <br>    
   <br>    
   <br>    
<hr> 

   ';
// Perform query
if ($result = $mysqli -> query($sql)) {
$result = $mysqli -> query($sql);
$tr=['','نقل الاشخاص','نقل البضائع'];
$l=['','1ج','2ج', 'د','ج1 - ج2'];
$tb='';
while ($row = $result->fetch_assoc()) {
                 
    if ($row["mail"] ) {
 $m=$row["mail"];
}else $m='/';            
// arabic and English content
$tb.='1';}
}
$htmlarabic .= $tb.'
<div style="padding-bottom:0px;padding-top:0px; font-size: 11pt;" > 
<hr>
تمت عملية التسجيل الالكتروني بنجاح، أنت مدعو للتقرب من مركز تكوين المؤسسة  المتواجد بالعنوان: طريق معسكر - سيدي بلعباس مرفوقا بالملف التالي:  </div>
<div style="font-size: 10pt;margin-top:-20px"> 
<ul>
  <li>03 صور شمسية حديثة.</li>
  <li>نسخة من رخصة السياقة.</li>
  <li>شهادة طبية (طب عام، طب العيون، طب الأمراض الصدرية).</li>
  <li>تصريح إقامة ساري المفعول (أثناء مدة التكوين للأجانب).</li>
  <li>مصاريف التكوين.</li>
</ul>
</div>
    </div>
</body>

</html>';
               
  $style = array(
    'border' => 2,
    'vpadding' => 'auto',
    'hpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255)
    'module_width' => 1, // width of a single module in points
    'module_height' => 1 // height of a single module in points
);
$pdf->WriteHTML($htmlarabic, true, 0, false, 0);
 $pdf->write2DBarcode('http://etus-sba.dz/WebSpace/Traitement.php?id='.$row["id"], 'QRCODE,M', 60, 220, 150, 150, $style, 'N');
$pdf->Text(160, 265, explode('-', $row["created_at"])[0].'-'.$row["id"]);
// ---------------------------------------------------------
ob_end_clean();
//Close and output PDF document
$pdf->Output('inscription_'.$row["id"].'.pdf', 'I');
}


 
  // Free result set
  $result -> free_result();
}
  $results -> free_result();
}
else                
                
// arabic and English content
echo 'No Data';

$mysqli -> close();


 
//$pdf->Output('example_052.pdf', 'D');
