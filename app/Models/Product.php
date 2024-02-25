<?php

namespace App\Models;

use App\Traits\WithPictures;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, WithPictures;

    protected $fillable = [
        'name',
        'description',
        'is_best'
    ];
}
