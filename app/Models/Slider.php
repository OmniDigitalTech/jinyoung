<?php

namespace App\Models;

use App\Traits\WithPictures;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory, WithPictures;

    protected $fillable = [
        'title',
        'subtitle'
    ];
}
