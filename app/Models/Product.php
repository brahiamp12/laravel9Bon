<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use HasFactory, Notifiable;
    
    protected $primaryKey = 'id_product';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $table = 'products';

    protected $fillable = [
        'id_category',
        'type',
        'reference',
        'name',
        'composed',
        'description',
        'cost',
        'price',
        'id_unidad',
        'id_tipo',
        'id_cuenta_ingreso',
        'id_cuenta_inventario',
        'for_sale',
        'stockable',
        'active',
        'id_cuenta_costo',
        'id_cuenta_descuento',
        'for_pos',
        'combo',
        'produccion',
    ];

    // hasmany relation con productstocktotal
    public function productStockTotals(): HasMany
    {
        return $this->hasMany(ProductStockTotal::class, 'id_product', 'id_product');
    }

    // hasmany
    public function productStocks()
{
    return $this->hasMany(ProductStock::class, 'id_product', 'id_product');
}

}
