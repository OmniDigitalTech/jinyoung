<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'product',
        'message'
    ];

    public function getProductsAttribute(){
        $product = [];
        foreach (json_decode($this->product) as $id){
            $product[] = Product::find($id);
        }

        return json_encode($product);
    }
}
