<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{


    // Showing companies
    public function index(){

        $companyList = Company::where('status', '<>', 't')->paginate(10);
        $page_title = 'Companies';

        $data_ = [
            'title' => $page_title,
            'companyList' => $companyList

        ];
        return view('panel.company.index', $data_);
    }

    // Editing or Creating
    public function edit(Request $request){



        $data_ = [
            'title' => 'Add/Edit Company',
        ];
        if($request->input('company_id')){
            $data_['company'] = Company::findOrFail($request->input('company_id'));
        } else {
            $data_['company'] = new Company();
        }


        return view('panel.company.edit', $data_);
    }

    // Deleting
    public function delete(Request $request){

        $company = Company::findOrFail($request->input('company_id'));
        $company->status = 't';
        $company->save();

        return redirect()->route('panel.company.index');
    }

    // Saving
    public function save(Request $request){

        $company = Company::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'name' => $request->name,
                'owner' => $request->owner,
                'email' => $request->email,
                'cellphone' => $request->cellphone,
                'status' => $request->status
            ]
            );


        // JUST CREATING
        /* Company::create($request->all()); */
        return redirect()->route('panel.company.index');
    }
}
