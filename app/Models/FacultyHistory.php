<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_kz',
        'title_ru',
        'title_en',
        'content_kz',
        'content_ru',
        'content_en',
        'faculty_id'
    ];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }
}
