<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'quantidade', 
        'preco_unitario',
        'data_compra',
        'supplier_id'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }
}
