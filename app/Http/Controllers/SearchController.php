<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Location;
use App\Models\Search;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function bycity(){

        $data_ = [
            'title' => 'By City'
        ];
        return view('site.bycity', $data_);
    }

    public function bycategory(){
        $data_ = [
            'title' => 'By Category'
        ];
        return view('site.bycategory', $data_);
    }

    public function search(){

        $data_ = [
            'location_' => Job::getLocationID(),
            'category_' => Job::getCategoryID(),
            'company_' => Job::getCompanyID(),
            'res_' => Location::LocationWithProvince()
        ];

        return view('site.search', $data_);
    }

    public function searchsubmit(Request $request){

        $location = $request->input('location_id');
        $category = $request->input('category_id');

        $job_ = Job::all()->when($location, function ($query, $location) {
            return $query->where('location_id', $location);
        })->when($category, function ($query, $category) {
            return $query->where('category_id', $category);
        });

        $searchData_ = [
            'user_id' => Auth::user()->id,
            'location_id' => $request->location_id,
            'category_id' => $request->category_id,
            'job_' => $job_,
            'message' => 'message sent'
        ];


        // RESPONSE TEXT
        // $search = Search::create($searchData_);
        return view('site.searchresult', $searchData_);
    }

    public function searchshow (Request $request){

        $data_ = [
            'title' => 'Job Posting',
            'job' => Job::findOrFail($request->input('job_id'))

        ];
       return view('site.searchshow', $data_);

    }

}
