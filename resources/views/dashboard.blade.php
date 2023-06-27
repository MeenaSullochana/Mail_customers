@extends('layouts.frontend')
@section('content')
<div class="card"style="width: 100rem;">
    <div class="card-body">
        <table class="table table-bordered table-striped">
        
        <div class="text-right">
            <button type="button"  class="btn btn-success text-left"><a href="{{url('logout') }}" class="text-light text-decoration-none">Logout</a></button>
        </div>
        <button type="button"  class="btn btn-success"><a href="{{url('add_user') }}" class="text-light text-decoration-none">Add User</a></button>
            <br><br><thead>
                <tr>
                   
                    <td>Image</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Mobile Number</td>
                    <td>Address</td>
                    <td>Role</td>
                    <td>Active</td>
                   
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                <td>
                        <img src="{{ asset('images/profile/'.$item->image) }}" width="40px" height="40px" alt="image"/>
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->role}}</td>
                    <td>{{$item->active}}</td>
                 
                   
                    <td>
                    <button type="button"  class="btn btn-primary"><a href="{{url('edituser/'.$item->id)}}" class="text-light text-decoration-none">Edit</a></button>
                    <button type="button"  class="btn btn-danger"><a href="{{url('deleteuser/'.$item->id)}}" class="text-light text-decoration-none">Delete</a></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection