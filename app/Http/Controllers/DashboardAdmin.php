<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAdmin extends Controller
{
    //

    public function index()
    {
        # code...

        $data=[
            'page'  =>'HALAMAN ADMINISTRATOR'
        ];

        return view('app.admin.dashboardadmin',$data);
    }


    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
        
        # code...
    }
}
