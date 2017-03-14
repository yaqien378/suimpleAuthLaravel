<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PenjualanController extends Controller
{
    public function index()
    {
        $auth = Auth::user();
        if ( $auth->level == "1" OR $auth->level == "3" ) {
            return view('app.penjualan');
        } else {
            return redirect('/home');
        }
    }
}
