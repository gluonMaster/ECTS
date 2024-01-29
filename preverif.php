<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Видалення дисципліни!</title>
</head>

<style>
    .wrapper {
        background-color: #fd0069;
        display: table;
        width: 50%;
        margin: 100px auto 0;
        padding: 20px;
        font-size: 150%;
        border-radius: 22px;
    }
    .box {
        display: table-cell;
        text-align: center;
        vertical-align: middle;
    }

    .box a{
        color: #e0e0e0;
    }

    .vidm {
        background-color: #179773;
        text-align: center;
        width: 26%;
        margin: 0 auto;
        position: relative;
        padding: 20px;
        font-size: 150%;
        border-radius: 16px;
        min-width: 150px;
        max-width: 250px;
    }
</style>

<body>
<div class="wrapper">
    <div class="box"><p>Ви підписуєте освітній компонент. Своїм підписом Ви веріфікуєте зміст освітнього компоненту.
            <br>
            <b>Зняти підпис буде неможливо!</b></p>
        <br>
        <?php
        $c1=$_GET['code'];
        ?>

        <h1><a href="verif.php?code=<?= $c1 ?>"> Підписати </a></h1>
    </div>
</div>
<br>
<br>
<div class="vidm"> <a href="indexprime.php"> Повернутися </a></div>
</body>
</html>


