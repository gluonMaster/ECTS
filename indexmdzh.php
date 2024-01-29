<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title> Реєстр дисциплін ЄКТС </title>
</head>

<body>

<div class="wrapper">

    <div id="banner"> <center> <img src="cadimage/logo_ukr.png" alt="Banner NUOMA" style="width:651px;height:71px;"></center> </div>

    <div class="columns">
        <div class="enter">
            <a href="auth.php">Авторизуватися</a>
        </div>

        <div class="dropdown">
            <div class="dropbtn">Ukr</div>
            <div class="dropdown-content">
                <a href="index.php">Ukr</a>
                <a href="en/index_en.php">Eng</a>
            </div>
        </div>
        <br>
    </div>


    <h2 align="center">Шановні відвідувачи сайту, для пошуку інформації з дисципліни скористуйтеся формою пошуку нижче</h2>

    <br>
    <br>
    <form name="search" method="post" action="search.php">
        <input type="search" name="query" placeholder="Код чи назва дисципліни">
        <button type="submit">Пошук</button>
    </form>

    <br>
    <br>

    <div class="filter">
        <details>
            <summary>Показати освітні компонети за освітньо-професійною програмою підготовки</summary>
            <div>
                <ul>
                    <li><b style="font-size: 0.9375rem;"><a href="indexnav.php">Навігація і управління морськими суднами</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexmeh.php">Управління судновими технічними системами і комплексами</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexelmeh.php">Експлуатація суднового електрообладнання і засобів автоматики</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexavt.php">Автоматизоване управління судновими енергетичними установками</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexmdzh.php">Менеджмент в галузі морського та річкового транспорту</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexprv.php">Право</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="index.php">Всі програми підготовки</a></b></li>
                </ul>
            </div>
        </details>
    </div>

    <div align="center">
        <table>
            <tr>
                <th>Код</th>
                <th>Назва освітнього компонента</th>
                <th>ОПП</th>
                <th>За рівнєм освіти</th>
                <th>Обсяг у кредитах ЄКТС</th>
            </tr>

            <?php
            $au=0;
            require_once("includes/connection.php");
            $q = "SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines
                  	WHERE Opp='Менеджмент в галузі морського та річкового транспорту' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_meh
                  	WHERE Opp='Менеджмент в галузі морського та річкового транспорту' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_avt
                  	WHERE Opp='Менеджмент в галузі морського та річкового транспорту' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_azov
                  	WHERE Opp='Менеджмент в галузі морського та річкового транспорту' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_colmar
                  	WHERE Opp='Менеджмент в галузі морського та річкового транспорту' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_coltr
                  	WHERE Opp='Менеджмент в галузі морського та річкового транспорту' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_dun
                  	WHERE Opp='Менеджмент в галузі морського та річкового транспорту' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_mdzh
                  	WHERE Opp='Менеджмент в галузі морського та річкового транспорту' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_neop
                  	WHERE Opp='Менеджмент в галузі морського та річкового транспорту' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_voen
                  	WHERE Opp='Менеджмент в галузі морського та річкового транспорту' AND Verified='1'
                  	";

            $result = mysqli_query($link, $q);
            $result=mysqli_fetch_all($result);

            foreach ($result as $result){
                echo '	<tr>
							<td><b>' .$result[2]. '</b></td>
							<td><a href="Details.php?id=' .$result[2]. '&aus=9">' .$result[0]. '</a></td>
							<!--<td>' .$result[0]. '</td> -->
							<td>' .$result[1]. '</td>
							<td>' .$result[4]. '</td>
							<td><center>' .$result[3]. '</center></td>
						
						</tr>';	}

            //mysqli_free_result($result);
            mysqli_close($link);
            ?>
        </table>
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
