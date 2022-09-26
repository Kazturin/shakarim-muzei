<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExhibitCategory extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $fillable = [
        'title_kz',
        'title_ru',
        'title_en',
    ];
}
