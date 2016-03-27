<?php
$im = imagecreatefrompng('images/instalacja.png');

$blue = ImageColorAllocate($im, 0x33, 0x00, 0xff);
$build = ImageColorAllocate($im, 0xff, 0x7f, 0x7f);

if(!session_id()) session_start();

include("global.php");

$To = $_SESSION['To'];
$Um = $_SESSION['Um'];
$Fzm = $_SESSION['Fzm'];
$Tzm = $_SESSION['Tzm'];
$Tpm = $_SESSION['Tpm'];
$Fcomax = $_SESSION['Fcomax'];
$Tzco = $_SESSION['Tzco'];
$Tpco = $_SESSION['Tpco'];
$bud_tab = $_SESSION['bud_tab'];
$Ub_tab = $_SESSION['Ub_tab'];
$Fcob_tab = $_SESSION['Fcob_tab'];
$Tzco_tab = $_SESSION['Tzco_tab'];
$Th_tab = $_SESSION['Th_tab'];
$Tr_tab = $_SESSION['Tr_tab'];
$Tpcob_tab = $_SESSION['Tpcob_tab'];
$To_tab = $_SESSION['To_tab'];

ImageString($im, 5, 20, 45, "To:".$To.chr(176)."C", $blue);
ImageString($im, 5, 85, 75, "Um:".$Um, $blue);
//ImageString($im, 5, 100, 130, "Fzm:".$Fzm, $blue);
ImageString($im, 5, 100, 130, "Tzm:".$Tzm.chr(176)."C", $blue);
ImageString($im, 5, 100, 195, "Tpm:".$Tpm.chr(176)."C", $blue);
ImageString($im, 5, 220, 70, $Fcomax, $blue);
ImageString($im, 5, 220, 105, "Tzco:".$Tzco.chr(176)."C", $blue);
ImageString($im, 5, 220, 180, "Tpco:".$Tpco.chr(176)."C", $blue);

for ($i=0; $i<3; $i++) {
	ImageString($im, 5, 410, 25+$i*245, $bud_tab[$i], $build);
	//ImageString($im, 5, 350, 10+$i*245, $Ub_tab[$i], $blue);
	ImageString($im, 5, 400, 65+$i*245, $Fcob_tab[$i], $blue);
	ImageString($im, 5, 400, 80+$i*245, $Tzco_tab[$i].chr(176)."C", $blue);
	//ImageString($im, 5, 440, 115+$i*245, $Th_tab[$i].chr(176)."C", $blue);
	ImageString($im, 5, 440, 135+$i*245, $Tr_tab[$i].chr(176)."C", $blue);
	ImageString($im, 5, 410, 200+$i*245, $Tpcob_tab[$i].chr(176)."C", $blue);
	ImageString($im, 5, 400, 235+$i*245, $To_tab[$i].chr(176)."C", $blue);
}


header('Content-Type: image/png');
imagepng($im);

?>