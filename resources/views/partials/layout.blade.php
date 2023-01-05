<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel ="website icon" type="ico"
        href="images/favicon">

        <!-- Fonts -->
        <!--<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">-->

        @vite(['resources/css/main.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">

        @yield('content')

    <!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

</body>

</html>

