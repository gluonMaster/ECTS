<?php

$au=8;
require_once("../../includes/connection.php");

$code=$_GET['code'];

//print_r($_GET);

$q="SELECT * FROM `disciplines_coltr` WHERE `Code`='$code'";

$disc=mysqli_query($link, $q);
$disc=mysqli_fetch_assoc($disc);

$id=$disc['Discipline_id'];

$q="DELETE FROM `disciplines_coltr` WHERE `disciplines_coltr`.`Discipline_id` ='$id'";
mysqli_query($link, $q);
mysqli_close($link);

header('Location: ../../authorised/coltr/ind_authcoltr.php');
//print_r($disc);
//print_r($id);