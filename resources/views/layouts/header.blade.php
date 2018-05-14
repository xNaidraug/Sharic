<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sharic</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
		<nav class="navbar navbar-expand navbar-light navbar-laravel">
			<div class="container">
			    <!-- Logo -->
			    <a class="navbar-brand" href="{{ url('/') }}">
			        <img id="logo" src="img/logo.png">
			    </a>

			    <div class="justify-content-center">
			        <!-- Left Side Of Navbar -->
			        <ul class="navbar-nav justify-content-around">
			            <li><a class="nav-link">
			                <span class="d-none d-md-block">Home</span> <!-- {{ __('Home') }} -->
			                <span class="d-sm-block d-md-none">A</span>
			            </a></li>
			            <li><a class="nav-link">
			                <span class="d-none d-md-block">Profile</span>
			                <span class="d-xs-block d-md-none">A</span>
			            </a></li>
			            <li><a class="nav-link">
			                <span class="d-none d-md-block">Search</span>
			                <span class="d-xs-block d-md-none">A</span>
			            </a></li>
			        </ul>
			    </div>

			    <!-- Right Side Of Navbar -->
			    <!-- Configuration Menu -->
			    <ul class="navbar-nav">
			        <div class="configMenu">
			            <img id="logo" class="dropdown-toggle float-right" data-toggle="dropdown" src="img/logo.png">
			            <div class="dropdown-menu dropdown-menu-right">
			                <button class="dropdown-item" type="button">Profile</button>
			                <button class="dropdown-item" type="button">Configuration</button>
			                <button class="dropdown-item" type="button">Night mode</button>
			                <button class="dropdown-item" type="button" href="{{ route('logout') }}"
			                	onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
		                	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
			            </div>
			        </div>
			    </ul>
			</div>
		</nav>

        <main class="py-4">
            @yield('content')
        </main>
	</div>
</body>