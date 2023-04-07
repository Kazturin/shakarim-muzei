<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_kz',
        'title_ru',
        'title_en',
        'content_kz',
        'content_ru',
        'content_en',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(HistoryCategory::class,'category_id');
    }
}
