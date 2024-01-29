<?php

setcookie('user', $user['Name'], time() - 3600, "/");;
header('Location: ../index.php');