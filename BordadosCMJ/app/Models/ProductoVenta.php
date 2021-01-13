<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoVenta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','id_venta','id_producto','cantidad','precio','subtotal'
    ];
}
