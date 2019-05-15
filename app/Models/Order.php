<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function ordersProducts() {
        return $this->hasMany(ProductOrder::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id', 'address'
    ];
}
