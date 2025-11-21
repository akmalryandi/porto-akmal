<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'email',
        'photo',
        'galery',
        'phone',
        'linkedin',
        'github',
        'bio',
        'about'
    ];
}
