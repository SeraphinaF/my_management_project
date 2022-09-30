<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    protected $fillable = [
        'project_name',
        'deadline',
        'updated_at',
        'created_at'
    ];
}
