
    <div id="banner"> <center> <img src="../cadimage/logo_eng.png" alt="Disciplines regisry of NUOMA" style="width:651px;height:71px;"></center> </div>

    <div class="dropdown">
        <div class="dropbtn">Eng</div>
        <div class="dropdown-content">
            <a href="index_en.php">Eng</a>
            <a href="../index.php">Ukr</a>
        </div>
    </div>
    <br>


    <h2 align="center">Dear visitors, to view information about educational components, use the search form below</h2>

    <br>
    <br>

    <?php

    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = explode('/', $url[0]);
    $url = $url[3];

    //echo $url;

    ?>

    <form name="search" method="post" action="search_en.php">
        <input type="search" name="query" placeholder="Code or discipline name">
        <input type="hidden" name="adr" value="<?= $url ?>">
        <button type="submit">Find</button>
    </form>

    <br>
    <br>

    <div class="filter">
        <details>
            <summary>Show educational components for the educational program</summary>
            <div>
                <ul>
                    <li><b style="font-size: 0.9375rem;"><a href="indexnav_en.php">Navigation</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexmeh_en.php">Marine power plant operation and maintenance</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexelmeh_en.php">Operation and maintenance of ship electrical equipment and means of automation</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexavt_en.php">Automated Control of Ships Power Plants</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexmdzh_en.php">Management of organisations and administration of Sea and River Transport</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="indexprv_en.php">Law</a></b></li>
                    <li><b style="font-size: 0.9375rem;"><a href="index_en.php">All Subject Area</a></b></li>
                </ul>
            </div>
        </details>
    </div>
