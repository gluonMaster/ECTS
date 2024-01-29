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
            <div class="box"><p>Якщо Ви впевненні, що бажаєте остаточно видалити запис
                    з бази даних навчальних компонентів, то натисніть на посилання нижче.
                    <br>
                    <b>Цю дію неможливо буде відмінити!</b></p>
                    <br>
                <?php
                    $c1=$_GET['code'];
                ?>

                <h1><a href="delmeh.php?code=<?= $c1 ?>"> ВИДАЛИТИ </a></h1>
            </div>
        </div>
        <br>
        <br>
        <div class="vidm"> <a href="../../authorised/meh/ind_authmeh.php"> Відмінити видалення </a></div>
    </body>
</html>
