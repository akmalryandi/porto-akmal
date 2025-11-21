<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'year',
        'job_title',
        'company',
        'job_desc'
    ];
}
