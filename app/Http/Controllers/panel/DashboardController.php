<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        // dd(Auth::user());
        return view('panel.index');
    }

    public function siteIndex(){
        $usercount = DB::table('users')->count();
        $jobcount = DB::table('job')->count();
        $categorycount = DB::table('category')->count();
        $locationcount = DB::table('location')->count();
        $data_ = [
            'usercount' => $usercount,
            'categorycount' => $categorycount,
            'locationcount' => $locationcount,
            'jobcount' => $jobcount
        ];
        return view('site.index', $data_);
    }
}
