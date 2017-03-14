<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DataController extends Controller
{
    public function index()
    {
        $auth = Auth::user();
        if ( $auth->level == "1" OR $auth->level == "2" ) {
            return view('app.data');
        } else {
            return redirect('/home');
        }
    }
}
