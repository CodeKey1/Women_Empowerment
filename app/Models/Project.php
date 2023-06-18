<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table  = 'project';

    protected $fillable = [
        'name',
        'email',
        'role',
        'phone',
        'city',
        'about',
        'type_id',
        'created_at',
        'updated_at',
    ];

    public function project_type(){

        return  $this->belongsTo(Type::class ,'type_id');
    }
}
