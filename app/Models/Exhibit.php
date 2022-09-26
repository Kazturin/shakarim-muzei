<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_kz',
        'description_kz',
        'name_ru',
        'description_ru',
        'name_en',
        'description_en',
        'image',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(ExhibitCategory::class);
    }
}
