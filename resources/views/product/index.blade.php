@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>All Products</h1>
                </div> <!-- card-header -->
                
                <div class="card-body">
                    
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">price</li>
                        </ul>
                        <div class="card-body">
                          <a href="#" class="card-link">Payment</a>
                          <a href="{{ route('comments') }}" class="card-link">Comments</a>
                        </div>
                      </div>

                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-md-8 -->
    </div>
</div><!-- container -->
@endsection