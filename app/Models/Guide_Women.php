<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide_Women extends Model
{
    use HasFactory;
    protected $table  = 'guide_women';

    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at',
    ];
}
