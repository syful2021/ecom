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

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->role = $req->role;
        $user->billing_address = $req->billing_address;
        $user->shipping_address = $req->shipping_address;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('user.index');

 
    }

}
