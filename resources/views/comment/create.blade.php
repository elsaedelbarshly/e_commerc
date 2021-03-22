@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Add Comment</h2>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="#" method="POst" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Enter youe Name"
                            name="name">
                    </div>

                    {{-- <div class="form-group">
                        <label for="">pr</label>
                        <select name="category_id" id="" class="form-control form-control-lg">

                            @foreach ($categorise as $category)
                            <option value="{{ $category->id}}">{{ $category->name }}</option> 
                            @endforeach
                        
                            
                        </select>  
                    </div> --}}

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Enter your email"
                            name="email">
                    </div>


                    <div class="form-group">
                        <label for="">Comment</label>
                        <textarea name="comment" id="" class="form-control form-control-lg"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control-file">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block w-50 mx-auto">Send Comment</button>
                    </div>

                </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection