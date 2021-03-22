@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
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


                        {{-- @if ($posts->count()>0) --}}
                
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Comment</th>
                                <th scope="col">Image</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                             {{-- @foreach ($posts as $post) --}}
                
                                <th scope="row">dkfak</th>
                                <td>ksdfngd</td>
            
                                <td>
                                    {{-- {{ $post->category->name}} --}}
                                </td>
                                
                                <td><img src="#" height="50" alt=""></td>
                                <td><a href="#"><i class="fa fa-edit fa-2x text-info"></i></a></td>
                                <td><a href="#"><i class="fa fa-trash fa-2x text-danger"></i></a></td>
                              </tr>
                              {{-- @endforeach  --}}
                            </tbody>
                          </table>
            
                          {{-- @else
                            <div class="alert alert-danger"><h1>No poost</h1></div>
                          @endif  --}}



                        <div class="card-body">
                          <a href="{{ route('comment.create') }}" class="card-link">ADD Comment</a>
                        </div>
                      </div>

                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-md-8 -->
    </div>
</div><!-- container -->
@endsection