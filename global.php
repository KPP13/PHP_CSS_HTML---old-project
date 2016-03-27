<?php
if(!session_id()) session_start();

$To = "To: ";
$Um = "Um: ";
$Fzm = "Fzm: ";
$Tzm = "Tzm: ";
$Tpm = "Tpm: ";
$Fcomax = "Fcomax: ";
$Tzco = "Tzco: ";
$Tpco = "Tpco: ";
$bud_tab = ["Budynek 1", "Budynek 2", "Budynek 3"];
$Ub_tab = ["Ub: x", "Ub: x", "Ub: x"];
$Fcob_tab = ["Fcob: x", "Fcob: x", "Fcob: x"];
$Tzco_tab = ["Tzco: x", "Tzco: x", "Tzco: x"];
$Th_tab = ["Th: x", "Th: x", "Th: x"];
$Tr_tab = ["Tr: x", "Tr: x", "Tr: x"];
$Tpcob_tab = ["Tpcob: x", "Tpcob: x", "Tpcob: x"];
$To_tab = ["To: x", "To: x", "To: x"];

if(!isset($_SESSION['To'])) {
    $_SESSION['To'] = $To;
}

if(!isset($_SESSION['Um'])) {
    $_SESSION['Um'] = $Um;
}

if(!isset($_SESSION['Fzm'])) {
    $_SESSION['Fzm'] = $Fzm;
}

if(!isset($_SESSION['Tzm'])) {
    $_SESSION['Tzm'] = $Tzm;
}

if(!isset($_SESSION['Tpm'])) {
    $_SESSION['Tpm'] = $Tpm;
}

if(!isset($_SESSION['Fcomax'])) {
    $_SESSION['Fcomax'] = $Fcomax;
}

if(!isset($_SESSION['Tzco'])) {
    $_SESSION['Tzco'] = $Tzco;
}

if(!isset($_SESSION['Tpco'])) {
    $_SESSION['Tpco'] = $Tpco;
}

if(!isset($_SESSION['bud_tab'])) {
    $_SESSION['bud_tab'] = $bud_tab;
}

if(!isset($_SESSION['Ub_tab'])) {
    $_SESSION['Ub_tab'] = $Ub_tab;
}

if(!isset($_SESSION['Fcob_tab'])) {
    $_SESSION['Fcob_tab'] = $Fcob_tab;
}

if(!isset($_SESSION['Tzco_tab'])) {
    $_SESSION['Tzco_tab'] = $Tzco_tab;
}

if(!isset($_SESSION['Th_tab'])) {
    $_SESSION['Th_tab'] = $Th_tab;
}

if(!isset($_SESSION['Tr_tab'])) {
    $_SESSION['Tr_tab'] = $Tr_tab;
}

if(!isset($_SESSION['Tpcob_tab'])) {
    $_SESSION['Tpcob_tab'] = $Tpcob_tab;
}

if(!isset($_SESSION['To_tab'])) {
    $_SESSION['To_tab'] = $To_tab;
}
?>