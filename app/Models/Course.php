<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table  = 'coures';
    protected $fillable = [
        'name',
        'details',
        'image',
        'date',
        'type_id',
        'created_at',
        'updated_at',
    ];
    public function type_name()
    {
        return  $this->belongsTo(Type::class, 'type_id');
    }
}
