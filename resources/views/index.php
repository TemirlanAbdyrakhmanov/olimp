<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116657764-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-116657764-1');
	</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<title>ОЛИМП - Спортивный комплекс</title>
	<meta name="description" content="Мини футбольное поле Сокулук Заря">
	<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('img/Футбольное%20поле.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo" src="img/logo.png" alt="logo">
							<img class="logo-alt" src="img/logo-white.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Главная</a></li>
					<li><a href="#about">Услуги</a></li>
					<li><a href="#portfolio">Портфолио</a></li>
					<li><a href="#pricing">Цены</a></li>
					<li><a href="#blog">Новости</a></li>
					<li><a href="#contact">Контакты</a></li>
					<li><a href="booking.php">Бронировать</a></li>
					<?php
					if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == '1') {
						?>
						<li><a href="users.php">Users</a></li>
						<li><a href="emails.php">Emails</a></li>
					<?php
					}
					?>
					<?php
					if(!isset($_SESSION['name']) && !isset($_SESSION['user_type'])) {
					?>
					<li class="has-dropdown open-drop"><a href="login.php">Вход</a>
						<ul class="dropdown">
							<li><a href="register.php">Регистрация</a></li>
						</ul>
					</li>
					<?php
					}else{
					?>
					<li class="has-dropdown open-drop"><a href="profile.php">Профиль</a>
						<ul class="dropdown">
						<li><a href="logout.php">Выход</a></li>
						</ul>
					</li>
					<?php
					}
					?>

				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h2 class="white-text">Приглашаем всех любителей спорта</h2>
							<p class="white-text">Два крытых мини-футбольных поля с искусственным покрытием европейского качества
							</p>
							<p class="white-text">Тренажерный зал, баня, намазкана
							</p>
							<p class="white-text">Отличное освещение, место для парковки
							</p>
							<a href="booking.php" class="white-btn">Бронировать</a>
							<a href="#about" class="main-btn">Подробнее</a>
						</div>
					</div>
					<!-- /home content -->
				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">ВИДЫ УСЛУГ</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<img class="icon" src="img/футбольный%20мяч.svg" alt="">
						<h3>Футбольное поле</h3>
						<ul class="services">
							<li>  Искусственное покрытие европейского качества</li>
							<li>  Предоставляем качественные мячи</li>
							<li>  Поля крытые навесом </li><br>
						</ul>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<img class="icon" src="img/Тренажерный%20зал.svg" alt="">
						<h3>Тренажерный зал</h3>
						<ul class="services">
							<li>  Маты</li>
							<li>  Спортивное оборудование</li>	<br>
						</ul>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<img class="icon" src="img/баня.svg" alt="">
						<h3>Баня</h3>
						<ul class="services">
							<li>  Баня с паром</li>
							<li>  Душ с горячей водой</li>
							<li>  Просторная раздевалка</li><br>
						</ul>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Портфолио</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-6 col-xs-6 work">
					<img class="img-responsive visible_photo scale-with-grid" src="img/Крытое%20поле%20ОЛИМП.jpg" alt="rose">
					<img class="img-responsive hidden_photo scale-with-grid" src="img/Мини%20футбольное%20поле.jpg" alt="rose2">
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-6 col-xs-6 work">
						<img class="img-responsive visible_photo scale-with-grid" src="img/Крытое%20футбольное%20поле%20с%20отличным%20освещением.jpg" alt="potolok">
						<img class="img-responsive hidden_photo scale-with-grid" src="img/Крытое%20мини%20футбольное%20поле.jpg" alt="potolok2">
					</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-6 col-xs-6 work">
						<img class="img-responsive visible_photo scale-with-grid" src="img/Мини%20футбольное%20поле.jpg" alt="janart">
						<img class="img-responsive hidden_photo scale-with-grid" src="img/Крытое%20футбольное%20поле%20с%20отличным%20освещением.jpg" alt="janart2">
					</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-6 col-xs-6 work">
						<img class="img-responsive visible_photo scale-with-grid" src="img/Крытое%20мини%20футбольное%20поле.jpg" alt="warnir">
						<img class="img-responsive hidden_photo scale-with-grid" src="img/Мини%20футбольное%20поле.jpg" alt="warnir2">
					</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

	<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Почему выбирают нас</h2>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Два крытых мини-футбольных поля с искусственным покрытием европейского качества</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Две раздевалки</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Душ с горячей водой</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Отличное освещение</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Тренажерный зал</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Баня</p>
					</div>
					<!-- <div class="feature">
						<i class="fa fa-check"></i>
						<p>Онлайн оплата</p>
					</div> -->
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-5 col-md-offset-1">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="img/Крытое%20поле%20ОЛИМП.jpg" alt="">
						<img class="img-responsive" src="img/Мини%20футбольное%20поле.jpg" alt="">
						<!-- <img class="img-responsive" src="./img/photo4.jpg" alt=""> -->
						<!-- <img class="img-responsive" src="./img/photo5.jpg" alt=""> -->
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('img/Футбольное%20поле%20Олимп.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i class="fa fa-users"></i>
						<h3 class="white-text"><span class="counter">451</span></h3>
						<span class="white-text">Счастливых клиентов</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-4 col-xs-6">
					<div class="number">
						<i class="fa fa-trophy"></i>
						<h3 class="white-text"><span class="counter">12</span></h3>
						<span class="white-text">Наград</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-file"></i>
						<h3 class="white-text"><span class="counter">45</span></h3>
						<span class="white-text">Проведенных турниров</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->

	<!-- Pricing -->
	<div id="pricing" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Прайс Лист</h2>
				</div>
				<!-- /Section header -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Школьникам</span>
							<div class="price">
								<h3>500<span class="duration">сом / час</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>07:00 - 18:00</p>
							</li>
						</ul>
						<div class="price-btn">
							<a href="booking.php" class="outline-btn">Бронируй сейчас</a>
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Дневное время</span>
							<div class="price">
								<h3>800<span class="duration">сом / час</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>07:00 - 18:00</p>
							</li>
						</ul>
						<div class="price-btn">
							<a href="booking.php" class="outline-btn">Бронируй сейчас</a>
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Вечернее время</span>
							<div class="price">
								<h3>1000<span class="duration">сом / час</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>18:00 - 00:00</p>
							</li>
						</ul>
						<div class="price-btn">
							<a href="booking.php" class="outline-btn">Бронируй сейчас</a>
						</div>
					</div>
				</div>
				<!-- /pricing -->

			</div>
			<!-- Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Pricing -->

	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Новости</h2>
				</div>
				<!-- /Section header -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="./img/google-site.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
							<li><i class="fa fa-user"></i>Адылбек Ражапов</li>
							<li><i class="fa fa-clock-o"></i>15.04.2018, 10:12</li>
							<!-- <li><i class="fa fa-comments"></i>57</li> -->
							</ul>
							<h3>Открылся официальный сайт WWW.OLIMP1.KG</h3>
							<p>Здесь вы можете найти нужную вам информацию, а также забронировать поле в онлайн режиме!</p>
							<!-- <a href="blog-single.html">Read more</a> -->
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive"  src="img/Мини%20футбольное%20поле%20Олимп.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Адылбек Ражапов</li>
								<li><i class="fa fa-clock-o"></i>15.03.2018, 16:10</li>
								<!-- <li><i class="fa fa-comments"></i>57</li> -->
							</ul>
							<h3>Турниры каждые выходные!</h3>
							<p>Каждое воскресенье проводится турнир с 10:00 до 17:00. Сегодня прошел очередной турнир.... Были награждены ... за ... . Победителем стала команда ... .</p>
							<!-- <a href="blog-single.html">Read more</a> -->
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="img/Спортивный%20комплекс%20ОЛИМП.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>Адылбек Ражапов</li>
								<li><i class="fa fa-clock-o"></i>10.09.2017, 17:23</li>
								<!-- <li><i class="fa fa-comments"></i>57</li> -->
							</ul>
							<h3>Мы открылись!</h3>
							<p>Сегодня в 10-00 часов, состоялось открытие мини-футбольного поля в с. Новопавловка.
								В рамках мероприятия проведен мини-футбольный турнир.
							</p>
							<!-- <a href="blog-single.html">Read more</a> -->
						</div>
					</div>
				</div>
				<!-- /blog -->



			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

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


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.php"><img src="img/logo-white.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="https://www.facebook.com/olymp.sport.kg"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="https://www.instagram.com/minipole_zarya/"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018. All Rights Reserved. Designed by <a href="https://www.linkedin.com/in/kanykei-razhapova-b18ba8a1/" target="_blank">Kanykei Razhapova</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
	<script>
		///////////////////////////
		// Owl Carousel
		$('#about-slider').owlCarousel({
			items:1,
			loop:true,
			margin:15,
			nav: true,
			navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			dots : true,
			autoplay : true,
			animateOut: 'fadeOut'
		});
	</script>
</body>

</html>
