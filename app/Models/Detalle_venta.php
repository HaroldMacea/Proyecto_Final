<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Detalle_venta
 * @package App\Models
 * @version November 18, 2020, 9:40 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $pedidos
 * @property integer $pedido_id
 * @property string $total_venta
 */
class Detalle_venta extends Model
{

    public $table = 'detalle_venta';
    



    public $fillable = [
        'pedido_id',
        'total_venta'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pedido_id' => 'integer',
        'total_venta' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pedidos()
    {
        return $this->hasMany(\App\Models\pedidos::class, 'id', 'pedido_id');
    }
}
