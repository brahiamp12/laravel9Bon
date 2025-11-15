<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductStockTotal extends Model
{
    // 
    protected $table = 'product_stock_total';
    protected $fillable = [
        'id_product',
        'id_shop',
        'stock',
        'costo',
    ];
    // Has relations to Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }

    
}
