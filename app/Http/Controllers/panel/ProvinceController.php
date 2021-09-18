<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Province;
use App\Models\User;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index(Request $request){
        $provinceList = Province::where('status', '<>', 't')->paginate(10);
        $page_title = 'Provinces';

        $data_ = [
            'title' => $page_title,
            'provinceList' => $provinceList

        ];

        if($request->get('province_id')){
        $data_['locationList'] = Location::where('province_id',  $request->get('province_id'))->where('status', 'a')->get();
        }
        return view('panel.province.index', $data_);
    }

    public function edit(Request $request){
        $data_ = [
            'title' => 'Add/Edit Province',
        ];
        if($request->input('province_id')){
            $data_['province'] = Province::findOrFail($request->input('province_id'));
        } else {
            $data_['province'] = new Province();
        }

        return view('panel.province.edit', $data_);
    }

    public function save(Request $request){
        $province = Province::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'name' => $request->name,
                'code' => $request->code,
                'licencecode' => $request->licencecode,

            ]
            );


        // JUST CREATING
        /* Province::create($request->all()); */
        return redirect()->route('panel.province.index', ['province_id' => $province->id])->with('provinceupdate', 'update');
    }

    public function delete(Request $request){

        $province = Province::findOrFail($request->input('province_id'));
        $province->status = 't';
        $province->save();
        Location::deleteByProvinceID($province->id);

        return redirect()->route('panel.province.index')->with('provincedelete', 'delete');
    }

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
