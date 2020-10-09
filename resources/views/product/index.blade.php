@extends('layouts.app')

@section('content')
    <div class="col-md-7">
      <div class="row">
        <div class="col-md-12 mb-3">
  
        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" class="img-fluid z-depth-1" alt="Responsive image">
  
        </div>
      </div>
      <div class="row">

        <div class="col-lg-4 col-md-12 mb-3">
  
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(115).jpg" class="img-fluid z-depth-1"
          alt="Responsive image">
  
        </div>
        <div class="col-lg-4 col-md-6 mb-3">
  
          <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(116).jpg" class="img-fluid z-depth-1"
          alt="Responsive image">
  
        </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-3">
  
      <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img(117).jpg" class="img-fluid z-depth-1"
        alt="Responsive image">
  
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->
  
  <!-- Grid row -->
  <div class="row">
  
    <!-- Grid column -->
    <div class="col-md-6 mb-3">
  
      <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(117).jpg" class="img-fluid z-depth-1"
        alt="Responsive image">
  
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="col-md-6 mb-3">
  
      <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/6-col/img(129).jpg" class="img-fluid z-depth-1"
        alt="Responsive image">
  
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->
    </div>
    <div class="col-md-5">
        <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
    </div>

    
    <div class="col-md-12">
      <h1>Description</h1>
      @include('includes.tabs')
      
      <h1>Rating</h1>
      @include('includes.rating')
      @include('includes.review')

      @include('includes.similar')

    </div>
      <!-- TODO opinnie -->
      <!-- TODO fix description -->


@endsection