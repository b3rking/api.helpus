<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\handicap;


class Image extends Model
{

    protected $fillable = [
        'handicap_id',
    ];

    use HasFactory;

    public function handicap() {
        return $this->belongsTo(handicap::class);
    }
}
