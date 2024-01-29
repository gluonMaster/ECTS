<?php
setcookie("Aus", $_POST['Aus'], time()+7200);
setcookie("Code", $_POST['Code'], time()+7200);
setcookie("Name", $_POST['Name'], time()+7200);
setcookie("Credits", $_POST['Credits'], time()+7200);
setcookie("Lang", $_POST['Lang'], time()+7200);
setcookie("bakmag", $_POST['bakmag'], time()+7200);
setcookie("Results", $_POST['Results'], time()+7200);
setcookie("Leclab", $_POST['Leclab'], time()+7200);
setcookie("Control", $_POST['Control'], time()+7200);
setcookie("Content", $_POST['Content'], time()+7200);
setcookie("Devices", $_POST['Devices'], time()+7200);
setcookie("Select", $_POST['Select'], time()+7200);
setcookie("Name_eng", $_POST['Name_eng'], time()+7200);
setcookie("Lang_eng", $_POST['Lang_eng'], time()+7200);
setcookie("bakmag_eng", $_POST['bakmag_eng'], time()+7200);
setcookie("Results_eng", $_POST['Results_eng'], time()+7200);
setcookie("Leclab_eng", $_POST['Leclab_eng'], time()+7200);
setcookie("Control_eng", $_POST['Control_eng'], time()+7200);
setcookie("Content_eng", $_POST['Content_eng'], time()+7200);
setcookie("Devices_eng", $_POST['Devices_eng'], time()+7200);
setcookie("Select_eng", $_POST['Select_eng'], time()+7200);

header('Location: Preview.php');

