@extends('layouts.dashboard')

@section('content')

  		<!-- Titlebar -->
  		<div id="titlebar">
  			<div class="row">
  				<div class="col-md-12">
  					<h2>My Listings</h2>
  					<!-- Breadcrumbs -->
  					<nav id="breadcrumbs">
  						<ul>
  							<li><a href="#">Home</a></li>
  							<li><a href="#">Dashboard</a></li>
  							<li>My Listings</li>
  						</ul>
  					</nav>
  				</div>
  			</div>
  		</div>

      <div class="row">

        <!-- Listings -->
        <div class="col-lg-12 col-md-12">
          <div class="dashboard-list-box margin-top-0">
            <h4>All Listings</h4>
            <ul>

              @foreach ($listings as $listing)
                <li>
                  <div class="list-box-listing">
                    <div class="list-box-listing-img"><a href="#"><img src="images/listing-item-01.jpg" alt=""></a></div>
                    <div class="list-box-listing-content">
                      <div class="inner">
                        <h3><a href="#">{!! $listing->title !!}</a></h3>
                        <span>{!! $listing->address !!}, {!! $listing->state !!}</span>
                        <div class="star-rating">
                          <span class="not-rated">Not rated</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="buttons-to-right">
                    <a href="{{ route('listing.edit', $listing->id) }}" class="button gray"><i class="sl sl-icon-note"></i> Edit</a>
                    <a href="#" class="button gray"><i class="sl sl-icon-close"></i> Delete</a>
                  </div>
                </li>
              @endforeach

            </ul>
          </div>
        </div>


        <!-- Copyrights -->
        <div class="col-md-12">
          <div class="copyrights">© 2019 Listeo. All Rights Reserved.</div>
        </div>
      </div>
@endsection
