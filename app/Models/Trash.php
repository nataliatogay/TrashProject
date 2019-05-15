<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Trash extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id', 'lat', 'lng'
    ];
}
