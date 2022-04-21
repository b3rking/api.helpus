<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class handicap extends Model
{
    protected $guard = [];
    use HasFactory;

    public function user() {
        return $this->hasOne(User::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
