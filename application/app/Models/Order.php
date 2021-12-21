<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'description',
        'devices',
    ];

    protected $casts = [
        'devices' => 'collection'
    ];

    use HasFactory;
}
