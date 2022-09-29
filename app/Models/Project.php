<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'project_name',
        'deadline',
        'updated_at',
        'created_at'
    ];
}
