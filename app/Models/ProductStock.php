<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    //
    protected $table = 'product_stock';
    protected $fillable = [
        'id_product',
        'id_shop',
        'id_product_sale',
        'id_employee',
        'cost',
        'quantity',
        'stock_type',
        'stock_after',
    ];


    // Has relations to Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }

    // 

}
