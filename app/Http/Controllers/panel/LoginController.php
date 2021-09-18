<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        if(Auth::check()){
            return redirect()->route('panel.index');
        }

        return view('panel.login');
    }

    public function login(Request $request){
        $user = User::where([
           'username' => $request->username,
           'status' => 'a',
           'auth_x' => '|super|'
        ])->first();

        if(!$user || !Hash::check($request->password, bcrypt($user->password))){
            return redirect()->route('panel.login-page')->with('error', 'Invalid input!');
        }
        Auth::login($user);
        return redirect()->route('panel.index')->with('success', 'Connected successfully!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('panel.login');
    }

    public function register(){
        if(Auth::check()){
            return redirect()->route('panel.index');
        }

        return view('site.register');
    }

    public function registerSave(Request $request){
        $data_ = [
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'cellphone' => $request->cellphone,
        'auth_x' => '|member|'

        ];

        User::create($data_);
        return redirect()->route('site.login');
    }
}
