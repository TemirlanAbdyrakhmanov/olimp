<!-- Nav -->
<nav id="nav" class="navbar nav-transparent">
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a href="index.php">
                    <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
                    <img class="logo-alt" src="/img/logo-white.png" alt="logo">
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

            <li><a href="users.php">Users</a></li>
            <li><a href="emails.php">Emails</a></li>

            @if(Route::has('login'))
                @auth
                    <li class="has-dropdown open-drop"><a href="{{ url('/dashboard') }}">Профиль</a>
                        <ul class="dropdown">
                            <li><a href="logout.php">Выход</a></li>
                        </ul>
                    </li>
                @else
                    <li class="has-dropdown open-drop"><a href="{{ route('login') }}">Вход</a>
                        @if(Route::has('register'))
                            <ul class="dropdown">
                                <li><a href="{{ route('register') }}">Регистрация</a></li>
                            </ul>
                        @endif
                    </li>
                @endauth
            @endif
        </ul>
        <!-- /Main navigation -->
    </div>
</nav>
<!-- /Nav -->
