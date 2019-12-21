<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class LoginController extends Controller
{
    public function verify(Request $req)
    {
        
        $user = DB::table('users')
        ->where('username', $req->username)
        ->where('password', $req->password)
        ->get();	

        if(count($user) > 0 ){
        $req->session()->put('name', $req->input('username'));
        $req->session()->put('user', $user);
        $req->session()->put('id', $user[0]->id);
        return redirect('/welcome');
        }else{
        $req->session()->flash('msg', 'invalid username or password');
        return redirect('/login');
        }
    }
}
