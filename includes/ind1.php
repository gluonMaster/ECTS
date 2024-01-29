
    <div id="banner"> <center> <img src="cadimage/logo_ukr.png" alt="Banner NUOMA" style="width:651px;height:71px;"></center> </div>

    <div class="columns">
        <div class="enter">
            <a href="auth.php">Авторизуватися</a>
        </div>

        <div class="dropdown">
            <div class="dropbtn">Ukr</div>
            <div class="dropdown-content">
                <a href="index.php">Ukr</a>
                <a href="en/index_en.php">Eng</a>
            </div>
        </div>
        <br>
    </div>


    <h2 align="center">Шановні відвідувачи сайту, для пошуку інформації з дисципліни скористуйтеся формою пошуку нижче</h2>

    <br>
    <br>

    <?php

    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = explode('/', $url[0]);
    $url = $url[2];

    //echo $url;

    ?>

    <form name="search" method="post" action="search.php">
        <input type="search" name="query" placeholder="Код чи назва дисципліни">
        <input type="hidden" name="adr" value="<?= $url ?>">
        <button type="submit">Пошук</button>
    </form>

    <br>
    <br>

    <div class="filter">
        <details>
            <summary>Показати освітні компонети за освітньо-професійною програмою підготовки</summary>
            <div>
                <ul>
                    <li><b style="font-size: 0.9375rem;"><a href="indexnav.php">Навігація і управління морськими суднами</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexmeh.php">Управління судновими технічними системами і комплексами</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexelmeh.php">Експлуатація суднового електрообладнання і засобів автоматики</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexavt.php">Автоматизоване управління судновими енергетичними установками</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexmdzh.php">Менеджмент в галузі морського та річкового транспорту</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexprv.php">Право</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="index.php">Всі програми підготовки</a></b></li>
                </ul>
            </div>
        </details>
    </div>

    <br>

