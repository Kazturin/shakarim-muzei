<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    use HasFactory;

    protected $fillable = [
       // 'id',
        'title_kz',
        'content_kz',
        'title_ru',
        'content_ru',
        'title_en',
        'content_en',
    ];
}
