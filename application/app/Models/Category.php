<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function setSlugAttribute($value){
        $this->attributes['slug'] = \Str::slug($value);
    }

    public function devices() {
        return $this->hasMany(Device::class);
    }
}
