<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{ url('css/style.css')}}">
<link rel="stylesheet" href="{{ url('css/main-color.css')}}" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="{{route('home')}}"><img src="{{url('images/logo.png')}}" alt=""></a>
					<a href="{{route('home')}}" class="dashboard-logo"><img src="{{url('images/logo2.png')}}" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">

					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span><img src="{{url('images/dashboard-avatar.jpg')}}" alt=""></span>My Account</div>
						<ul>
							<li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
							{{-- <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li> --}}
							<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
							<li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul>
					</div>

					<a href="{{ route('listing.create') }}" class="button border with-icon">Add Listing <i class="sl sl-icon-plus"></i></a>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li class="active"><a href="{{route('dashboard')}}"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
				{{-- <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span></a></li> --}}
				<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
				{{-- <li><a href="dashboard-wallet.html"><i class="sl sl-icon-wallet"></i> Wallet</a></li> --}}
			</ul>

			<ul data-submenu-title="Listings">
				<li><a><i class="sl sl-icon-layers"></i> My Listings</a>
					<ul>
						<li>
							<a href="#">All listings <span class="nav-tag primary">0</span></a>
						</li>
						<li><a href="dashboard-my-listings.html">Active <span class="nav-tag green">6</span></a></li>
						<li><a href="dashboard-my-listings.html">Pending <span class="nav-tag yellow">1</span></a></li>
						<li><a href="dashboard-my-listings.html">Expired <span class="nav-tag red">2</span></a></li>
					</ul>
				</li>
				<li><a href="{{ route('listing.create')}}"><i class="sl sl-icon-plus"></i> Add Listing</a></li>
			</ul>

			<ul data-submenu-title="Account">
				<li><a href="dashboard-my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
				<li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
			</ul>

		</div>
	</div>
	<!-- Navigation / End -->

  <!-- Content
	================================================== -->
	<div class="dashboard-content">

@yield('content')

  </div>
	<!-- Content / End -->




</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{url('scripts/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/jquery-migrate-3.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/mmenu.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/chosen.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/slick.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/rangeslider.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/counterup.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/tooltips.min.js')}}"></script>
<script type="text/javascript" src="{{url('scripts/custom.js')}}"></script>

@yield('scripts')

</body>
</html>
