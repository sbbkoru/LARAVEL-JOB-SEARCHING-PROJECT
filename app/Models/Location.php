<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Location extends Model
{
    use HasFactory;

    protected $table = 'location';
    protected $fillable = [
        'id',
        'province_id',
        'name',
        'code',
        'status'
    ];

    public static function getProvince_(){
        $res = DB::select('select * from province');
        foreach($res as $row) {
            $province_[$row->id] = $row->name;
        }
        return $province_;
    }

    public static function getProvinceID(){
        $res = DB::select('select * from province');
        return $res;
    }

    public function province(){

        return $this->hasOne(Province::class, 'id' , 'province_id');
    }

    public static function deleteByProvinceID($province_id){
        DB::table('location')->where('province_id', '=', $province_id)->delete();
    }

    public static function LocationWithProvince(){
        $list = Location::where('status', '<>', 't')->get();

        foreach($list as $locationwpro) {
            $res_[$locationwpro->id] = $locationwpro->name . '/' . $locationwpro->province->name;
        }

        return $res_;
    }
}
