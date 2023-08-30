<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courese_detail extends Model
{
    use HasFactory;
    protected $table  = 'courese_detail';
    protected $fillable = [
        'course_id',
        'pre_req',
        'description',
        'for_whom',
        'location',
        'video',
        'presentation',
        'created_at',
        'updated_at',
    ];
}
