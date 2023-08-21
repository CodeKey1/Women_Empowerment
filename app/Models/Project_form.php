<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_form extends Model
{
    use HasFactory;
    protected $table  = 'project_form';

    protected $fillable = [
        'id',
        'provided_value',
        'customer_categories',
        'project_access',
        'attract_clients',
        'income_source',
        'main_resorce',
        'main_activity',
        'partners',
        'cost',
        'project_id',
        'user_id',
        'created_at',
        'updated_at',
    ];

    public function project_name(){

        return  $this->belongsTo(Project::class ,'project_id');
    }
}
