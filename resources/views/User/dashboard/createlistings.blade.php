@extends('layouts.dashboard')

@section('content')
  <!-- Titlebar -->
  <div id="titlebar">
    <div class="row">
      <div class="col-md-12">
        <h2>Add Listing</h2>
        <!-- Breadcrumbs -->
        <nav id="breadcrumbs">
          <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li>Add Listing</li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">

      <div id="add-listing">

        <!-- Section -->
        <div class="add-listing-section">

          <form method="POST" action="{{ route('listing.store') }}">

          <!-- Headline -->
          <div class="add-listing-headline">
            <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
          </div>

          <!-- Title -->
          <div class="row with-forms">
            <div class="col-md-12">
              <h5>Listing Title <i class="tip" data-tip-content="Name of your business"></i></h5>
              <input class="search-field" type="text" value="" name="title"/>
            </div>
          </div>

          <!-- Row -->
          <div class="row with-forms">

            <!-- Status -->
            <div class="col-md-6">
              <h5>Category</h5>
              <select class="chosen-select-no-single" name="category">
                <option label="blank">Select Category</option>
                <option>Eat & Drink</option>
                <option>Shops</option>
                <option>Hotels</option>
                <option>Restaurants</option>
                <option>Fitness</option>
                <option>Events</option>
              </select>
            </div>

            <!-- Type -->
            <div class="col-md-6">
              <h5>Keywords <i class="tip" data-tip-content="Maximum of 15 keywords"></i></h5>
              <input type="text" placeholder="Keywords should be separated by commas" name="keywords">
            </div>

          </div>
          <!-- Row / End -->

          <div class="row with-forms">

          </div>
        </div>
        <!-- Section / End -->

        <!-- Section -->
        <div class="add-listing-section margin-top-45">

          <!-- Headline -->
          <div class="add-listing-headline">
            <h3><i class="sl sl-icon-location"></i> Location</h3>
          </div>

          <div class="submit-section">

            <!-- Row -->
            <div class="row with-forms">

              <!-- City -->
              <div class="col-md-6">
                <h5>City</h5>
                <select class="chosen-select-no-single" name="city">
                  <option label="blank">Select City</option>
                  <option>New Providence</option>
                  <option>Abaco</option>
                  <option>Freeport</option>
                  <option>Andros</option>
                  <option>Exuma</option>
                </select>
              </div>

              <!-- Address -->
              <div class="col-md-6">
                <h5>Address</h5>
                <input type="text" placeholder="e.g. 964 School Street" name="address">
              </div>

              <!-- City -->
              <div class="col-md-6">
                <h5>State</h5>
                <input type="text" name="state">
              </div>

              <!-- Zip-Code -->
              <div class="col-md-6">
                <h5>Zip-Code</h5>
                <input type="text" name="zip">
              </div>

            </div>
            <!-- Row / End -->

          </div>
        </div>
        <!-- Section / End -->


        <!-- Section -->
        <div class="add-listing-section margin-top-45">

          <!-- Headline -->
          <div class="add-listing-headline">
            <h3><i class="sl sl-icon-docs"></i> Details</h3>
          </div>

          <!-- Description -->
          <div class="form">
            <h5>Description</h5>
            <textarea class="WYSIWYG" cols="40" rows="3" id="summary" spellcheck="true" name="details"></textarea>
          </div>

          <!-- Row -->
          <div class="row with-forms">

            <!-- Phone -->
            <div class="col-md-4">
              <h5>Phone <span>(optional)</span></h5>
              <input type="text" name="phone">
            </div>

            <!-- Website -->
            <div class="col-md-4">
              <h5>Website <span>(optional)</span></h5>
              <input type="text" name="website">
            </div>

            <!-- Email Address -->
            <div class="col-md-4">
              <h5>E-mail <span>(optional)</span></h5>
              <input type="text" name="email">
            </div>

          </div>
          <!-- Row / End -->


          <!-- Row -->
          <div class="row with-forms">

            <!-- Phone -->
            <div class="col-md-4">
              <h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optional)</span></h5>
              <input type="text" placeholder="https://www.facebook.com/" name="facebook">
            </div>

            <!-- Website -->
            <div class="col-md-4">
              <h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(optional)</span></h5>
              <input type="text" placeholder="https://www.twitter.com/" name="twitter">
            </div>

            <!-- Email Address -->
            <div class="col-md-4">
              <h5 class="gplus-input"><i class="fa fa-google-plus"></i> Google Plus <span>(optional)</span></h5>
              <input type="text" placeholder="https://plus.google.com" name="google">
            </div>

          </div>
          <!-- Row / End -->

        </div>
        <!-- Section / End -->
        <br />
        <button type="submit" class="button preview">Create <i class="fa fa-arrow-circle-right"></i></button>

        @csrf
      </form>
      </div>
    </div>

    <!-- Copyrights -->
    <div class="col-md-12">
      <div class="copyrights">© 2019 Listeo. All Rights Reserved.</div>
    </div>

  </div>
@endsection

@section('scripts')

  <!-- DropZone | Documentation: http://dropzonejs.com -->
  <script type="text/javascript" src="{{url('scripts/dropzone.js')}}"></script>

@endsection
