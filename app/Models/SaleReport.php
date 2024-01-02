<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleReport extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'product_qty'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
