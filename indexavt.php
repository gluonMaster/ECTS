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

    <?php require_once("includes/ind1.php") ?>

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
                  	WHERE Opp='Автоматизоване управління судновими енергетичними установками' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_meh
                  	WHERE Opp='Автоматизоване управління судновими енергетичними установками' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_avt
                  	WHERE Opp='Автоматизоване управління судновими енергетичними установками' AND Verified='1' 
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_azov
                  	WHERE Opp='Автоматизоване управління судновими енергетичними установками' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_colmar
                  	WHERE Opp='Автоматизоване управління судновими енергетичними установками' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_coltr
                  	WHERE Opp='Автоматизоване управління судновими енергетичними установками' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_dun
                  	WHERE Opp='Автоматизоване управління судновими енергетичними установками' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_mdzh
                  	WHERE Opp='Автоматизоване управління судновими енергетичними установками' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_neop
                  	WHERE Opp='Автоматизоване управління судновими енергетичними установками' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_voen
                  	WHERE Opp='Автоматизоване управління судновими енергетичними установками' AND Verified='1'
                  	";

            $result = mysqli_query($link, $q);
            $result=mysqli_fetch_all($result);

            foreach ($result as $result){
                echo '	<tr>
							<td><b>' .$result[2]. '</b></td>
							<td><a href="Details.php?id=' .$result[2]. '&aus=6">' .$result[0]. '</a></td>
							<!-- <td>' .$result[0]. '</td> -->
							<td>' .$result[1]. '</td>
							<td>' .$result[4]. '</td>
							<td>' .$result[3]. '</td>
						
						</tr>';	}

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
