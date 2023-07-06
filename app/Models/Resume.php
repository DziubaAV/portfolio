<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'profile_text',
        'address',
        'phone',
        'email',
        'social_media',
        'skills',
        'skills_lvl',
        'languages',
        'languages_lvl',
        'qualities',
        'education',
        'specialization',
        'education_date',
        'experience',
        'job_title',
        'experience_date',
        'training',
        'training_date',
        'interests',
        'interests_icon',
    ];
}
