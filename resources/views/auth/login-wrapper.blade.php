@extends('partials.header')

@section('wrapper')

<!-- home wrapper -->
<div class="home-wrapper">
    <div class="container">
        <div class="row">
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- home content -->
            <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1 register">
                <div class="row">
                    <div class="col-md-12 text-center inner">
                        <h3>Войти в систему</h3>
                    </div>
                </div>
                <form method="POST" action="{{ route('login') }}">

                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal" method="post" id="form">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
                                        <div class="form-group">
                                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                                :value="old('email')" required autofocus />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
                                        <div class="form-group">
                                            <x-text-input id="password" class="block mt-1 w-full" type="password"
                                                name="password" required autocomplete="current-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-5 col-xs-4 col-xs-offset-5">
                                        <div class="form-group">
                                            <x-primary-button class="ml-3">
                                                {{ __('Log in') }}
                                            </x-primary-button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </form>

            </div>

            <!-- /home content -->
        </div>
    </div>
</div>
<!-- /home wrapper -->
@endsection
