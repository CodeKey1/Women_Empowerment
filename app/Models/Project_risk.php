<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table  = 'project_risk';

    protected $fillable = [
        'id',
        'name',
        'degree',
        'possibility',
        'evaluation',
        'procedures',
        'project_id',
        'created_at',
        'updated_at',
    ];

    public function project_name(){

        return  $this->belongsTo(Project::class ,'project_id');
    }
}
