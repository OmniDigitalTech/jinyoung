<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'file_name',
        'caption',
        'is_local',
        'type'
    ];

    public function pictureable()
    {
        return $this->morphTo();
    }

    public function getUrlAttribute()
    {
        if (is_null($this->path)) {
            return asset('images/logo_watermark.jpg');
        }

        return asset('storage/'.$this->path.'/'.$this->file_name);

    }
}
