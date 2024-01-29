<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="../css/style_en.css" rel="stylesheet" type="text/css">
    <title> ECTS NU"OMA" </title>
</head>


<body>

<div class="wrapper">

    <?php require_once("../includes/ind1_en.php") ?>

    <div align="center">
        <table>
            <tr>
                <th>Code</th>
                <th>Course unit</th>
                <th>Educational program</th>
                <th>Level</th>
                <th>No. Credits ECTS</th>

            </tr>

            <?php

            $au=1;
            require_once("../includes/connection.php");

            $q = "SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_eng
                  	WHERE Opp='Automated Control of Ships Power Plants' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_meh_eng
                  	WHERE Opp='Automated Control of Ships Power Plants' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_avt_eng
                  	WHERE Opp='Automated Control of Ships Power Plants' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_mdzh_eng
                  	WHERE Opp='Automated Control of Ships Power Plants' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_voen_eng
                  	WHERE Opp='Automated Control of Ships Power Plants' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_neop_eng
                  	WHERE Opp='Automated Control of Ships Power Plants' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_colmar_eng
                  	WHERE Opp='Automated Control of Ships Power Plants' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_coltr_eng
                  	WHERE Opp='Automated Control of Ships Power Plants' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_azov_eng
                  	WHERE Opp='Automated Control of Ships Power Plants' AND Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_dun_eng
                  	WHERE Opp='Automated Control of Ships Power Plants' AND Verified='1'
                  	";

            $result = mysqli_query($link, $q);
            $result=mysqli_fetch_all($result);

            foreach ($result as $result){
                echo '	<tr>
							<td><b>' .$result[2]. '</b></td>
							<td><a href="Details_en.php?id=' .$result[2]. '&aus=6">' .$result[0]. '</a></td>
							<!--<td>' .$result[0]. '</td>-->
							<td><center>' .$result[1]. '</center></td>
							<td><center>' .$result[4]. '</center></td>
							<td><center>' .$result[3]. '</center></td>
													
						</tr>';	}

            //mysqli_free_result($result);
            mysqli_close($link);
            ?>
        </table>
    </div>


    <div class="rasporka"></div>
</div>

<?php require_once("../includes/ind_foot_en.php") ?>

</body>
</html>
