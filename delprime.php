<?php

$au=21;
require_once("includes/connection.php");

$code=$_GET['code'];

//print_r($_GET);

$i = 0;
$Disc=[];
$q="SELECT * FROM `disciplines` WHERE `disciplines`.`Code` = '$code'";

$result = mysqli_query($link, $q);
$Disc=mysqli_fetch_assoc($result);

//Выражение (expr1) ? (expr2) : (expr3) интерпретируется как expr2, если expr1 имеет значение true, или как expr3, если expr1 имеет значение false.
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
        $q = "DELETE FROM `disciplines` WHERE `disciplines`.`Code` = '$code'";
        break;
    case 1:
        $q = "DELETE FROM `disciplines_avt` WHERE `disciplines_avt`.`Code` = '$code'";
        break;
    case 2:
        $q = "DELETE FROM `disciplines_azov` WHERE `disciplines_azov`.`Code` = '$code'";
        break;
    case 3:
        $q = "DELETE FROM `disciplines_colmar` WHERE `disciplines_colmar`.`Code` = '$code'";
        break;
    case 4:
        $q = "DELETE FROM `disciplines_coltr` WHERE `disciplines_coltr`.`Code` = '$code'";
        break;
    case 5:
        $q = "DELETE FROM `disciplines_dun` WHERE `disciplines_dun`.`Code` = '$code'";
        break;
    case 6:
        $q = "DELETE FROM `disciplines_mdzh` WHERE `disciplines_mdzh`.`Code` = '$code'";
        break;
    case 7:
        $q = "DELETE FROM `disciplines_meh` WHERE `disciplines_meh`.`Code` = '$code'";
        break;
    case 8:
        $q = "DELETE FROM `disciplines_neop` WHERE `disciplines_neop`.`Code` = '$code'";
        break;
    case 9:
        $q = "DELETE FROM `disciplines_voen` WHERE `disciplines_voen`.`Code` = '$code'";
        break;
}


mysqli_query($link, $q);
mysqli_close($link);

header('Location: indexprime.php');
//print_r($q);
//print_r($id);
