@extends('layouts.dashboard')

@section('content')
  <!-- Titlebar -->
  <div id="titlebar">
    <div class="row">
      <div class="col-md-12">
        <h2>Edit Listing - {!! $listing->title !!}</h2>
        <!-- Breadcrumbs -->
        <nav id="breadcrumbs">
          <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li>Edit Listing - {!! $listing->title !!}</li>
          </ul>
        </nav>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col">
      <ul class="tabs-nav">
        <li class="active">
          <a href="#details" class="btn btn-default" onclick="tabSelected(event)" data-target="details">Manage Details</a>
        </li>
        <li>
          <a href="#media" class="btn btn-default" onclick="tabSelected(event)" data-target="media">Manage Media</a>
        </li>
        <li>
          <a href="#tickets" class="btn btn-defauls" onclick="tabSelected(event)" data-target="tickets">Manage Tickets</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="tab-container">
      <div class="tab-content activeContent" id="details">
        <div class="col-lg-12">

          <div id="add-listing">

            <!-- Section -->
            <div class="add-listing-section">

              <form method="POST" action="{{ route('listing.update', $listing->id) }}">
                {{ method_field('PATCH') }}

              <!-- Headline -->
              <div class="add-listing-headline">
                <h3><i class="sl sl-icon-doc"></i> Basic Informations</h3>
              </div>

              <!-- Title -->
              <div class="row with-forms">
                <div class="col-md-12">
                  <h5>Listing Title <i class="tip" data-tip-content="Name of your business"></i></h5>
                  <input class="search-field" type="text" value="{!! $listing->title !!}" name="title"/>
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
                  <input type="text"
                  placeholder="Keywords should be separated by commas"
                  name="keywords"
                  value="{!! $listing->keywords !!}"
                  >
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
                    <input type="text" placeholder="e.g. 964 School Street" name="address" value="{!! $listing->address !!}">
                  </div>

                  <!-- City -->
                  <div class="col-md-6">
                    <h5>State</h5>
                    <input type="text" name="state" value="{!! $listing->state !!}">
                  </div>

                  <!-- Zip-Code -->
                  <div class="col-md-6">
                    <h5>Zip-Code</h5>
                    <input type="text" name="zip" value="{!! $listing->zip !!}">
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
                <textarea class="WYSIWYG" cols="40" rows="3" id="summary" spellcheck="true" name="details" >{!! $listing->details !!}</textarea>
              </div>

              <!-- Row -->
              <div class="row with-forms">

                <!-- Phone -->
                <div class="col-md-4">
                  <h5>Phone <span>(optional)</span></h5>
                  <input type="text" name="phone" value="{!! $listing->phone !!}">
                </div>

                <!-- Website -->
                <div class="col-md-4">
                  <h5>Website <span>(optional)</span></h5>
                  <input type="text" name="website" value="{!! $listing->website !!}">
                </div>

                <!-- Email Address -->
                <div class="col-md-4">
                  <h5>E-mail <span>(optional)</span></h5>
                  <input type="text" name="email" value="{!! $listing->email !!}">
                </div>

              </div>
              <!-- Row / End -->


              <!-- Row -->
              <div class="row with-forms">

                <!-- Phone -->
                <div class="col-md-4">
                  <h5 class="fb-input"><i class="fa fa-facebook-square"></i> Facebook <span>(optional)</span></h5>
                  <input type="text" placeholder="https://www.facebook.com/" name="facebook" value="{!! $listing->facebook !!}">
                </div>

                <!-- Website -->
                <div class="col-md-4">
                  <h5 class="twitter-input"><i class="fa fa-twitter"></i> Twitter <span>(optional)</span></h5>
                  <input type="text" placeholder="https://www.twitter.com/" name="twitter" value="{!! $listing->twitter !!}">
                </div>

                <!-- Email Address -->
                <div class="col-md-4">
                  <h5 class="gplus-input"><i class="fa fa-google-plus"></i> Google Plus <span>(optional)</span></h5>
                  <input type="text" placeholder="https://plus.google.com" name="google" value="{!! $listing->google !!}">
                </div>

              </div>
              <!-- Row / End -->

            </div>
            <!-- Section / End -->
            <br />
            <button type="submit" class="button preview">Update <i class="fa fa-arrow-circle-right"></i></button>

            @csrf
          </form>
          </div>
        </div>
        {{-- End of tab 1 --}}
      </div>

      <div class="tab-content" id="media" style="display: none;">
        <div class="add-listing-section">
          <div class="add-listing-headline">
            <h3>
              Media
            </h3>
          </div>

          <div>
            {!! Form::open(['class' => 'dropzone']) !!}

            {!! Form::close() !!}
            <div id="fileUploadDoneButton">

            </div>
          </div>
        </div>
      </div>

      <div class="tab-content" id="tickets" style="display: none;">
        <div class="add-listing-section">
          <div class="add-listing-headline">
            <div class="row">
              <div class="col-md-12">
                <table id="pricing-list-container">
                  <tbody class="ui-sortable">
                    <tr class="pricing-list-item pattern ui-sortable-handle">

                    </tr>
                  </tbody>
                </table>
                <a href="#" class="button add-pricing-list-item">Add Item</a>
                {{-- <a href="#" class="button add-pricing-submenu">Add Category</a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection


@section('scripts')

  <!-- DropZone | Documentation: http://dropzonejs.com -->
  <script type="text/javascript" src="{{url('scripts/dropzone.js')}}"></script>
  <script type="text/javascript">
    function tabSelected(e) {
      e.preventDefault()
      let current = document.getElementsByClassName('activeContent')
      let currentId = current[0].id
      let next = e.target.dataset.target

      document.getElementById(currentId).classList.remove("activeContent")
      document.getElementById(currentId).style.display = "none"

      document.getElementById(next).classList.add("activeContent")
      document.getElementById(next).style.display = ""
    }
  </script>
@endsection
