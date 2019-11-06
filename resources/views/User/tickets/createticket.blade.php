@extends('layouts.dashboard')

@section('content')
  <div class="titlebar">
    <div class="row">
      <div class="col-md-12">
        <h3>Create Ticket</h3>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="add-listing-section">
      <div class="add-listing-headline">
        <h3>Add Tickets</h3>
      </div>

      <div>
        <form class="form" method="POST">
          <input type="text" class="form-control" />
        </form>
      </div>
    </div>
  </div>
@endsection
