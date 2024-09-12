<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    function get()  {
        $data = User::get();

        // dd($data);
        return view('dashboard.admin',['data'=>$data]);
    }

    function pageCreateAdmin()  {
        return view('dashboard.admin-create');
    }

    function createAdmin(Request $request)  {
        $request->validate([

            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->is_admin = true;
        $data->password = Hash::make($request->password);
        $data->save();
        return  redirect()->route('dashboard.admin');
    }
}
