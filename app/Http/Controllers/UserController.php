<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use DB;
use Auth;

class UserController extends Controller
{

    function __construct()
    {
        // $auth = new Auth;
        // print_r($auth->user);
        // //
        // exit;

        // if ( $auth->level <> "1") {
        //     return redirect('/home');
        // }
    }

    public function index()
    {
        $auth = Auth::user();
        if ( $auth->level <> "1") {
            return redirect('/home');
        }

        $user = User::all();
        return view('app.list-user',[
            'users' => $user
        ]);
    }

    public function tambah()
    {
        $auth = Auth::user();
        if ( $auth->level <> "1") {
            return redirect('/home');
        }
        
        return view('app.tambah-user');
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|min:6|confirmed',
            'level'     => 'required',
        ]);

        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = bcrypt($request->password);
        $user->level    = $request->level;
        $user->save();

        return redirect('/user');
    }
}
