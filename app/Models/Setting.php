<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_name',
        'site_logo',
        'facebook_link',
        'twitter_link',
        'youtube_link',
        'github_link',
        'address',
        'phone',
        'about_titile',
        'about_content'
    ];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];
}
