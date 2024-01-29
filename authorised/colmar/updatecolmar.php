<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="../../css/style_addform.css" rel="stylesheet" type="text/css">
    <script src="../../tinymce/js/tinymce/tinymce.min.js"></script>
    <title> Редагування ЄКТС </title>
</head>

<?php

$au=7;
require_once("../../includes/connection.php");

$code=$_GET['code'];

//print_r($_GET);

$q="SELECT * FROM `disciplines_colmar` WHERE `Code`='$code'";
$q_eng="SELECT * FROM `disciplines_colmar_eng` WHERE `Code`='$code'";
$disc=mysqli_query($link, $q);
$disc_eng=mysqli_query($link, $q_eng);
mysqli_close($link);

$disc=mysqli_fetch_assoc($disc);
$disc_eng=mysqli_fetch_assoc($disc_eng);
//print_r($disc);
?>

<body>

<div class="wrapper">

    <div align="center" id="banner"> <img src="../../cadimage/logo_ukr.png" alt="Banner NUOMA" style="width:651px;height:71px;"> </div>
    <br>

    <main>
        <form action="../../authorised/colmar/updatecolmaradd.php" method="post">

            <div class="container">
                <div class="lang">
                    <p align="right">Українською мовою</p>
                </div>

                <h2 align="center">Редагування освітнього компонента</h2>
                <input type="hidden" name="Id" value="<?= $disc['Discipline_id'] ?>">
                <div>
                    <label for="f-code">Код</label>
                    <input class="field" type="text" name="Code" id="f-code" value="<?= $disc['Code'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-name">Назва дисципліни</label>
                    <input class="field" type="text" name="Name" id="f-name" value="<?= $disc['Name_of_disc'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-bakmag">Рівень освіти (Бакалавр/Магістр)</label>
                    <input class="field" type="text" name="bakmag" id="f-bakmag" value="<?= $disc['Program'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-credits">Обсяг у кредитах ЄКТС</label>
                    <input class="field" type="number" step=0.5 name="Credits" id="f-credits" value="<?= $disc['Credits'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-mova">Мова викладання</label>
                    <input class="field" type="text" name="Lang" id="f-mova" value="<?= $disc['Language'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-sel">ОПП</label>
                    <input class="field" type="text" name="Select" id="f-sel" value="<?= $disc['Opp'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-res">Результати навчання за освітнім компонентом</label>
                    <script type="text/javascript">
                        tinymce.init({
                            selector: '#f-res',
                            language: 'ru',

                            plugins: [
                                'advlist autolink link image lists charmap preview hr anchor pagebreak',
                                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                'table template paste help'
                            ],
                            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                                'bullist numlist outdent indent | link image | preview | ' +
                                'forecolor backcolor | help',
                            menubar: 'edit insert format tools table',
                            content_css: 'css/content.css'
                        });
                    </script>
                    <textarea class="field" rows="26" cols="35" wrap="hard" name="Results" id="f-res"><?= $disc['Results_prog'] ?></textarea>
                </div>

                <br>

                <div>
                    <label for="f-leclab">Види навчальної роботи</label>
                    <input class="field" type="text" name="Leclab" id="f-leclab" value="<?= $disc['Leklab'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-control">Форма(и) контролю</label>
                    <input class="field" type="text" name="Control" id="f-control" value="<?= $disc['Control'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-content">Зміст </label>
                    <script type="text/javascript">
                        tinymce.init({
                            selector: '#f-content',
                            language: 'ru',

                            plugins: [
                                'advlist autolink link image lists charmap preview hr anchor pagebreak',
                                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                'table template paste help'
                            ],
                            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                                'bullist numlist outdent indent | link image | preview | ' +
                                'forecolor backcolor | help',
                            menubar: 'edit insert format tools table',
                            content_css: 'css/content.css'
                        });
                    </script>
                    <textarea class="field" rows="26" cols="35" name="Content" id="f-content"><?= $disc['Content'] ?></textarea>
                </div>

                <br>

                <div>
                    <label for="f-device">Навчальне обладнання, що застосовується (за необхідності) </label>
                    <textarea class="field" rows="8" cols="35" name="Devices" id="f-device" value="<?= $disc['Notes'] ?>" ?></textarea>
                </div>

            </div>

            <br>
            <div class="line"></div>
            <br>

            <div class="container_eng">
                <div class="lang">
                    <p align="right">Англійською мовою</p>
                </div>
                <h2 align="center">Інформація об освітньом компоненті англійською мовою</h2>

                <input type="hidden" name="Id1" value="<?= $disc_eng['Discipline_id'] ?>">
                <div>
                    <label for="f-code1">Код </label>
                    <input class="field" type="text" name="Code1" id="f-code1" value="<?= $disc_eng['Code'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-name1">Англомовна назва дисципліни</label>
                    <input class="field" type="text" name="Name1" id="f-name1" value="<?= $disc_eng['Name_of_disc'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-bakmag1">Education level(Bachelor/Magister)</label>
                    <input class="field" type="text" name="bakmag_eng" id="f-bakmag1" value="<?= $disc_eng['Program'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-credits1">Обсяг у кредитах ЄКТС</label>
                    <input class="field" type="number" step=0.5 name="Credits1" id="f-credits1" value="<?= $disc_eng['Credits'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-mova1">Мова викладання (Англійською)</label>
                    <input class="field" type="text" name="Lang1" id="f-mova1" value="<?= $disc_eng['Language'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-sel1">ОПП (Англійською)</label>
                    <input class="field" type="text" name="Select1" id="f-sel1" value="<?= $disc_eng['Opp'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-res1">Результати навчання за освітнім компонентом (Англійською)</label>
                    <script type="text/javascript">
                        tinymce.init({
                            selector: '#f-res1',
                            language: 'ru',

                            plugins: [
                                'advlist autolink link image lists charmap preview hr anchor pagebreak',
                                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                'table template paste help'
                            ],
                            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                                'bullist numlist outdent indent | link image | preview | ' +
                                'forecolor backcolor | help',
                            menubar: 'edit insert format tools table',
                            content_css: 'css/content.css'
                        });
                    </script>
                    <textarea class="field" rows="26" cols="35" wrap="hard" name="Results1" id="f-res1"><?= $disc_eng['Result_prog'] ?></textarea>
                </div>

                <br>

                <div>
                    <label for="f-leclab1">Види навчальної роботи (Англійською)</label>
                    <input class="field" type="text" name="Leclab1" id="f-leclab1" value="<?= $disc_eng['Leklab'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-control1">Форма(и) контролю (Англійською)</label>
                    <input class="field" type="text" name="Control1" id="f-control1" value="<?= $disc_eng['Control'] ?>">
                </div>

                <br>

                <div>
                    <label for="f-content1">Зміст (Англійською)</label>
                    <script type="text/javascript">
                        tinymce.init({
                            selector: '#f-content1',
                            language: 'ru',

                            plugins: [
                                'advlist autolink link image lists charmap preview hr anchor pagebreak',
                                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                                'table template paste help'
                            ],
                            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                                'bullist numlist outdent indent | link image | preview | ' +
                                'forecolor backcolor | help',
                            menubar: 'edit insert format tools table',
                            content_css: 'css/content.css'
                        });
                    </script>
                    <textarea class="field" rows="26" cols="35" name="Content1" id="f-content1"><?= $disc_eng['Content'] ?></textarea>
                </div>

                <br>

                <div>
                    <label for="f-device1">Навчальне обладнання (за необхідності) (Англійською)</label>
                    <textarea class="field" rows="8" cols="35" name="Devices1" id="f-device1" value="<?= $disc_eng['Notes'] ?>" ?></textarea>
                </div>

                <br>

                <div align="center">
                    <button type="submit">Оновити</button>
                </div>

            </div>
        </form>
    </main>

</div>
</body>
</html>




