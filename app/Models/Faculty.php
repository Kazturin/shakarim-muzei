<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [
        'name_kz',
        'name_ru',
        'name_en',
    ];
}
