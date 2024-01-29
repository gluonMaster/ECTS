<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="../../css/style_auth.css" rel="stylesheet" type="text/css">
    <title> Пошук дисциплін ЄКТС </title>
</head>

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
                $link = mysqli_connect('localhost', 'operatorneop', 'neoP_operator', 'ekts1');

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
                  FROM disciplines_neop WHERE Opp LIKE '%$query%' OR Code LIKE '%$query%' 
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
						<td><a href="../../Details.php?id=' .$result[2]. '&aus=16">Детальніше</a></td>
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
        <a href="ind_authneop.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>
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

