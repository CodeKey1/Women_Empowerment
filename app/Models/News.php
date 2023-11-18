<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table  = 'news';
    protected $fillable = [
        'name',
        'brief',
        'details',
        'date',
        'image',
        'video',
        'created_at',
        'updated_at',
    ];
}
