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
            <li><a href="/#home">Home</a></li>
            <li><a href="/#about">Services</a></li>
            <li><a href="/#portfolio">Portfolio</a></li>
            <li><a href="/#pricing">Prices</a></li>
            <li><a href="/#blog">News</a></li>
            <li><a href="/#contact">Contact us</a></li>
            <li><a href="{{ route('booking.index') }}">Booking</a></li>
           
            @if(Route::has('login'))
                @auth
                    @if(auth()->user()->is_admin == 1)
                    <li><a href="{{ route('user.index') }}">Users</a></li>
                    @endif
                    <li><a href="{{ url('/profile') }}">Profile</a></li>
                        
                           

                                <li> <form method="POST" action="{{ route('logout') }}">
                                @csrf<a href="{{ route('logout') }}" class="text-grey" onclick="event.preventDefault();
                                    this.closest('form').submit();">Log Out</a>
                                    </form></li>
                            


                        
                    
                @else
                    <li><a href="{{ route('login') }}">Sign in</a>
                        @if(Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    </li>
                @endauth
            @endif
        </ul>
        <!-- /Main navigation -->
    </div>
</nav>
<!-- /Nav -->
