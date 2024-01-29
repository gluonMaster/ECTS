<?php
//print_r($_POST);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$pass = md5($pass);

//print_r($login);
//print_r($pass);

$au=1;
require_once("../includes/connection.php");

$q="SELECT * FROM `users` WHERE `Login` = '$login' AND `Password` = '$pass'";
//print_r($q);

$result = mysqli_query($link, $q);
$user=mysqli_fetch_assoc($result);

//print_r($user);
//var_dump(count($user));

if(count($user) == 0){
    echo "Такий користувач не знайдений";
    exit();
}
//else if(count($user) == 1){
//    echo "Логін чи пароль введені невірно";
//    exit();
//}

setcookie('user', $user['Name'], time() + 3600, "/");

mysqli_close($link);


if($user['user_id'] == 2) {
    header('Location: ../authorised/ind_authnav.php');
}
elseif ($user['user_id'] == 1) {
    header('Location: ../authorised/meh/ind_authmeh.php');
}
elseif ($user['user_id'] == 3) {
    header('Location: ../authorised/voen/ind_authvoen.php');
}
elseif ($user['user_id'] == 4) {
    header('Location: ../authorised/avt/ind_authavt.php');
}
elseif ($user['user_id'] == 5) {
    header('Location: ../authorised/mdzh/ind_authmdzh.php');
}
elseif ($user['user_id'] == 6) {
    header('Location: ../authorised/coltr/ind_authcoltr.php');
}
elseif ($user['user_id'] == 7) {
    header('Location: ../authorised/colmar/ind_authcolmar.php');
}
elseif ($user['user_id'] == 8) {
    header('Location: ../authorised/neop/ind_authneop.php');
}
elseif ($user['user_id'] == 9) {
    header('Location: ../authorised/dun/ind_authdun.php');
}
elseif ($user['user_id'] == 10) {
    header('Location: ../authorised/azov/ind_authazov.php');
}
elseif ($user['user_id'] == 11) {
    header('Location: ../indexprime.php');
}
