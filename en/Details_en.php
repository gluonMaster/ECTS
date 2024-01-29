<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title> Disciplines registry </title>
</head>

<style>
	html, body {
		height: 100%;
		width: 100%;
	}
	body {
			background-image: url("../cadimage/backgr_cadets1.jpg");
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
				
	.dropbtn {
    padding: 5px;
    cursor: pointer;
}

	/* The container <div> - needed to position the dropdown content */
	.dropdown {
		position: relative;
		display: inline-block;
		float: right;
	}

	/* Dropdown Content (Hidden by Default) */
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		width: 140px;
	}

	.dropbtn
	{
	  background: url('../cadimage/ukr.png') no-repeat left center;
	  padding-left: 35px;
	  width: 90px;
	}

	.dropbtn::after {
		background: rgba(0, 0, 0, 0) url("https://cdn3.iconfinder.com/data/icons/google-material-design-icons/48/ic_keyboard_arrow_down_48px-16.png") no-repeat scroll center center;
		content: "";
		height: 16px;
		position: absolute;
		right: 0;
		top: 7px;
		width: 16px;
	}

	.dropdown-content a:first-child
	{
	  background: url('../cadimage/ukr.png') no-repeat left center;
	}

	.dropdown-content a:last-child
	{
	  background: url('../cadimage/uk.png') no-repeat left center;
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
	<div id="banner"> <center> <img src="../cadimage/logo_eng.png" alt="Disciplines regisry of NUOMA" style="width:651px;height:71px;"></center> </div>
		

	<br>   
   <center>
	<table>
		
<?php

    $au=1;
    require_once("../includes/connection.php");
    $Disc_code = $_GET['id'];
    $aus = $_GET['aus'];
	//$link = mysqli_connect('localhost', 'noauth', 'noauth', 'ekts1');
	//$Disc_code = $_GET['id'];
	
	mysqli_query ($link, "SET CHARACTER SET 'utf8'");
	mysqli_query ($link, "set character_set_client='utf8'");
	mysqli_query ($link, "set character_set_results='utf8'");
	mysqli_query ($link, "set collation_connection='utf8_general_ci'");
	mysqli_query ($link, "SET NAMES utf8");

	$q = "SELECT Code, Name_of_disc,  Credits, Leklab, Control, Result_prog, Content, Status, Language, Notes FROM disciplines_eng WHERE Code = '$Disc_code'
            UNION
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Result_prog, Content, Status, Language, Notes FROM disciplines_meh_eng WHERE Code = '$Disc_code'
            UNION
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Result_prog, Content, Status, Language, Notes FROM disciplines_avt_eng WHERE Code = '$Disc_code'
            UNION
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Result_prog, Content, Status, Language, Notes FROM disciplines_mdzh_eng WHERE Code = '$Disc_code'
            UNION
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Result_prog, Content, Status, Language, Notes FROM disciplines_voen_eng WHERE Code = '$Disc_code'
            UNION
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Result_prog, Content, Status, Language, Notes FROM disciplines_neop_eng WHERE Code = '$Disc_code'
            UNION
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Result_prog, Content, Status, Language, Notes FROM disciplines_azov_eng WHERE Code = '$Disc_code'
            UNION
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Result_prog, Content, Status, Language, Notes FROM disciplines_dun_eng WHERE Code = '$Disc_code'
            UNION
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Result_prog, Content, Status, Language, Notes FROM disciplines_colmar_eng WHERE Code = '$Disc_code'
            UNION
            SELECT Code, Name_of_disc,  Credits, Leklab, Control, Result_prog, Content, Status, Language, Notes FROM disciplines_coltr_eng WHERE Code = '$Disc_code'
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
			<td class="cap">Code</td>
			<td>' .$result['Code']. '</td>
		</tr>
		<tr>
			<td class="cap">Course unit</td>
			<td>' .$result['Name_of_disc']. '</td>
		</tr>
		<tr>
			<td class="cap">Nomber of credits ECTS</td>
			<td>' .$result['Credits']. '</td>
		</tr>		
		<tr>
			<td class="cap">Language of education</td>
			<td>' .$result['Language']. '</td>
		</tr>
		<tr>
			<td class="cap">Learning outcomes of course unit</td>
			<td>' .$result['Result_prog']. '</td>
		</tr>
		<tr>
			<td class="cap">Types of educational work</td>
			<td>' .$result['Leklab']. '</td>
		</tr>
		<tr>
			<td class="cap">Type of final control</td>
			<td>' .$result['Control']. '</td>
		</tr>
		<tr>
			<td class="cap">Content of course unit </td>
			<td>' .$result['Content']. '</td>
		</tr>

		<tr>
			<td class="cap">Equipment (if applicable)</td>
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
        if($aus==4){
             echo'<a href="indexnav_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         elseif($aus==5){
             echo'<a href="indexmeh_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         elseif($aus==6){
             echo'<a href="indexavt_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         elseif($aus==7){
             echo'<a href="indexelmeh_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         elseif($aus==8){
             echo'<a href="indexprv_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         elseif($aus==9){
             echo'<a href="indexmdzh_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         else{
             echo'<a href="index_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         ?>
     </div>

	
		<div class="rasporka"></div>
   </div>

 <?php require_once("../includes/ind_foot_en.php") ?>

</body>
</html>
