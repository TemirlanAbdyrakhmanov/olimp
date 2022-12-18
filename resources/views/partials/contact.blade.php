<!-- Contact -->
<div id="contact" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section-header -->
            <div class="section-header text-center">
                <h2 class="title">Контакты</h2>
            </div>
            <!-- /Section-header -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-phone"></i>
                    <h3>Телефон</h3>
                    <p><a class="contact-tel" href="tel:+996551008880">+996 551 00 88 80</a></p>
                    <p><a class="contact-tel" href="tel:+996501008880">+996 501 00 88 80</a></p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-calendar"></i>
                    <h3>График работы</h3>
                    <p>Каждый день с 08:00 до 02:00 </p>
                </div>
            </div>
            <!-- /contact -->

            <!-- contact -->
            <div class="col-sm-4">
                <div class="contact">
                    <i class="fa fa-map-marker"></i>
                    <h3>Адрес</h3>
                    <p>с. Новопавловка ул. Фрунзе 255 (напротив магазина стройматериалов "Кушчу")</p>
                </div>
            </div>
            <!-- /contact -->
            <div class="col-md-12">
                <hr>
            </div>
            <!-- contact form -->
            <div class="col-md-6">
                <a class="dg-widget-link" href="http://2gis.kg/bishkek/firm/70000001029423878/center/74.482206,42.875102/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Бишкека</a>
                <div class="dg-widget-link">
                    <a href="http://2gis.kg/bishkek/center/74.482206,42.875102/zoom/16/routeTab/rsType/bus/to/74.482206,42.875102╎Олимп, спортивный комплекс?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Олимп, спортивный комплекс</a>
                </div>
                <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                <script charset="utf-8">new DGWidgetLoader({"width":"100%","height":400,"borderColor":"#a3a3a3","pos":{"lat":42.875102,"lon":74.482206,"zoom":16},"opt":{"city":"bishkek"},"org":[{"id":"70000001029423878"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                <br><br>
            </div>
            <div class="col-md-6">
                <h2 class="text-center" id="contact-form" >Обратная связь</h2>
                <form class="contact-form">
                <?php
                if(!isset($_SESSION['name']) && !isset($_SESSION['user_type'])) {
                ?>
                    <input type="text" name="name" class="col-md-6 input" placeholder="Ваше имя" required />
                    <input type="email" name="mail" class="col-md-6 input" placeholder="Ваш Email" required />
                    <input type="text" name="phone" class="col-md-6 input" placeholder="Ваш номер телефона" required />
                <?php
                }else{
                ?>
                    <input type="text" name="name" value="<?=$_SESSION['name'];?>" class="col-md-6 input" placeholder="Ваше имя" required />
                    <input type="email" name="mail" value="<?=$_SESSION['email'];?>" class="col-md-6 input" placeholder="Ваш Email" required />
                    <input type="text" name="phone" value="<?=$_SESSION['phone'];?>" class="col-md-6 input" placeholder="Ваш номер телефона" required />

                <?php
                }
                ?>
                    <textarea class="col-md-6 input" name="message" cols="30" rows="10" placeholder="Ваше сообщение" required></textarea>
                    <button class="main-btn">Отправить</button>
                </form>
                <legend>Отправлено.</legend>
                <br>
            </div>
            <!-- /contact form -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Contact -->
