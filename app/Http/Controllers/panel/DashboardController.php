<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use App\Models\Location;
use App\Models\User;
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
        $usercount = User::all()->where('status', 'a')->count();
        $jobcount = Job::all()->where('status', 'a')->count();
        $categorycount = Category::all()->where('status', 'a')->count();
        $locationcount = Location::all()->where('status', 'a')->count();
        // DB::table('users')
        $data_ = [
            'usercount' => $usercount,
            'categorycount' => $categorycount,
            'locationcount' => $locationcount,
            'jobcount' => $jobcount
        ];
        return view('site.index', $data_);
    }
}
