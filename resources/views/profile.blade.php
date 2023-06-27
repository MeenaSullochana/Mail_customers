@extends('layouts.frontend')
@section('content')
<div class="container mt-4">
 <form method="POST" enctype="multipart/form-data" action="{{url('updateuser/'.$user->id)}}">
 @method("PUT")   
    @csrf
    <div class="mt-5 text-right"><button id="btn" class="btn btn-primary profile-button"><a href="{{url('logout') }}" class="text-light text-decoration-none">Logout</a></button></div>
        <div class="row">
           <div class="col-md-4">
               <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    @php($profile_image = $user->image)
                    <img class="rounded-circle mt-5" height="250" width="250" src="{{ asset('images/profile/'.$user->image) }}" id="image_preview_container">
                    <br><span class="font-weight-bold">
                        <input type="file" name="image" id="image"  class="form-control">
                       </span>
                   </div>
               </div>
           <div class="col-md-8">
               <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                        </div>
                    <div class="row" id="res"></div>
                    <div class="row mt-2">
                        
                        <div class="col-md-6">
                           <label class="labels">Name</label>
                           <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            </div>
                        <div class="col-md-6">
                           <label class="labels">Email</label>
                           <input type="text" name="email"  class="form-control" value="{{ $user->email }}">
                            </div>
                        </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                           <label class="labels">Phone</label>
                           <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
                            </div>
                        <div class="col-md-6">
                           <label class="labels">Address</label>
                           <input type="text" name="address" class="form-control" value="{{ $user->address }}" placeholder="Address">
                            </div>
                        </div>
                    
                    <div class="mt-5 text-center"><button id="btn" class="btn btn-primary profile-button" type="submit">Update Profile</button></div>
                   </div>
                  
               </div>
           
            </div>
       
       </form>
    </div>

@endsection