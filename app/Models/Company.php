<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company';

    protected $fillable = [
        'id',
        'name',
        'email',
        'owner',
        'cellphone',
        'status'
    ];

    public function statusCode(){
        $arr_ = [
            'a' => 'success',
            'p' => 'secondary',
            't' => 'warning'
        ];
        return $arr_[$this->status];
    }

    public function companyStatus($status){
        switch ($status) {
            case "a": echo "a";
                break;
            case "p": echo "p";
                break;
        }
    }

}
