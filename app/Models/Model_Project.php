<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Project extends Model
{
    use HasFactory;
    protected $table  = 'old-project';

    protected $fillable = [
        'name',
        'details',
        'image',
        'created_at',
        'updated_at',
    ];
}
