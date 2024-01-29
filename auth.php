<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/style_login.css" rel="stylesheet" type="text/css">
    <title> Авторизація ЄКТС </title>
</head>

    <body>
        <main>
            <form action="includes/login.php" method="post">
                <h2>Вхід в адмін панель</h2>
                <div>
                    <label for="f-title">Логін</label>
                    <input class="field" type="text" name="login" id="f-title">
                </div>

                <br>

                <div>
                    <label for="fp-title">Пароль</label>
                    <input class="field" type="password" name="pass" id="fp-title">
                </div>

                <br>

                 <div align="center">
                    <button type="submit">Увійти</button>
                </div>
            </form>
        </main>
    </body>



</html>



