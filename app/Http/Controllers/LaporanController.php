<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LaporanController extends Controller
{
    public function index()
    {
        $auth = Auth::user();
        if ( $auth->level == "1" OR $auth->level == "4" ) {
            return view('app.laporan');
        } else {
            return redirect('/home');
        }
    }
}
