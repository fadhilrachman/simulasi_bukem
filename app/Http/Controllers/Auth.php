<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;

class Auth extends Controller
{
    //
    function Register(Request $request)  {
        $request->validate([

            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->is_admin = false;
        $data->password = Hash::make($request->password);
        $data->save();
        return  redirect()->route('login');
    }

     function Login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        // return request()->all();
        // if(Auth::user()->is_permission)
        // {
        $data = User::where('email', $request->email)->first();

            if (FacadesAuth::attempt($credentials)) {
                $request->session()->regenerate();

                if($data->is_admin){
                    return redirect('/dashboard/visit');
                }else{
                    return redirect('/');

                }
            }
        


        return back()->withErrors([
            'email' => 'Login Failed',
        ]);
    }

}
