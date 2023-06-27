@extends('layouts.frontend')
@section('content')
<div class="card">
<div class="card-title text-center"><b><h3>Update Details</h3></b></div>
<div class="card-body">
    <form action="{{url('updateuser/'.$users->id)}}" method="POST" enctype="multipart/form-data">
    @method("PUT")   
    @csrf
        <div class="col-md-4">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" value="{{$users->name}}"> 
        </div><br>
        <div class="col-md-4">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{$users->email}}"> 
        </div><br>
        <div class="col-md-4">
            <label for="">Mobile Number</label>
            <input type="text" class="form-control" name="phone" value="{{$users->phone}}"> 
        </div><br>
        <div class="col-md-4">
            <label for="">Address</label>
            <input type="text" class="form-control" name="address" value="{{$users->address}}"> 
        </div><br>
        <div class="col-md-4">
            <label for="">Active</label>
            <input type="text" class="form-control" name="active" value="{{$users->active}}"> 
        </div><br>
        @if($users->image)
        <img src="{{ asset('images/profile/'.$users->image) }}" width="40px" height="40px" alt=""/>
        @endif
        <br>
        <br>
        <div class="col-md-4">
            <input type="file" class="form-control" name="image"> 
        </div><br>
        <br>
        <div class="col-md-4">
            <div class="text-center"><button type="submit" class="btn btn-primary"> Update</button></div>
        </div>
    </form> 
</div>
</div>