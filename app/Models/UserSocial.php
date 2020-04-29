<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    protected $table = 'user_social';

    protected $guarded = [];

    // public function user()
    // {
    //     return $this->hasOne(User::class, 'id', 'user_id');
    // }

    public function user()
    {
        return $this->morphTo();
    }
}