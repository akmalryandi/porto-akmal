<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'image', 'link'];

    public function tools()
    {
        return $this->belongsToMany(Tool::class, 'project_tool');
    }
}
