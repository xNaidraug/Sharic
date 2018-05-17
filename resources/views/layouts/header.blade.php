<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sharic</title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="https://fonts.gstatic.com"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/profileEdition.js') }}"></script>
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('js/playlist.js') }}"></script>

</head>
<body>
    <div id="app">
	    <header>
			<nav class="navbar navbar-expand navbar-light navbar-laravel">
				<div class="container">
				    <!-- Logo -->
				    <a class="navbar-brand" href="{{ url('/') }}">
				        <img id="logo" src={{ asset('img/logo.png') }}>
				    </a>

				    <div class="justify-content-center navigator">
				        <!-- Left Side Of Navbar -->
				        <ul class="navbar-nav justify-content-around">
				            <li><a href="{{ url($user->name) }}" class="nav-link">
				                <span class="d-none d-md-block">Home</span>
				                <span class="d-sm-block d-md-none">A</span>
				            </a></li>
				            <li><a href="{{ url($user->name.'/profile') }}" class="nav-link">
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
				        <div class="btn-group">
				        	<button type="button" class="configBtn btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
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
		<header>

        <main class="py-4">
            @yield('content')
        </main>
	</div>
</body>