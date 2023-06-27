@extends('layouts.frontend')
@section('content')


<body>

<div class="card">
<div class="card-body">
    <form action="{{url('adduser')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6 mb-s">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name"> 
        </div>
        <div class="col-md-6 mb-s">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email"> 
        </div>
        <div class="col-md-6 mb-s">
            <label for="">Mobile Number</label>
            <input type="text" class="form-control" name="phone"> 
        </div>
        <div class="col-md-6 mb-s">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address"> 
        </div>
        <div class="col-md-6 mb-s">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password"> 
        </div>
        <div class="col-md-12 mb-s">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image"> 
        </div>
        <div class="col-md-6 mb-s">
            <button type="submit" class="btn btn-primary"> Submit</button>
        </div>
    </form> 
</div>
</div>

@endsection