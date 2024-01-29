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

    .line {
        border-bottom: 6px solid #04396C; /* Параметры линии */
    }
</style>

<body>
<div class="wrapper">
    <div id="banner"> <center> <img src="cadimage/logo_ukr.png" alt="Banner NUOMA" style="width:651px;height:71px;"></center> </div>

    <br>
    <center>

        <table>

		<tr>
			<td class="cap">Код</td>
			<td><?= $_COOKIE['Code'] ?> </td>
		</tr>
		<tr>
			<td class="cap">Назва освітньої компоненти</td>
			<td><?= $_COOKIE['Name'] ?></td>
		</tr>
		<tr>
			<td class="cap">Обсяг у кредитах ЄКТС</td>
			<td><?= $_COOKIE['Credits'] ?></td>
		</tr>
		<tr>
			<td class="cap">Мова викладання</td>
			<td><?= $_COOKIE['Lang'] ?></td>
		</tr>
		<tr>
			<td class="cap">Результати навчання за освітнім компонентом</td>
			<td><?= $_COOKIE['Results'] ?></td>
		</tr>
		<tr>
			<td class="cap">Види навчальної роботи</td>
			<td><?= $_COOKIE['Leclab'] ?></td>
		</tr>
		<tr>
			<td class="cap">Форма(и) контролю</td>
			<td><?= $_COOKIE['Control'] ?></td>
		</tr>
		<tr>
			<td class="cap">Зміст (стислий опис/перелік розділів та/або тем)</td>
			<td><?= $_COOKIE['Content'] ?></td>
		</tr>

		<tr>
			<td class="cap">Навчальне обладнання, що застосовується (за необхідності)</td>
			<td><?= $_COOKIE['Devices'] ?></td>
		</tr>

        </table>

            <br>
            <div class="line"></div>
            <br>

        <table>
            <tr>
                <td class="cap">Code</td>
                <td><?= $_COOKIE['Code'] ?></td>
            </tr>
            <tr>
                <td class="cap">Course unit</td>
                <td><?= $_COOKIE['Name_eng'] ?></td>
            </tr>
            <tr>
                <td class="cap">Nomber of credits ECTS</td>
                <td><?= $_COOKIE['Credits'] ?></td>
            </tr>
            <tr>
                <td class="cap">Language of education</td>
                <td><?= $_COOKIE['Lang_eng'] ?></td>
            </tr>
            <tr>
                <td class="cap">Learning outcomes of course unit</td>
                <td><?= $_COOKIE['Results_eng'] ?></td>
            </tr>
            <tr>
                <td class="cap">Types of educational work</td>
                <td><?= $_COOKIE['Leclab_eng'] ?></td>
            </tr>
            <tr>
                <td class="cap">Type of final control</td>
                <td><?= $_COOKIE['Control_eng'] ?></td>
            </tr>
            <tr>
                <td class="cap">Content of course unit </td>
                <td><?= $_COOKIE['Content_eng'] ?></td>
            </tr>

            <tr>
                <td class="cap">Equipment (if applicable)</td>
                <td><?= $_COOKIE['Devices_eng'] ?></td>
            </tr>

        </table>
    </center>
    <br>

    <div align="center">
        <a href="includes/create_again.php" class="btn2 third2">Повернутися</a>
        <?php
        //print_r($_COOKIE);
        if($_COOKIE["Aus"]==3){
            echo'<a href="authorised/createnavadd.php" class="btn2 third2">Додати до бази</a>';
        }
        elseif($_COOKIE["Aus"]==2){
            echo'<a href="authorised/meh/createmehadd.php" class="btn2 third2">Додати до бази</a>';
        }
        elseif($_COOKIE["Aus"]==10){
            echo '<a href="authorised/avt/createavtadd.php" class="btn2 third2">Додати до бази</a>';
        }
        elseif($_COOKIE["Aus"]==11){
            echo'<a href="authorised/azov/createazovadd.php" class="btn2 third2">Додати до бази</a>';
        }
        elseif($_COOKIE["Aus"]==12){
            echo'<a href="authorised/colmar/createcolmaradd.php" class="btn2 third2">Додати до бази</a>';
        }
        elseif($_COOKIE["Aus"]==13){
            echo'<a href="authorised/coltr/createcoltradd.php" class="btn2 third2">Додати до бази</a>';
        }
        elseif($_COOKIE["Aus"]==14){
            echo'<a href="authorised/dun/createdunadd.php" class="btn2 third2">Додати до бази</a>';
        }
        elseif($_COOKIE["Aus"]==15){
            echo'<a href="authorised/mdzh/createmdzhadd.php" class="btn2 third2">Додати до бази</a>';
        }
        elseif($_COOKIE["Aus"]==16){
            echo'<a href="authorised/neop/createneopadd.php" class="btn2 third2">Додати до бази</a>';
        }
        elseif($_COOKIE["Aus"]==17){
            echo'<a href="authorised/voen/createvoenadd.php" class="btn2 third2">Додати до бази</a>';
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

