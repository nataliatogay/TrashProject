<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

/**
 * @property int $user_id
 * @property App\User $user
 * @method void foo(int $a)
 */
class Trash extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'user_id', 'lat', 'lng'
    ];
}

