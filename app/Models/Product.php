<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function ordersProducts() {
        return $this->hasMany(ProductOrder::class);
    }

    protected $fillable = [
        'title', 'img_path', 'description', 'price', 'quantity'
    ];
}
