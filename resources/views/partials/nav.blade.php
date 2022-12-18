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
            <li><a href="/#home">Главная</a></li>
            <li><a href="/#about">Услуги</a></li>
            <li><a href="/#portfolio">Портфолио</a></li>
            <li><a href="/#pricing">Цены</a></li>
            <li><a href="/#blog">Новости</a></li>
            <li><a href="/#contact">Контакты</a></li>
            <li><a href="{{ route('booking.index') }}">Бронировать</a></li>

            <li><a href="{{ route('user.index') }}">Users</a></li>

            @if(Route::has('login'))
                @auth
                    <li class="has-dropdown open-drop"><a href="{{ url('/profile') }}">Профиль</a>
                        <ul class="dropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">Выход</a></li>
                            </form>


                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Вход</a>
                        @if(Route::has('register'))
                                <li><a href="{{ route('register') }}">Регистрация</a></li>
                        @endif
                    </li>
                @endauth
            @endif
        </ul>
        <!-- /Main navigation -->
    </div>
</nav>
<!-- /Nav -->
