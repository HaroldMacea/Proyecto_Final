<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pedidos
 * @package App\Models
 * @version November 18, 2020, 9:34 pm UTC
 *
 * @property \App\Models\clientes $clientes
 * @property \App\Models\productos $productos
 * @property integer $cliente_id
 * @property integer $producto_id
 */
class Pedidos extends Model
{

    public $table = 'pedidos';
    



    public $fillable = [
        'cliente_id',
        'producto_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cliente_id' => 'integer',
        'producto_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function clientes()
    {
        return $this->hasOne(\App\Models\clientes::class, 'id', 'cliente_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function productos()
    {
        return $this->hasOne(\App\Models\productos::class, 'id', 'producto_id');
    }
}
