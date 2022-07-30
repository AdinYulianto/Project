<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function index()
    {
        # code...

        $data=[

            'page'  =>'Halaman Log In Administrator'
        ];

        return view ('app.login',$data);
    }

    public function proseslogin(Request $request)
    {
        # code...

        $validation_role=$request->validate([

            'email'         =>'required|email',
            'password'      =>'required'


        ],
        [
            'email.required'    =>'Email Tidak Boleh Kosong !',
            'email.email'       =>'Email Tidak Valid !',
            'password.required' =>'Password Tidak Boleh Kosong !'


        ]);

        if(Auth::attempt($validation_role)){

            $request->session()->regenerate();

            return redirect()->route('Dashboard-Admin');
        }

        return back()->withErrors([

            'email'     =>'Email Tidak Terdaftar !'
        ])->onlyInput('email');
        
    }
}
