<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function edit(Request $request){
        $data_ = [
            'title' => 'Add/Edit Location',
            'province_' => Location::getProvinceID()
        ];
        if($request->input('location_id')){
            $data_['location'] = Location::findOrFail($request->input('location_id'));
        } else {
            $data_['location'] = new Location();
        }

        // dd($data_['location']->province->name);
        return view('panel.location.edit', $data_);
    }

    public function save(Request $request){
        $location = Location::updateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'province_id' => $request->province_id,
                'name' => $request->name,
                'code' => $request->code,
            ]
            );
            return redirect()->route('panel.province.index')->with('locationupdate', 'update');
}
public function delete(Request $request){

    $location = Location::findOrFail($request->input('location_id'));
    $location->status = 't';
    $location->save();

    return redirect()->route('panel.province.index')->with('locationdelete', 'delete');
}

public function locations()
{
    return $this->hasMany(Location::class);
}
}
