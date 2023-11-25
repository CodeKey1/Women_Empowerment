<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\type;

class Project extends Model
{
    use HasFactory;
    protected $table  = 'project';

    protected $fillable = [
        'id',
        'name',
        'type_id',
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
    public function project_type()
    {
        return  $this->belongsTo(Type::class, 'type_id');
    }
}
