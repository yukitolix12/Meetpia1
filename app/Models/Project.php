<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'contents',
        'image',
        'user_id',
        'genre',
        'date',
        'time',
        'location',
    ];




    use HasFactory;

    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function joins()
    {
        return $this->hasMany('App\Models\Join');
    }

    public function favorites()
    {
        return $this->hasMany('App\Models\Favorite');
    }
}
