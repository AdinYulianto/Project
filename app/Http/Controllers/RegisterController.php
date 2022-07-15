<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        # code...
        $data=[
            'page'  =>'Halaman Registrasi',

        ];

        return view('app.register',$data);
    }


    public function insert(Request $request)
    {
        # code...

        $validate_rule = $request->validate([

            'nama'      =>'required|min:5',
            'username'      =>'required',
            'email'     =>'required|email',
            'password'  =>'required',


        ],
    [
            'nama.required'     =>'Nama Tidak Boleh Kosong !',
            'nama.min'          =>'Nama Minimal 5 Karakter',
            'email.email'       =>'Email Tidak Valid',




    ]);

   

    $data_insert=[

            'name'       => $request->nama,
            'username'   => $request->username,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
    ];

    User::create($data_insert);
    return redirect('register')->with('success','Data Berhasil Ditambah.');

    }
}
