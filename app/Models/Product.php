<?php

namespace App\Models;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SearchableTrait;

    public function ordersProducts() {
        return $this->hasMany(ProductOrder::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function presentPrice()
    {
        return '$' . number_format($this->price, 2);
    }

    protected $fillable = [
        'title', 'category_id', 'img_path', 'description', 'price', 'quantity', 'featured'
    ];

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.title' => 10,
            'products.description' => 2
        ]
    ];
}
