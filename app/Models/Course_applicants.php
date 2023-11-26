<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_applicants extends Model
{
    use HasFactory;
    protected $table  = 'course_applicants';
    protected $fillable = [
        'name',
        'mobile',
        'nid',
        'qualification',
        'email',
        'is_online',
        'course_id',
        'user_id',
        'created_at',
        'updated_at',
    ];
    public function course_name()
    {
        return  $this->belongsTo(Course::class, 'course_id');
    }
}
