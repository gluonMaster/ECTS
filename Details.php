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
			background-image: url("cadimage/backgr_cadets1.jpg");
			margin: 0px;
			}
		
	.wrapper {
			font-family: Verdana, Arial, Helvetica, sans-serif, Tahoma, FontAwesome; 
			font-size: 110%;
			min-width:900px;
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
	
	.cap {background: #606060;
		color: #fff;
		font-size: 1.1em;
		font-weight: bold;
		text-align: left;
		width: 150px;}
		
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
	  background: url('cadimage/ukr.png') no-repeat left center;
	}

	.dropdown-content a:last-child
	{
	  background: url('cadimage/uk.png') no-repeat left center;
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
	<div id="banner"> <center> <img src="cadimage/logo_ukr.png" alt="Banner NUOMA" style="width:651px;height:71px;"></center> </div>
		
	<br>
   <center>
	<table>
		
<?php
    $au=0;
    require_once("includes/connection.php");
	$Disc_code = $_GET['id'];
    $aus = $_GET['aus'];
	
	mysqli_query ($link, "SET CHARACTER SET 'utf8'");
	mysqli_query ($link, "set character_set_client='utf8'");
	mysqli_query ($link, "set character_set_results='utf8'");
	mysqli_query ($link, "set collation_connection='utf8_general_ci'");
	mysqli_query ($link, "SET NAMES utf8");

	$q = "SELECT Code, Name_of_disc,  Credits, Leklab, Control, Results_prog, Content, Status, Language, Notes FROM disciplines WHERE Code = '$Disc_code'
            UNION 
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Results_prog, Content, Status, Language, Notes FROM disciplines_meh WHERE Code = '$Disc_code'
            UNION 
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Results_prog, Content, Status, Language, Notes FROM disciplines_avt WHERE Code = '$Disc_code'
            UNION 
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Results_prog, Content, Status, Language, Notes FROM disciplines_azov WHERE Code = '$Disc_code'
            UNION 
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Results_prog, Content, Status, Language, Notes FROM disciplines_dun WHERE Code = '$Disc_code'
            UNION 
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Results_prog, Content, Status, Language, Notes FROM disciplines_mdzh WHERE Code = '$Disc_code'
            UNION 
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Results_prog, Content, Status, Language, Notes FROM disciplines_voen WHERE Code = '$Disc_code'
            UNION 
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Results_prog, Content, Status, Language, Notes FROM disciplines_colmar WHERE Code = '$Disc_code'
            UNION 
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Results_prog, Content, Status, Language, Notes FROM disciplines_coltr WHERE Code = '$Disc_code'
            UNION 
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Results_prog, Content, Status, Language, Notes FROM disciplines_neop WHERE Code = '$Disc_code'
            ";
				  
	$result = mysqli_query($link, $q);			  
	

?>				
			<pre>
<?php 			
				$result=mysqli_fetch_assoc($result);
				//var_dump($result);
?>
			</pre>
<?php 
	echo '
		<tr>
			<td class="cap">Код</td>
			<td>' .$result['Code']. '</td>
		</tr>
		<tr>
			<td class="cap">Назва освітньої компоненти</td>
			<td>' .$result['Name_of_disc']. '</td>
		</tr>
		<tr>
			<td class="cap">Обсяг у кредитах ЄКТС</td>
			<td>' .$result['Credits']. '</td>
		</tr>
		<tr>
			<td class="cap">Мова викладання</td>
			<td>' .$result['Language']. '</td>
		</tr>
		<tr>
			<td class="cap">Результати навчання за освітнім компонентом</td>
			<td>' .$result['Results_prog']. '</td>
		</tr>
		<tr>
			<td class="cap">Види навчальної роботи</td>
			<td>' .$result['Leklab']. '</td>
		</tr>
		<tr>
			<td class="cap">Форма(и) контролю</td>
			<td>' .$result['Control']. '</td>
		</tr>
		<tr>
			<td class="cap">Зміст (стислий опис/перелік розділів та/або тем)</td>
			<td>' .$result['Content']. '</td>
		</tr>
		
		<tr>
			<td class="cap">Навчальне обладнання, що застосовується (за необхідності)</td>
			<td>' .$result['Notes']. '</td>
		</tr>
		';
			
				
	//mysqli_free_result($result);
	mysqli_close($link);
 



?>
	</table>
	</center>
	<br>

     <div align="center">
        <?php
            if($aus==3){
                echo'<a href="authorised/ind_authnav.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==2){
                echo'<a href="authorised/meh/ind_authmeh.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==10){
                echo'<a href="authorised/avt/ind_authavt.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==11){
                echo'<a href="authorised/azov/ind_authazov.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==12){
                echo'<a href="authorised/colmar/ind_authcolmar.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==13){
                echo'<a href="authorised/coltr/ind_authcoltr.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==14){
                echo'<a href="authorised/dun/ind_authdun.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==15){
                echo'<a href="authorised/mdzh/ind_authmdzh.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==16){
                echo'<a href="authorised/neop/ind_authneop.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==17){
                echo'<a href="authorised/voen/ind_authvoen.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==4){
                echo'<a href="indexnav.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==5){
                echo'<a href="indexmeh.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==6){
                echo'<a href="indexavt.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==7){
                echo'<a href="indexelmeh.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==8){
                echo'<a href="indexprv.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==9){
                echo'<a href="indexmdzh.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            elseif($aus==21){
                echo'<a href="indexprime.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
            else{
                echo'<a href="index.php" class="btn2 third2">Повернутися<br>до форми пошуку</a>';
            }
		?>
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
