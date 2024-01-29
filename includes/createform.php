<div class="container">
    <div class="lang">
        <p align="right">Українською мовою</p>
    </div>

    <h2 align="center">Додавання нового освітнього компонента:</h2>
    <input class="field" type="hidden" name="Aus" value="<?= $aus ?>">
    <div class="tooltip">
                    <span class="tooltiptext">
                        <p> Структура коду освітнього компонента/навчальної дисципліни:</p>
                        <p>
                            підкод 1 підкод 2 підкод 3 підкод 4
                        </p>
                        <hr>
                           <ul>
                               <li><b>підкод 1</b> - Код освітнього ступеня, що здобувається за освітньою програмою</li>
                               <li><b>підкод 2</b> - Код освітньої програми</li>
                               <li><b>підкод 3</b> - Номер освітнього компонента/навчальної дисципліни у реєстрі освітніх компонентів освітньої програми</li>
                               <li><b>підкод 4</b> - Код базового закладу або відокремленого структурного підрозділу НУ «ОМА»</li>
                           </ul>
                        <hr>
                        <p><u>Приклад 1</u>: <b>В01012В</b>, де <b>B</b> - бакалавр; <b>01</b> - освітня програма «Навігація і управління морськими суднами»;
                            <b>012</b> - гіпотетичний номер навчальної дисципліни у реєстрі освітніх компонентів освітньої програми;
                            <b>В</b> - Національний університет «Одеська морська академія» (базовий заклад).</p>
                        <p><u>Приклад 2</u>: <b>JР03009F</b>, де <b>JР</b> - фаховий молодший бакалавр; <b>03</b> - освітня програма «Експлуатація суднового електрообладнання і засобів автоматики»;
                            <b>009</b> - гіпотетичний номер навчальної дисципліни у реєстрі освітніх компонентів освітньої програми;
                            <b>F</b> - Фаховий коледж морського транспорту НУ «ОМА»</p>
                    </span>
        <label for="f-code">Код</label>
        <input class="field" type="text" name="Code" id="f-code">
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-name">Назва дисципліни</label>
        <input class="field" type="text" name="Name" id="f-name">

    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-bakmag">Рівень освіти (Бакалавр/Магистр)</label>
        <input class="field" type="text" name="bakmag" id="f-bakmag">

    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-credits">Обсяг у кредитах ЄКТС</label>
        <input class="field" type="number" name="Credits" id="f-credits">
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-mova">Мова викладання</label>
        <input class="field" type="text" name="Lang" id="f-mova">
    </div>

    <br>

    <div>
        <label for="f-sel">ОПП</label>
        <select class="field" name="Select" size="6" multiple id="f-sel">
            <option selected value="Навігація і управління морськими суднами">Навігація і управління морськими суднами</option>
            <option value="Управління судновими технічними системами і комплексами">Управління судновими технічними системами і комплексами</option>
            <option value="Експлуатація суднового електрообладнання і засобів автоматики">Експлуатація суднового електрообладнання і засобів автоматики</option>
            <option value="Автоматизоване управління судновими енергетичними установками">Автоматизоване управління судновими енергетичними установками</option>
            <option value="Менеджмент в галузі морського та річкового транспорту">Менеджмент в галузі морського та річкового транспорту</option>
            <option value="Право">Право</option>
        </select>
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
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
        <textarea class="field" rows="26" cols="35" wrap="hard" name="Results" id="f-res">&nbsp&nbsp&nbsp</textarea>
        <!--<script>
            CKEDITOR.replace( 'Results' );
        </script>-->
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-leclab">Види навчальної роботи</label>
        <input class="field" type="text" name="Leclab" id="f-leclab">
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-control">Форма(и) контролю</label>
        <input class="field" type="text" name="Control" id="f-control">
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
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
        <textarea class="field" rows="26" cols="35" name="Content" id="f-content">&nbsp&nbsp&nbsp</textarea>
    </div>

    <br>

    <div>
        <label for="f-device">Навчальне обладнання, що застосовується (за необхідності) </label>
        <textarea class="field" rows="8" cols="35" name="Devices" id="f-device">&nbsp&nbsp&nbsp</textarea>
    </div>

</div>

<br>
<div class="line"></div>
<br>
<div class="container_eng">
    <div class="lang">
        <p align="right">Англійською мовою</p>
    </div>
    <h2 align="center">Освітній компонент англійською мовою</h2>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-name1">Англомовна назва дисципліни </label>
        <input class="field" type="text" name="Name_eng" id="f-name1">
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-bakmag1">Education level(Bachelor/Magister)</label>
        <input class="field" type="text" name="bakmag_eng" id="f-bakmag1">

    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-mova1">Мова викладання (Англійською)</label>
        <input class="field" type="text" name="Lang_eng" id="f-mova1">
    </div>

    <br>

    <div>
        <label for="f-sel1">ОПП (Англійською)</label>
        <select class="field" name="Select_eng" size="6" multiple id="f-sel1">
            <option selected value="Navigation">Navigation</option>
            <option value="Marine power plant operation and maintenance">Marine power plant operation and maintenance</option>
            <option value="Operation and maintenance of ship electrical equipment and means of automation">Operation and maintenance of ship electrical equipment and means of automation</option>
            <option value="Automated Control of Ships Power Plants">Automated Control of Ships Power Plants</option>
            <option value="Management of organisations and administration of Sea and River Transport">Management of organisations and administration of Sea and River Transport</option>
            <option value="Law">Law</option>
        </select>
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
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
        <textarea class="field" rows="26" cols="35" wrap="hard" name="Results_eng" id="f-res1">&nbsp&nbsp&nbsp</textarea>
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-leclab1">Види навчальної роботи (Англійською)</label>
        <input class="field" type="text" name="Leclab_eng" id="f-leclab1">
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
        <label for="f-control1">Форма(и) контролю (Англійською)</label>
        <input class="field" type="text" name="Control_eng" id="f-control1">
    </div>

    <br>

    <div class="tooltip">
        <span class="tooltiptext">
            <p>Це поле обов'язково заповнюється</p>
        </span>
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
        <textarea class="field" rows="26" cols="35" name="Content_eng" id="f-content1">&nbsp&nbsp&nbsp</textarea>
    </div>

    <br>

    <div>
        <label for="f-device1">Навчальне обладнання (за необхідності) (Англійською)</label>
        <textarea class="field" rows="8" cols="35" name="Devices_eng" id="f-device1">&nbsp&nbsp&nbsp</textarea>
    </div>

    <br>

    <div align="center">
        <button type="submit">Подивитись</button>
    </div>
</div>
