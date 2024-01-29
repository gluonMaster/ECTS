<?php

$au=9;
require_once("../../includes/connection.php");

$code=$_GET['code'];

//print_r($_GET);

$q="SELECT * FROM `disciplines_dun` WHERE `Code`='$code'";

$disc=mysqli_query($link, $q);
$disc=mysqli_fetch_assoc($disc);

$id=$disc['Discipline_id'];

$q="DELETE FROM `disciplines_dun` WHERE `disciplines_dun`.`Discipline_id` ='$id'";
mysqli_query($link, $q);
mysqli_close($link);

header('Location: ../../authorised/dun/ind_authdun.php');
//print_r($disc);
//print_r($id);