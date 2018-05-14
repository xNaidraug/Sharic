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
	                <button class="dropdown-item" type="button">Log out</button>
	            </div>
	        </div>
	    </ul>
	</div>
</nav>