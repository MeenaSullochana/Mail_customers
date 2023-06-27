@extends('layouts.frontend')
@section('content')



   <br><br>
    
        <div class="container">
            <div class="card"style="width: 20rem; height: 20rem;">
            <div class="card-title text-center"><b><h3>Login</h3></b></div>
            <div class="card-body">
            <div class="row">
                   <form action="/authenticate" method="POST">

                        @csrf

                        <div  class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" />
                        </div>
                        <div class="col-md-6">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" />
                         <div>
                            <br>
                            <br>
                        <div>
                            <input type="submit" value="Login">
                        </div>
                    </form>
            </div>
            </div>
            
            </div>
        </div>
    



@endsection