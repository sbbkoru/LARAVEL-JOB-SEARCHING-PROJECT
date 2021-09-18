<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteUserController extends Controller
{
    public function editaccount (Request $request){


        $data_ = [
            'title' => 'Edit Account'
        ];
        if($request->input('user_id')){
            $data_['user'] = User::findOrFail(Auth::user()->id);
        }

        return view('site.editaccount', $data_);
    }

    public function editaccountsubmit(Request $request){

       $user = User::updateOrCreate(
            [
                'id' => Auth::user()->id
            ],
            [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'cellphone' => $request->cellphone,
                'password' => $request->password,

            ]
            );
        // JUST CREATING
        /* User::create($request->all()); */
        return redirect()->route('site.index');
    }

    public function contact (){
        return view('site.contact');
    }
}

