<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Location;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobList = Job::where('status', '<>', 't')->paginate(2);
        $page_title = 'Jobs';

        $data_ = [
            'title' => $page_title,
            'jobList' => $jobList

        ];
        return view('panel.job.index', $data_);
    }

    public function edit(Request $request){
        $data_ = [
            'title' => 'Add/Edit Job',
            'location_' => Job::getLocationID(),
            'category_' => Job::getCategoryID(),
            'company_' => Job::getCompanyID(),
            'res_' => Location::LocationWithProvince()
        ];
        if($request->input('job_id')){
            $data_['job'] = Job::findOrFail($request->input('job_id'));
        } else {
            $data_['job'] = new Job();
        }
        return view('panel.job.edit', $data_);
    }

    public function save(Request $request){
        $job = Job::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'company_id' => $request->company_id,
                'location_id' => $request->location_id,
                'category_id' => $request->category_id,
                'name' => $request->name,
                'text' => $request->text,
                'experiencestart' => $request->experiencestart,
                'experienceend' => $request->experienceend,
                'salary' => $request->salary,
                'currencyid' => $request->currencyid,
                'remote' => $request->remote,
                'status' => 'a',


            ]
            );


        // JUST CREATING
        /* Province::create($request->all()); */
        return redirect()->route('panel.job.index');
    }

    public function delete(Request $request){

        $job = Job::findOrFail($request->input('job_id'));
        $job->status = 't';
        $job->save();

        return redirect()->route('panel.job.index');
    }
}
