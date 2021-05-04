<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract_product extends Model
{
    use HasFactory;
    protected $table = 'contract_product';
    public function contract()
    {

        return $this->belongsTo(Contract::class);
    }

    public function product()
    {

        return $this->belongsTo(Product::class);
    }

    public function price()
    {

        return $this->belongsTo(Price::class);
    }
}
