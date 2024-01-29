<?php

$au=21;
require_once("includes/connection.php");

$code=$_GET['code'];

//print_r($_POST);

$i = 0;
$Disc=[];
$q="SELECT * FROM `disciplines` WHERE `disciplines`.`Code` = '$code'";

$result = mysqli_query($link, $q);
$Disc=mysqli_fetch_assoc($result);
//print_r($Disc);
if(count(is_countable($Disc)?$Disc:[]) == 0) {
    $q="SELECT * FROM `disciplines_meh` WHERE `disciplines_meh`.`Code` = '$code'";
    $result = mysqli_query($link, $q);
    $Disc=mysqli_fetch_assoc($result);
    if(count($Disc) > 0) {$i = 7;}
}
//print_r($Disc);
if(count($Disc) == 0) {
    $q="SELECT * FROM `disciplines_mdzh` WHERE `disciplines_mdzh`.`Code` = '$code'";
    $result = mysqli_query($link, $q);
    $Disc=mysqli_fetch_assoc($result);
    if(count($Disc) > 0) {$i = 6;}
}

if(count($Disc) == 0) {
    $q="SELECT * FROM `disciplines_avt` WHERE `disciplines_avt`.`Code` = '$code'";
    $result = mysqli_query($link, $q);
    $Disc=mysqli_fetch_assoc($result);
    if(count($Disc) > 0) {$i = 1;}
}

if(count($Disc) == 0) {
    $q="SELECT * FROM `disciplines_voen` WHERE `disciplines_voen`.`Code` = '$code'";
    $result = mysqli_query($link, $q);
    $Disc=mysqli_fetch_assoc($result);
    if(count($Disc) > 0) {$i = 9;}
}

if(count($Disc) == 0) {
    $q="SELECT * FROM `disciplines_azov` WHERE `disciplines_azov`.`Code` = '$code'";
    $result = mysqli_query($link, $q);
    $Disc=mysqli_fetch_assoc($result);
    if(count($Disc) > 0) {$i = 2;}
}

if(count($Disc) == 0) {
    $q="SELECT * FROM `disciplines_colmar` WHERE `disciplines_colmar`.`Code` = '$code'";
    $result = mysqli_query($link, $q);
    $Disc=mysqli_fetch_assoc($result);
    if(count($Disc) > 0) {$i = 3;}
}

if(count($Disc) == 0) {
    $q="SELECT * FROM `disciplines_coltr` WHERE `disciplines_coltr`.`Code` = '$code'";
    $result = mysqli_query($link, $q);
    $Disc=mysqli_fetch_assoc($result);
    if(count($Disc) > 0) {$i = 4;}
}

if(count($Disc) == 0) {
    $q="SELECT * FROM `disciplines_dun` WHERE `disciplines_dun`.`Code` = '$code'";
    $result = mysqli_query($link, $q);
    $Disc=mysqli_fetch_assoc($result);
    if(count($Disc) > 0) {$i = 5;}
}

if(count($Disc) == 0) {
    $q="SELECT * FROM `disciplines_neop` WHERE `disciplines_neop`.`Code` = '$code'";
    $result = mysqli_query($link, $q);
    $Disc=mysqli_fetch_assoc($result);
    if(count($Disc) > 0) {$i = 8;}
}

//print_r($i);

switch ($i) {
    case 0:
        $q = "UPDATE `disciplines` SET `Verified` = 1 WHERE `disciplines`.`Code` = '$code'";
        $q_eng = "UPDATE `disciplines_eng` SET `Verified` = 1 WHERE `disciplines_eng`.`Code` = '$code'";
        break;
    case 1:
        $q = "UPDATE `disciplines_avt` SET `Verified` = 1 WHERE `disciplines_avt`.`Code` = '$code'";
        $q_eng = "UPDATE `disciplines_avt_eng` SET `Verified` = 1 WHERE `disciplines_avt_eng`.`Code` = '$code'";
        break;
    case 2:
        $q = "UPDATE `disciplines_azov` SET `Verified` = 1 WHERE `disciplines_azov`.`Code` = '$code'";
        $q_eng = "UPDATE `disciplines_azov_eng` SET `Verified` = 1 WHERE `disciplines_azov_eng`.`Code` = '$code'";
        break;
    case 3:
        $q = "UPDATE `disciplines_colmar` SET `Verified` = 1 WHERE `disciplines_colmar`.`Code` = '$code'";
        $q_eng = "UPDATE `disciplines_colmar_eng` SET `Verified` = 1 WHERE `disciplines_colmar_eng`.`Code` = '$code'";
        break;
    case 4:
        $q = "UPDATE `disciplines_coltr` SET `Verified` = 1 WHERE `disciplines_coltr`.`Code` = '$code'";
        $q_eng = "UPDATE `disciplines_coltr_eng` SET `Verified` = 1 WHERE `disciplines_coltr_eng`.`Code` = '$code'";
        break;
    case 5:
        $q = "UPDATE `disciplines_dun` SET `Verified` = 1 WHERE `disciplines_dun`.`Code` = '$code'";
        $q_eng = "UPDATE `disciplines_dun_eng` SET `Verified` = 1 WHERE `disciplines_dun_eng`.`Code` = '$code'";
        break;
    case 6:
        $q = "UPDATE `disciplines_mdzh` SET `Verified` = 1 WHERE `disciplines_mdzh`.`Code` = '$code'";
        $q_eng = "UPDATE `disciplines_mdzh_eng` SET `Verified` = 1 WHERE `disciplines_mdzh_eng`.`Code` = '$code'";
        break;
    case 7:
        $q = "UPDATE `disciplines_meh` SET `Verified` = 1 WHERE `disciplines_meh`.`Code` = '$code'";
        $q_eng = "UPDATE `disciplines_meh_eng` SET `Verified` = 1 WHERE `disciplines_meh_eng`.`Code` = '$code'";
        break;
    case 8:
        $q = "UPDATE `disciplines_neop` SET `Verified` = 1 WHERE `disciplines_neop`.`Code` = '$code'";
        $q_eng = "UPDATE `disciplines_neop_eng` SET `Verified` = 1 WHERE `disciplines_neop_eng`.`Code` = '$code'";
        break;
    case 9:
        $q = "UPDATE `disciplines_voen` SET `Verified` = 1 WHERE `disciplines_voen`.`Code` = '$code'";
        $q_eng = "UPDATE `disciplines_voen_eng` SET `Verified` = 1 WHERE `disciplines_voen_eng`.`Code` = '$code'";
        break;
}

//print_r($q);
//print_r($q_eng);


mysqli_query($link,$q);
//print_r(mysqli_query($link,$q));

mysqli_query($link,$q_eng);
//print_r(mysqli_query($link,$q));
//print_r($id1);
mysqli_close($link);

header('Location: indexprime.php');
?>
