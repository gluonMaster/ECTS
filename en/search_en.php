<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title> ECTS search </title>
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
 
 		<div id="banner"> <center> <img src="../cadimage/logo_eng.png" alt="Banner NUOMA" style="width:651px;height:71px;"></center> </div>
		

	<br>
 
   <center>
	<table>
		<tr>
			<th>Course unit</th>
			<th>Code</th>
			<th>Education level</th>
			<th>No. Credits ECTS</th>
			<th> </th>
		</tr>

<?php 

function search ($query, $pg)
{ 

	$link = mysqli_connect('localhost', 'noauth', 'noauth', 'ekts1');
	
	mysqli_query ($link, "SET CHARACTER SET 'utf8'");
	mysqli_query ($link, "set character_set_client='utf8'");
	mysqli_query ($link, "set character_set_results='utf8'");
	mysqli_query ($link, "set collation_connection='utf8_general_ci'");
	mysqli_query ($link, "SET NAMES utf8");

	if(!$link) {
		die('Error connect to database!');
	}
	//else {echo "Connect it is";}
	
	//mysqli_query($link, 'SET NAMES utf8');
	
		$query = trim($query); 
		//echo $query;
	    $query = mysqli_real_escape_string($link, $query);
		$query = htmlspecialchars($query);

    if (!empty($query)) 
    { 
        if (strlen($query) < 3) {
            $text = '<p>Search query too short.</p>';
        } else if (strlen($query) > 128) {
            $text = '<p>Search query too long.</p>';
        } else { //echo $query;
            $q = "SELECT Name_of_disc, Code, Program, Credits, Discipline_id
                  FROM disciplines_eng WHERE Name_of_disc LIKE '%$query%' OR Code LIKE '%$query%' AND Verified='1'
                  UNION 
                  SELECT Name_of_disc, Code, Program, Credits, Discipline_id
                  FROM disciplines_meh_eng WHERE Name_of_disc LIKE '%$query%' OR Code LIKE '%$query%' AND Verified='1'
                  UNION 
                  SELECT Name_of_disc, Code, Program, Credits, Discipline_id
                  FROM disciplines_avt_eng WHERE Name_of_disc LIKE '%$query%' OR Code LIKE '%$query%' AND Verified='1'
                  UNION 
                  SELECT Name_of_disc, Code, Program, Credits, Discipline_id
                  FROM disciplines_mdzh_eng WHERE Name_of_disc LIKE '%$query%' OR Code LIKE '%$query%' AND Verified='1'
                  UNION 
                  SELECT Name_of_disc, Code, Program, Credits, Discipline_id
                  FROM disciplines_voen_eng WHERE Name_of_disc LIKE '%$query%' OR Code LIKE '%$query%' AND Verified='1'
                  UNION 
                  SELECT Name_of_disc, Code, Program, Credits, Discipline_id
                  FROM disciplines_neop_eng WHERE Name_of_disc LIKE '%$query%' OR Code LIKE '%$query%' AND Verified='1'
                  UNION 
                  SELECT Name_of_disc, Code, Program, Credits, Discipline_id
                  FROM disciplines_azov_eng WHERE Name_of_disc LIKE '%$query%' OR Code LIKE '%$query%' AND Verified='1'
                  UNION 
                  SELECT Name_of_disc, Code, Program, Credits, Discipline_id
                  FROM disciplines_dun_eng WHERE Name_of_disc LIKE '%$query%' OR Code LIKE '%$query%' AND Verified='1'
                  UNION 
                  SELECT Name_of_disc, Code, Program, Credits, Discipline_id
                  FROM disciplines_colmar_eng WHERE Name_of_disc LIKE '%$query%' OR Code LIKE '%$query%' AND Verified='1'
                  UNION 
                  SELECT Name_of_disc, Code, Program, Credits, Discipline_id
                  FROM disciplines_coltr_eng WHERE Name_of_disc LIKE '%$query%' OR Code LIKE '%$query%' AND Verified='1'
                  ";

            $result = mysqli_query($link, $q);
			

            if (mysqli_affected_rows($link) > 0) { 
                $row = mysqli_fetch_assoc($result); 
                $num = mysqli_num_rows($result);

                $text = '<p>As a result of search query <b>'.$query.'</b> find: '.$num.' rows</p>';
				
				$result = mysqli_query($link, $q);
				//while ($row = mysqli_fetch_assoc($result)) {
				//	echo "I am here";
				//	printf("%s (%s)\n",$row["Name_of_disc_E"],$row["Code"]);
				//}



				$result=mysqli_fetch_all($result);
				//var_dump($result);

            foreach ($result as $result){
?>

					<tr>
						<td><b><?= $result[0] ?></b></td>
						<td><?= $result[1] ?></td>
						<td><?= $result[2] ?></td>
						<td><?= $result[3] ?></td>
<?php
					if($pg=='indexnav_en.php'){
                         echo'<td><a href="Details_en.php?id=' .$result[1]. '&aus=4">Details</a></td>
					     </tr>';
                     }
                     elseif($pg=='index_en.php'){
                         echo'<td><a href="Details_en.php?id=' .$result[1]. '&aus=0">Details</a></td>
					     </tr>';
                     }
                     elseif($pg=='indexmeh_en.php'){
                         echo'<td><a href="Details_en.php?id=' .$result[1]. '&aus=5">Details</a></td>
					     </tr>';
                     }
                     elseif($pg=='indexavt_en.php'){
                         echo'<td><a href="Details_en.php?id=' .$result[1]. '&aus=6">Details</a></td>
					     </tr>';
                     }
                     elseif($pg=='indexelmeh_en.php'){
                         echo'<td><a href="Details_en.php?id=' .$result[2]. '&aus=7">Details</a></td>
					     </tr>';
                     }
                     elseif($pg=='indexprv_en.php'){
                         echo'<td><a href="Details_en.php?id=' .$result[1]. '&aus=8">Details</a></td>
					     </tr>';
                     }
                     else{
                         echo'<td><a href="Details_en.php?id=' .$result[1]. '&aus=9">Details</a></td>
					     </tr>';
                     }
			}
			
			} else {
                $text = '<p>No results were found for your search.</p>';
            }
        } 
    } else {
        $text = '<p>An empty search was specified.</p>';
    }

    return $text; 
	
		
	mysqli_free_result($result);
	mysqli_close($link);
}

$page=$_POST['adr'];

if (!empty($_POST['query'])) { 
    $search_result = search ($_POST['query'], $page);
    echo $search_result; 
}

?>
	</table>
	</center>
	<br>

     <div align="center">
         <?php

         if($page=='indexnav_en.php'){
             echo'<a href="indexnav_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         elseif($page=='index_en.php'){
             echo'<a href="index_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         elseif($page=='indexmeh_en.php'){
             echo'<a href="indexmeh_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         elseif($page=='indexavt_en.php'){
             echo'<a href="indexavt_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         elseif($page=='indexelmeh_en.php'){
             echo'<a href="indexelmeh_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         elseif($page=='indexprv_en.php'){
             echo'<a href="indexprv_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }
         else{
             echo'<a href="indexmdzh_en.php" class="btn2 third2">Return<br>to the search form</a>';
         }

         ?>
     </div>

		<div class="rasporka"></div>
 </div>

 <?php require_once("../includes/ind_foot_en.php") ?>

</body>
</html>
