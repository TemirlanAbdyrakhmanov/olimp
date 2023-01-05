@extends('partials.header')

@section('wrapper')
<!-- home wrapper -->
<div class="home-wrapper">
    <div class="container">
        <div class="row">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <!-- home content -->
            <div class="col-md-6 col-md-offset-3 register">
            <div class="row">
                <div class="col-md-12 text-center inner">
                    <h3>Registration</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" method="post" id="form">
                        <div class="form-group">
                            <label class="control-label col-md-4" for="name">Name:</label>
                            <div class="col-md-7">
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" /> </div>

                        </div>
                        <!--<div class="form-group">
                            <label class="control-label col-md-4" for="last_name">Last name:</label>
                            <div class="col-md-7">
                                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required  />
                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" /> </div>

                        </div>-->
                        <div class="form-group">
                            <label class="control-label col-md-4" for="email">Email:</label>
                            <div class="col-md-7">
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                             <x-input-error :messages="$errors->get('email')" class="mt-2" />   </div>


                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="phone">Phone number:</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="phone" name="phone" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="password">Create Password:</label>
                            <div class="col-md-7">
                                <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" /> </div>


                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="password_confirmation">Confirm Password:</label>
                            <div class="col-md-7">
                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /></div>


                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-6 col-xs-offset-3 col-xs-4">
                                <br>
                                <button type="submit" class="btn btn-success" style="background-color: #273a50; background-image: linear-gradient(to bottom,#3d5a7b,#273a50);" id="save" name="save">Create Account</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

            <!-- /home content -->
    </form>

        </div>
    </div>
    </div>
    <!-- /home wrapper -->
    @endsection
