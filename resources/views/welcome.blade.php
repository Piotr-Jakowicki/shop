@extends('layouts.app')

@section('content')
<!-- Popular -->
<h1 class="text-center p-2">Popular products</h1>
    <div class="row item-section">
        <?php for($i=0;$i<6;$i++):?>
        <div class="col-md-4 pb-4">
            <div class="card rounded shadow-sm border-0">
                <div class="card-body "><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5> <a href="#" class="text-dark">Awesome product</a></h5>
                    <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <ul class="list-inline small float-left">
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                    </ul>
                    <p class="float-right"><b>49.99$</b></p>
                </div>
            </div>
        </div>
    <?php endfor; ?>
    <button type="button" class="btn btn-primary btn-lg btn-block">More</button>
    </div>
    <!-- End popular -->

    <!-- Pics -->
    <h1 class="text-center">New collections</h1>
      <div class="row mb-5">
        <div class="col-12 col-md-4"> 
            <img class="responsive img-fluid rounded mb-3 mb-md-0" src="http://lorempixel.com/400/600">
        </div>
        <div class="col-12 col-md-4"> 
          <img class="responsive img-fluid rounded mb-3 mb-md-0" src="http://lorempixel.com/400/600" >
        </div>
        <div class="col-12 col-md-4"> 
          <img class="responsive img-fluid rounded mb-3 mb-md-0" src="http://lorempixel.com/400/600" >
        </div>
      </div>
    <!-- End Pics -->

    <!-- Men -->
    <h1 class="text-center p-2">Men</h1>
    <div class="row">
        <?php for($i=0;$i<6;$i++):?>
        <div class="col-md-4 pb-4">
            <div class="card rounded shadow-sm border-0">
                <div class="card-body "><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5> <a href="#" class="text-dark">Awesome product</a></h5>
                    <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <ul class="list-inline small float-left">
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                    </ul>
                    <p class="float-right"><b>49.99$</b></p>
                </div>
            </div>
        </div>
    <?php endfor; ?>
    <button type="button" class="btn btn-primary btn-lg btn-block">More</button>
    </div>

    <!-- End men -->

@endsection