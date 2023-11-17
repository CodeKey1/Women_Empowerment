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
        'state',
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function UserName()
    {
        return  $this->belongsTo(User::class, 'user_id');
    }
}
