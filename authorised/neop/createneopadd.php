<?php

$au=11;
require_once("../../includes/connection.php");
require ("../../includes/cookietovar.php");

//print_r($_POST);



$q = "INSERT INTO `disciplines_neop` (`Discipline_id`, `Code`, `Name_of_disc`, `Credits`, `Language`, `Results_prog`, `Leklab`, `Control`, `Content`, `Notes`, `Opp`, `Program`) VALUES (NULL, '$code', '$name', '$credits', '$lang', '$results', '$leclab', '$control', '$content', '$devices', '$opp', '$bakmag')";

mysqli_query($link,$q);
//print_r(mysqli_query($link,$q));

$q="SELECT * FROM `disciplines_neop` WHERE `Code`='$code'";

$disc=mysqli_query($link, $q);
$disc=mysqli_fetch_assoc($disc);
$id=$disc['Discipline_id'];

$q = "INSERT INTO `disciplines_neop_eng` (`Discipline_id`, `Code`, `Name_of_disc`, `Credits`, `Language`, `Result_prog`, `Leklab`, `Control`, `Content`, `Notes`, `Opp`, `Program`, `id_ukr`) VALUES (NULL, '$code', '$name1', '$credits', '$lang1', '$results1', '$leclab1', '$control1', '$content1', '$devices1', '$opp1', '$bakmag1', '$id')";

mysqli_query($link,$q);
mysqli_close($link);

header('Location: ../../authorised/neop/ind_authneop.php');