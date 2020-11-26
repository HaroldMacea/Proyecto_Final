<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Productos
 * @package App\Models
 * @version November 18, 2020, 9:14 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $proveedores
 * @property string $nombre
 * @property number $cantidad
 * @property number $precio
 * @property string $estado
 * @property integer $proveedor_id
 */
class Productos extends Model
{

    public $table = 'productos';
    



    public $fillable = [
        'nombre',
        'cantidad',
        'precio',
        'estado',
        'proveedor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'cantidad' => 'double',
        'precio' => 'double',
        'estado' => 'string',
        'proveedor_id' => 'integer'
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
    public function proveedores()
    {
        return $this->hasMany(\App\Models\proveedores::class, 'id', 'proveedor_id');
    }
}
