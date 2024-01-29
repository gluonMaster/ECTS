<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Реэстр дисциплін ЄКТС </title>
</head>

<style>
    html, body {
        height: 100%;
        width: 100%;
    }
    body {
        background-image: url("../../cadimage/backgr_cadets1.jpg");
        margin: 0px;
    }

    .wrapper {
        font-family: Verdana, Arial, Helvetica, sans-serif, Tahoma, FontAwesome;
        font-size: 110%;
        min-width:700px;
        min-height: 100%;
        margin-left: 18%; /* Отступ слева */
        width: 64%; /* Ширина слоя */
        background: #fff;
        padding: 20px;
        border-left: 4px solid #3088FF;
        border-right: 4px solid #3088FF;
        margin-right: 4em;
    }

    .footer{
        background-color:#808080;
        height: 200px;
        margin-top:-200px;
        color: #fff;
    }

    .footertext{
        color: #fff;
        font-family: Verdana, Arial, Helvetica, sans-serif, Tahoma, FontAwesome;
        font-size: 75%;
        min-width:700px;
        margin-left: 18%; /* Отступ слева */
        width: 64%; /* Ширина слоя */
        padding: 10px;
        text-align: center;
    }
    .rasporka {
        height: 200px;
    }


    th, td {
        padding: 10px;
    }

    th {background: #606060;
        color: #fff;}
    td {background: #b5b5b5;}

    .btn2 {
        box-sizing: border-box;
        height:60px;
        width:240px;
    <!--min-width: 200px;-->
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: transparent;
        border: 2px solid #3498db;
        border-radius: 0.6em;
        color: #3498db;
        cursor: pointer;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-align-self: center;
        -ms-flex-item-align: center;
        align-self: center;
        font-size: 1rem;
        font-weight: 700;
        line-height: 1;
        margin: 5px;
        padding: 0.6em 2.8em;
        text-decoration: none;
        font-family: 'Montserrat', sans-serif;
        font-weight: 600;
    }
    .btn2:hover, .btn2:focus {
        color: #04396C;
        outline: 0;
    }

    .third2 {
        border-color: #3498db;
        color: #fff;
        box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
        -webkit-transition: all 150ms ease-in-out;
        transition: all 150ms ease-in-out;
    }
    .third2:hover {
        box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
    }

    .dropdown-content a:first-child
    {
        background: url('../../cadimage/ukr.png') no-repeat left center;
    }

    .dropdown-content a:last-child
    {
        background: url('../../cadimage/uk.png') no-repeat left center;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 2px 0 2px 35px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #f1f1f1}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>

<body>
<div class="wrapper">

    <div id="banner"> <center> <img src="../../cadimage/logo_ukr.png" alt="Banner NUOMA" style="width:651px;height:71px;"></center> </div>

        <div class="enter">
            <a href="../../includes/logout.php">Вийти</a>
        </div>


    <br>

    <center>
        <table>
            <tr>
                <th>Назва освітньої компоненти</th>
                <th>ОПП</th>
                <th>Код</th>
                <th>Рівень навчання</th>
                <th>Кількість кредитів ЄКТС</th>
                <th> </th>
            </tr>

            <?php

            function search ($query)
            {
                $link = mysqli_connect('localhost', 'operatoravt', 'avT_operator', 'ekts1');

                mysqli_query ($link, "SET CHARACTER SET 'utf8'");
                mysqli_query ($link, "set character_set_client='utf8'");
                mysqli_query ($link, "set character_set_results='utf8'");
                mysqli_query ($link, "set collation_connection='utf8_general_ci'");
                mysqli_query ($link, "SET NAMES utf8");

                if(!$link) {
                    die('Error connect to database!');
                }


                $query = trim($query);
                //echo $query;
                $query = mysqli_real_escape_string($link, $query);
                $query = htmlspecialchars($query);

                if (!empty($query))
                {
                    if (strlen($query) < 3) {
                        $text = '<p>Слишком короткий поисковый запрос.</p>';
                    } else if (strlen($query) > 128) {
                        $text = '<p>Слишком длинный поисковый запрос.</p>';
                    } else { //echo $query;
                        $q = "SELECT Name_of_disc, Opp, Code, Program, Credits, Discipline_id
                  FROM disciplines_avt WHERE Opp LIKE '%$query%' OR Code LIKE '%$query%' 
				  OR Name_of_disc LIKE '%$query%'";

                        $result = mysqli_query($link, $q);


                        if (mysqli_affected_rows($link) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $num = mysqli_num_rows($result);

                            $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';

                            $result = mysqli_query($link, $q);
                            //while ($row = mysqli_fetch_assoc($result)) {
                            //	echo "I am here";
                            //	printf("%s (%s)\n",$row["Name_of_disc_E"],$row["Code"]);
                            //}
                            ?>
                            <pre>
                                <?php
                                $result=mysqli_fetch_all($result);
                                //var_dump($result);
                                ?>
			                </pre>
                            <?php
                            foreach ($result as $result){
                                echo '
					<tr>
						<td><b>' .$result[0]. '</b></td>
						<td><center>' .$result[1]. '</center></td>
						<td><center><b>' .$result[2]. '</b></center></td>
						<td><center>' .$result[3]. '</center></td>
						<td><center>' .$result[4]. '</center></td>
						<td><a href="../../Details.php?id=' .$result[2]. '&aus=10">Детальніше</a></td>
					</tr>';

                            }

                        } else {
                            $text = '<p>По вашему запросу ничего не найдено.</p>';
                        }
                    }
                } else {
                    $text = '<p>Задан пустой поисковый запрос.</p>';
                }

                return $text;


                mysqli_free_result($result);
                mysqli_close($link);
            }

            if (!empty($_POST['query'])) {
                $search_result = search ($_POST['query']);
                echo $search_result;
            }

            ?>
        </table>
    </center>
    <br>

    <div align="center">
        <a href="ind_authavt.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>
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

