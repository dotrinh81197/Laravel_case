<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function periodic()
    {
        return $this->belongsTo(Periodic::class);
    }
}
