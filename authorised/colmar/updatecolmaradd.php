<?php

$au=7;
require_once("../../includes/connection.php");

$id=$_POST['Id'];
$code=$_POST['Code'];
$name=$_POST['Name'];
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
$credits1=$_POST['Credits1'];
$lang1=$_POST['Lang1'];
$results1=$_POST['Results1'];
$leclab1=$_POST['Leclab1'];
$control1=$_POST['Control1'];
$content1=$_POST['Content1'];
$devices1=$_POST['Devices1'];
$opp1=$_POST['Select1'];

//print_r($_POST);



$q = "UPDATE `disciplines_colmar` SET `Name_of_disc` = '$name', `Opp` = '$opp', `Code` = '$code', `Language` = '$lang', `Leklab` = '$leclab', `Content` = '$content', `Results_prog` = '$results', `Control` = '$control', `Credits` = '$credits', `Notes` = '$devices' WHERE `disciplines_colmar`.`Discipline_id` = '$id'";
$q_eng = "UPDATE `disciplines_colmar_eng` SET `Name_of_disc` = '$name1', `Opp` = '$opp1', `Code` = '$code1', `Language` = '$lang1', `Leklab` = '$leclab1', `Content` = '$content1', `Result_prog` = '$results1', `Control` = '$control1', `Credits` = '$credits1', `Notes` = '$devices1' WHERE `disciplines_colmar_eng`.`Discipline_id` = '$id1'";

mysqli_query($link,$q);
mysqli_query($link,$q_eng);
mysqli_close($link);

header('Location: ind_authcolmar.php');