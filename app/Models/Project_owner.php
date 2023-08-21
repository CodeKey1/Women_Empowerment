<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_owner extends Model
{
    use HasFactory;
    protected $table  = 'project_owner';

    protected $fillable = [
        'id',
        'nid',
        'email',
        'name',
        'phone',
        'address',
        'fund',
        'project_id',
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function project_name(){

        return  $this->belongsTo(Project::class ,'project_id');
    }
}
