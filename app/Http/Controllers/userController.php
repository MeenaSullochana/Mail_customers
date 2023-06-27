<?php

namespace App\Http\Controllers;
 use App\Models\User;
use Illuminate\Http\Request;
use Throwable;
use Validator;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
class userController extends Controller
{
public function index(){
    $users= User::where('role','user')->get();
     return view('dashboard')->with('users',$users);
}

public function add(){
    return view('adduser');
}
        public function store(Request $request)
    {
        $user = new User();
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images/profile/',$filename);
           
          $user->name = $request->input('name');
          $user->email = $request->input('email');
          $user->phone = $request->input('phone');
          $user->address = $request->input('address');
          $user->password=Hash::make($request->password);
          $user->role = "user";
          $user->active = "Yes";
          $user->image = $filename;
          $user->save();
        return redirect('/index');
    }

    function edit($id){
        $users = User::find($id);
     return view('edituser')->with('users',$users);
       
    }
    public function update(Request $request,$id)
    {
        $user = User::find($id);
        if($request->hasFile('image')){
            $path = 'images/profile/'.$request->image;
            if(File::exists($path)){
                File::delete($path);
            }
    
              $file = $request->file('image');
              $ext = $file->getClientOriginalExtension();
              $filename = time().'.'.$ext;
              $file->move('images/profile/',$filename);
              $user->image = $filename;
        }
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        if(auth()->user()->role === "admin"){
            $user->active = $request->input('active');
            $user->update();
            return redirect('/index');
        }else{
            $user->active = $user->active;
            $user->update();
            return redirect()->back();
        }
        
       
          
         
        
    }
    
    public function delete($id){
        $users = User::find($id);
        $path = 'images/profile/'.$users->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $users->delete();
        return redirect('/index');
    }

    public function profile(){
        $role= auth()->user()->role;
        $id = auth()->user()->id;
        $user= User::find($id);
        return view('profile',compact('user'));
    }
    }

    

