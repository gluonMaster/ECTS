<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="../../css/style_addform.css" rel="stylesheet" type="text/css">
    <title> Реєстр дисциплін ЄКТС </title>
</head>

<body>

    <div class="wrapper">

        <div align="center" id="banner"> <img src="../../cadimage/logo_ukr.png" alt="Banner NUOMA" style="width:651px;height:71px;"> </div>
        <br>
        <br>
        <br>
        <script src="../../tinymce/js/tinymce/tinymce.min.js"></script>

        <main>
            <form action="../../prePreview.php" method="post">
                <?php
                $aus=10;
                require_once("../../includes/createform.php");
                //print_r($_COOKIE);
                ?>
            </form>
        </main>

    </div>
</body>
</html>
