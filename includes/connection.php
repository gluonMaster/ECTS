<?php

if ($au==1) {
    require("../constants/constant_noa.php");
}
elseif ($au==2) {
    require("../../constants/constant_meh.php");
}
elseif ($au==3) {
    require("../constants/constant_nav.php");
}
elseif ($au==4) {
    require("../constants/constant_r.php");
}
elseif ($au==5) {
    require("../../constants/constant_avt.php");
}
elseif ($au==6) {
    require("../../constants/constant_azov.php");
}
elseif ($au==7) {
    require("../../constants/constant_colmar.php");
}
elseif ($au==8) {
    require("../../constants/constant_coltr.php");
}
elseif ($au==9) {
    require("../../constants/constant_dun.php");
}
elseif ($au==10) {
    require("../../constants/constant_mdzh.php");
}
elseif ($au==11) {
    require("../../constants/constant_neop.php");
}
elseif ($au==12) {
    require("../../constants/constant_voen.php");
}
elseif ($au==21) {
    require("constants/constant_oper.php");
}
elseif ($au==22) {
    require("../constants/constant_oper.php");
}
else {
    require("constants/constant_noa.php");
}

$au=0;

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

mysqli_query ($link, "SET CHARACTER SET 'utf8'");
mysqli_query ($link, "set character_set_client='utf8'");
mysqli_query ($link, "set character_set_results='utf8'");
mysqli_query ($link, "set collation_connection='utf8_general_ci'");
mysqli_query ($link, "SET NAMES utf8");

if(!$link) {
    die('Error connect to database!');
}

//var_dump($link);
?>