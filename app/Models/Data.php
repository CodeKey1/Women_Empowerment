<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table  = 'data';
    protected $fillable = [
        'name',
        'type',
        'date',
        'file',
        'created_at',
        'updated_at',
    ];
}
