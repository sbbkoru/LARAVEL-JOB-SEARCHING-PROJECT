<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;
    protected $table = 'search';

    protected $fillable = [
        'id',
        'user_id',
        'location_id',
        'category_id'
    ];
}
