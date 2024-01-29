<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/style_prime.css" rel="stylesheet" type="text/css">
    <title> Реєстр дисциплін ЄКТС </title>
</head>

<body>

<div class="wrapper">

    <div align="center" id="banner"> <img src="cadimage/logo_ukr.png" alt="Banner NUOMA" style="width:651px;height:71px;"> </div>

    <div class="columns">
        <br>
        <div class="enter">
            <a href="includes/logout.php">Вийти</a>
        </div>

        <div class="dropdown">
            <a href="includes/Structure%20ECTS.pdf" target="_blank">Інформація о структурі освітніх компонентів</a>
        </div>

        <br>

    </div>

    <h2 align="center">Ви авторизувалися як відповідальний за ЄКТС пакет. Ви можете верифікувати, виправляти чи видаляти записи створені іншими користувачами  </h2>

    <br>
    <br>
    <form name="search" method="post" action="search.php">
        <input type="search" name="query" placeholder="Код чи назва дисципліни">
        <button type="submit">Пошук</button>
    </form>

    <br>
    <br>


    <div align="center">
        <table>
            <tr>
                <th>Код</th>
                <th>Назва освітнього компонента</th>
                <th>ОПП</th>
                <th>Обсяг у кредитах ЄКТС</th>
                <th>За рівнєм освіти</th>
                <th>Редагування</th>
                <th>Видалення</th>
                <th>Статус</th>
                <th>Верифікація</th>
            </tr>

            <?php
            $au=21;
            require_once("includes/connection.php");
            $q = "SELECT Name_of_disc, Opp, Code, Credits, Program, Verified
                  	FROM disciplines
                   	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program, Verified
                  	FROM disciplines_meh
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program, Verified
                  	FROM disciplines_avt
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program, Verified
                  	FROM disciplines_azov
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program, Verified
                  	FROM disciplines_colmar
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program, Verified
                  	FROM disciplines_coltr
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program, Verified
                  	FROM disciplines_dun
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program, Verified
                  	FROM disciplines_mdzh
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program, Verified
                  	FROM disciplines_neop
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program, Verified
                  	FROM disciplines_voen";

            $result = mysqli_query($link, $q);
            $result=mysqli_fetch_all($result);

            foreach ($result as $result){
                ?>
                <tr>
                    <td><b> <?= $result[2] ?></b></td>
                    <td><a href="Details_prime.php?id=<?= $result[2] ?>&aus=21"><?= $result[0] ?> </a></td>
                    <td><?= $result[1] ?> </td>
                    <td><?= $result[3] ?> </td>
                    <td><?= $result[4] ?> </td>
                    <td><a href="authorised/update_prime.php?code=<?= $result[2] ?>">Редагувати</a></td>

                    <td><a style="color: crimson;" href="delprime_ver.php?code=<?= $result[2] ?>">Видалити</a></td>
                    <?php
                    if($result[5]==1){
                        echo'<td><p style="text-align: center;"><b>Затверджено<br>гарантом</b></p></td>
                             <td> </td>';
                    }
                    else{
                        echo '<td><p style="color: #a55203; text-align: center;"><b>Не<br>верифіковано!</b></p></td>
                              <td><a href="preverif.php?code=' .$result[2]. '">Затвердити</a></td>';
                    }

                    ?>
                </tr>
                <?php
            }

            //mysqli_free_result($result);
            mysqli_close($link);
            ?>
        </table>
    </div>


    <div class="rasporka"></div>
</div>

<?php require_once("includes/ind_foot.php") ?>

</body>
</html>
