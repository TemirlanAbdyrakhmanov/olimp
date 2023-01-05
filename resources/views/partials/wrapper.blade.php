@extends('partials.header')

@section('wrapper')
<!-- home wrapper -->
<div class="home-wrapper">
    <div class="container">
        <div class="row">

            <!-- home content -->
            <div class="col-md-10 col-md-offset-1">
                <div class="home-content">
                    <h2 class="white-text">WE INVITE ALL SPORTS Fans</h2>
                    <p class="white-text">Two indoor futsal fields with European quality artificial turf
                    </p>
                    <p class="white-text">Gym, Sauna, Praying Room
                    </p>
                    <p class="white-text">Big parking area for all clients
                    </p>
                    <a href="{{ route('booking.index') }}" class="white-btn">Book NOW</a>
                    <a href="#about" class="main-btn">Know more...</a>
                </div>
            </div>
            <!-- /home content -->
        </div>
    </div>
</div>
<!-- /home wrapper -->
@endsection
