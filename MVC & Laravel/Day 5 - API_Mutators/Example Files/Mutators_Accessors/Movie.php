<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // getters : Accessor in Laravel
    public function getTitleAttribute($title)
    {
        return strtoupper($title);
    }

    public function getInfoAttribute()
    {
        return "{$this->title} / {$this->date_of_release}";
    }

    // setters : Mutators in Laravel
    public function setTitleAttribute($newValue)
    {
        $this->attributes['title'] = strtolower($newValue);
    }
}
