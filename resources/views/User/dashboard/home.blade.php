@extends('layouts.dashboard')

@section('content')


  		<!-- Titlebar -->
  		<div id="titlebar">
  			<div class="row">
  				<div class="col-md-12">
  					<h2>Howdy, {{ Auth::User()->name}}!</h2>
  					<!-- Breadcrumbs -->
  					<nav id="breadcrumbs">
  						<ul>
  							<li><a href="#">Home</a></li>
  							<li>Dashboard</li>
  						</ul>
  					</nav>
  				</div>
  			</div>
  		</div>

  		<!-- Notice -->
  		{{-- <div class="row">
  			<div class="col-md-12">
  				<div class="notification success closeable margin-bottom-30">
  					<p>Your listing <strong>Hotel Govendor</strong> has been approved!</p>
  					<a class="close" href="#"></a>
  				</div>
  			</div>
  		</div> --}}

  		<!-- Content -->
  		<div class="row">

  			<!-- Item -->
  			<div class="col-lg-3 col-md-6">
  				<div class="dashboard-stat color-1">
  					<div class="dashboard-stat-content"><h4>6</h4> <span>Active Listings</span></div>
  					<div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
  				</div>
  			</div>

  			<!-- Item -->
  			<div class="col-lg-3 col-md-6">
  				<div class="dashboard-stat color-2">
  					<div class="dashboard-stat-content"><h4>726</h4> <span>Total Views</span></div>
  					<div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
  				</div>
  			</div>


  			<!-- Item -->
  			<div class="col-lg-3 col-md-6">
  				<div class="dashboard-stat color-3">
  					<div class="dashboard-stat-content"><h4>95</h4> <span>Total Reviews</span></div>
  					<div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
  				</div>
  			</div>

  			<!-- Item -->
  			<div class="col-lg-3 col-md-6">
  				<div class="dashboard-stat color-4">
  					<div class="dashboard-stat-content"><h4>126</h4> <span>Times Bookmarked</span></div>
  					<div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
  				</div>
  			</div>
  		</div>


  		<div class="row">


  			<!-- Copyrights -->
  			<div class="col-md-12">
  				<div class="copyrights">© 2019 Listeo. All Rights Reserved.</div>
  			</div>
  		</div>

@endsection
