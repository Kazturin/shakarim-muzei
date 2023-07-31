<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_kz',
        'title_ru',
        'title_en',
        'description_kz',
        'description_ru',
        'description_en',
        'filename',
    ];
}
