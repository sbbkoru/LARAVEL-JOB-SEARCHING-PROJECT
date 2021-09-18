<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job';

    protected $fillable = [
        'id',
        'company_id',
        'location_id',
        'category_id',
        'name',
        'text',
        'experiencestart',
        'experienceend',
        'salary',
        'currencyid',
        'remote',
        'status'
    ];

    public function company(){
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function location(){
        return $this->hasOne(Location::class, 'id', 'location_id');
    }
    public function currencyID($curid){
        switch ($curid) {
            case "1": echo "1";
                break;
            case "2": echo "2";
                break;
            case "3": echo "3";
                break;
            case "4": echo "4";
                break;
        }
    }

    public function remoteID($remote){
        switch ($remote) {
            case 1: echo 1;
                break;
            case 0: echo 0;
                break;
        }
    }

    public static function getCompanyID(){
        $res = DB::select('select * from company where status != "t"');
        return $res;
    }

    public static function getLocationID(){
        $res = DB::select('select * from location where status != "t"');
        return $res;
    }

    public static function getCategoryID(){
        $res = DB::select('select * from category where status != "t"');
        return $res;
    }
}
