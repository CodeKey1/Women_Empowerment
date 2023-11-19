<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table  = 'project';

    protected $fillable = [
        'id',
        'name',
        'category',
        'idea',
        'goal',
        'innovation',
        'future',
        'location',
        'smart',
        'trail',
        'email',
        'date',
        'owner_id',
        'state',
        'created_at',
        'updated_at',
    ];

    public function project_owner()
    {
        return  $this->belongsTo(Project_owner::class, 'owner_id');
    }
}
