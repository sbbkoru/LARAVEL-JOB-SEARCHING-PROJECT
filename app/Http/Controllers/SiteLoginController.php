<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SiteLoginController extends Controller
{
    public function index(){
        $usercount = DB::table('users')->count();
        $data_ = [
            'usercount' => $usercount
        ];

        if(Auth::check()){
            return redirect()->route('site.index', $data_);
        }

        return view('site.login');
    }

    public function login(Request $request){
        $user = User::where([
           'email' => $request->email,
           'status' => 'a'
        ])->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return redirect()->route('site.login-page')->with('error', 'Invalid input!');
        }
        Auth::login($user);
        return redirect()->route('site.index')->with('success', 'Connected successfully!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('site.login');
    }

}

