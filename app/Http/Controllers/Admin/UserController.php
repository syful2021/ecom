<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index(){
        $s['users'] = User::all();
        return view('admin.users.index', $s);
    }

    function create(){

        return view('admin.users.create');
    }

    function store(Request $req){

        // User::create([
        //     'name' => $req['name'],
        //     'email' =>$req['email'],
        //     'role' => $req['role'],
        //     'billing_address' => $req['billing_address'],
        //     'shipping_address' => $req['shipping_address'],
        //     'password' => Hash::make($req['password']),

        // ]);

            // dd($req->all());


        $user = new User();

        $req->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if($req->hasFile('image')){
            if($req->hasFile('cover_image')){
                // $image = $req->file('cover_image');
                // $path  = $image->store('user/cover_image', 'public');
                // $user->cover_image = $path;
        }

            // $image = $req->file('image');
            // $path  = $image->store('user','public');
            // $user->image = $path;
        }


        $user->name = $req->name;
        $user->email = $req->email;
        $user->role = $req->role;
        $user->billing_address = json_encode($req->billing_address);
        $user->shipping_address = json_encode($req->shipping_address);
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('user.index');


    }

    function edit($id)
    {
        $s['user'] = User::findOrFail($id);
        return view('admin.users.edit', $s);

    }


    function status($id){
        $user = User::findOrFail($id);
        $this->changeStatus($user);
        return redirect()->back();
    }
}
