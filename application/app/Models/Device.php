<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;


class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'body',
        'price',
        'attributes'
    ];

    protected $casts = [
        'attributes' => 'json'
    ];

    public function getImageLink(): string
    {
        return \Storage::url($this->image);
    }

    public function uploadImage(UploadedFile $file)
    {
        $this->image = $file->store('devices/', 'public');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supports()
    {
        return $this->belongsToMany(Device::class, 'device_support', null,'support_id');
    }

    public function parents()
    {
        return $this->belongsToMany(Device::class, 'device_support', 'support_id',);
    }
}
