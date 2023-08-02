<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_performane extends Model
{
    use HasFactory;
    protected $table  = 'project_performane';

    protected $fillable = [
        'id',
        'name',
        'period',
        'unit',
        'target',
        'measurement',
        'project_id',
        'created_at',
        'updated_at',
    ];

    public function project_name(){

        return  $this->belongsTo(Project::class ,'project_id');
    }
}
