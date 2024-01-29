<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="../../css/style_auth.css" rel="stylesheet" type="text/css">
    <title> Реєстр дисциплін ЄКТС </title>
</head>

<body>

<div class="wrapper">

    <div align="center" id="banner"> <img src="../../cadimage/logo_ukr.png" alt="Banner NUOMA" style="width:651px;height:71px;"> </div>

    <div class="columns">
        <br>
        <div class="enter">
            <a href="../../includes/logout.php">Вийти</a>
        </div>

        <div class="dropdown">
            <a href="../../includes/Structure%20ECTS.pdf" target="_blank">Інформація о структурі освітніх компонентів</a>
        </div>

        <br>

    </div>

    <h2 align="center">На цієї сторінці авторизований користувач може оглядати, редагувати чи добавляти інформацію про освітні компоненти які викладаються <span class="colortext">ННІ автоматики та електромеханіки</span></h2>

    <br>
    <br>
    <form name="search" method="post" action="searchavt.php">
        <input type="search" name="query" placeholder="Код чи назва дисципліни">
        <button type="submit">Пошук</button>
    </form>

    <br>
    <br>
    <div align="center">
        <table>

            <?php
            require ("../../includes/ind_auth1.php");
            $au=5;
            require_once("../../includes/connection.php");
            //print_r($link);
            $q = "SELECT Name_of_disc, Code, Credits, Program, Opp, Verified
                  	FROM disciplines_avt";

            $result = mysqli_query($link, $q);
            $result=mysqli_fetch_all($result);

            foreach ($result as $result){
            ?>
                <tr>
							<td><b> <?= $result[1] ?></b></td>
							<td><a href="../../Details.php?id=<?= $result[1] ?>&aus=10"><?= $result[0] ?> </a></td>
                            <td><?= $result[4] ?> </td>
							<td><?= $result[2] ?> </td>
							<td><?= $result[3] ?> </td>
							<td><a href="updateavt.php?code=<?= $result[1] ?>">Редагувати</a></td>
							<td><a style="color: crimson; text-align: center;" href="delavt_ver.php?code=<?= $result[1] ?>">Видалити</a></td>
                            <?php
                                require ("../../includes/ind_auth2.php");
                            ?>
				</tr>
            <?php
            }

            //mysqli_free_result($result);
            mysqli_close($link);
            ?>
        </table>

        <div align="center">
            <a href="createavt.php" class="btn2 third2">Додати<br>нову дисципліну</a>
        </div>

    </div>


    <div class="rasporka"></div>
</div>



<div class="footer">
    <div class="footertext">
        <p> <b>КОНТАКТНІ ДАНІ</b></p>
        <p><b>Адреса:</b></p>
        <p>Україна, 65029, м. Одеса, вул. Дідріхсона, 8</p>
        <p><b>Тел/факс:</b></p>
        <p>(048) 793-16-72 <br>
            (048) 793-16-94 - факс</p>

    </div>
</div>

</body>
</html>
