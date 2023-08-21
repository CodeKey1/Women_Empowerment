<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_plan extends Model
{
    use HasFactory;
    protected $table  = 'project_plan';

    protected $fillable = [
        'id',
        'name',
        'start_date',
        'end_date',
        'responsible',
        'follower',
        'project_id',
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function project_name(){

        return  $this->belongsTo(Project::class ,'project_id');
    }
}
