<?php

$au=22;
require_once("../includes/connection.php");

$id=$_POST['Id'];
$code=$_POST['Code'];
$name=$_POST['Name'];
$bakmag=$_POST['bakmag'];
$credits=$_POST['Credits'];
$lang=$_POST['Lang'];
$results=$_POST['Results'];
$leclab=$_POST['Leclab'];
$control=$_POST['Control'];
$content=$_POST['Content'];
$devices=$_POST['Devices'];
$opp=$_POST['Select'];

$id1=$_POST['Id1'];
$code1=$_POST['Code1'];
$name1=$_POST['Name1'];
$bakmag1=$_POST['bakmag_eng'];
$credits1=$_POST['Credits1'];
$lang1=$_POST['Lang1'];
$results1=$_POST['Results1'];
$leclab1=$_POST['Leclab1'];
$control1=$_POST['Control1'];
$content1=$_POST['Content1'];
$devices1=$_POST['Devices1'];
$opp1=$_POST['Select1'];

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
        $q = "UPDATE `disciplines` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices', `Program` = '$bakmag' WHERE `disciplines`.`Discipline_id` = '$id'";
        $q_eng = "UPDATE `disciplines_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1', `Program` = '$bakmag1' WHERE `disciplines_eng`.`Discipline_id` = '$id1'";
        break;
    case 1:
        $q = "UPDATE `disciplines_avt` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices', `Program` = '$bakmag' WHERE `disciplines_avt`.`Discipline_id` = '$id'";
        $q_eng = "UPDATE `disciplines_avt_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1', `Program` = '$bakmag1' WHERE `disciplines_avt_eng`.`Discipline_id` = '$id1'";
        break;
    case 2:
        $q = "UPDATE `disciplines_azov` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices', `Program` = '$bakmag' WHERE `disciplines_azov`.`Discipline_id` = '$id'";
        $q_eng = "UPDATE `disciplines_azov_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1', `Program` = '$bakmag1' WHERE `disciplines_azov_eng`.`Discipline_id` = '$id1'";
        break;
    case 3:
        $q = "UPDATE `disciplines_colmar` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices', `Program` = '$bakmag' WHERE `disciplines_colmar`.`Discipline_id` = '$id'";
        $q_eng = "UPDATE `disciplines_colmar_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1', `Program` = '$bakmag1' WHERE `disciplines_colmar_eng`.`Discipline_id` = '$id1'";
        break;
    case 4:
        $q = "UPDATE `disciplines_coltr` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices', `Program` = '$bakmag' WHERE `disciplines_coltr`.`Discipline_id` = '$id'";
        $q_eng = "UPDATE `disciplines_coltr_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1', `Program` = '$bakmag1' WHERE `disciplines_coltr_eng`.`Discipline_id` = '$id1'";
        break;
    case 5:
        $q = "UPDATE `disciplines_dun` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices', `Program` = '$bakmag' WHERE `disciplines_dun`.`Discipline_id` = '$id'";
        $q_eng = "UPDATE `disciplines_dun_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1', `Program` = '$bakmag1' WHERE `disciplines_dun_eng`.`Discipline_id` = '$id1'";
        break;
    case 6:
        $q = "UPDATE `disciplines_mdzh` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices', `Program` = '$bakmag' WHERE `disciplines_mdzh`.`Discipline_id` = '$id'";
        $q_eng = "UPDATE `disciplines_mdzh_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1', `Program` = '$bakmag1' WHERE `disciplines_mdzh_eng`.`Discipline_id` = '$id1'";
        break;
    case 7:
        $q = "UPDATE `disciplines_meh` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices', `Program` = '$bakmag' WHERE `disciplines_meh`.`Discipline_id` = '$id'";
        $q_eng = "UPDATE `disciplines_meh_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1', `Program` = '$bakmag1' WHERE `disciplines_meh_eng`.`Discipline_id` = '$id1'";
        break;
    case 8:
        $q = "UPDATE `disciplines_neop` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices', `Program` = '$bakmag' WHERE `disciplines_neop`.`Discipline_id` = '$id'";
        $q_eng = "UPDATE `disciplines_neop_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1', `Program` = '$bakmag1' WHERE `disciplines_neop_eng`.`Discipline_id` = '$id1'";
        break;
    case 9:
        $q = "UPDATE `disciplines_voen` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices', `Program` = '$bakmag' WHERE `disciplines_voen`.`Discipline_id` = '$id'";
        $q_eng = "UPDATE `disciplines_voen_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1', `Program` = '$bakmag1' WHERE `disciplines_voen_eng`.`Discipline_id` = '$id1'";
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

header('Location: ../indexprime.php');
?>