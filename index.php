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
                  	WHERE Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_meh
                  	WHERE Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_avt
                  	WHERE Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_azov
                  	WHERE Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_colmar
                  	WHERE Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_coltr
                  	WHERE Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_dun
                  	WHERE Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_mdzh
                  	WHERE Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_neop
                  	WHERE Verified='1'
                  	UNION 
                  	SELECT Name_of_disc, Opp, Code, Credits, Program
                  	FROM disciplines_voen
                  	WHERE Verified='1'";

			$result = mysqli_query($link, $q);
			$result=mysqli_fetch_all($result);
			
			foreach ($result as $result){
				echo '	<tr>
							<td><b>' .$result[2]. '</b></td>
							<td><a href="Details.php?id=' .$result[2]. '&aus=0">' .$result[0]. '</a></td>
							<!-- <td>' .$result[0]. '</td> -->
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

 <?php require_once("includes/ind_foot.php") ?>

</body>
</html>