<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contract_product()
    {
        return $this->belongsTo(Contract_product::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }
}
