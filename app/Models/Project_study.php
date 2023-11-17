<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_study extends Model
{
    use HasFactory;
    protected $table  = 'project_study';

    protected $fillable = [
        'id',
        'recommendation',
        'finance',
        'technical',
        'competitive',
        'market',
        'project_id',
        'created_at',
        'updated_at',
    ];

    public function project_name()
    {
        return  $this->belongsTo(Project::class, 'project_id');
    }
}
