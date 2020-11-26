<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Proveedores
 * @package App\Models
 * @version November 18, 2020, 8:54 pm UTC
 *
 * @property string $nit
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 */
class Proveedores extends Model
{

    public $table = 'proveedores';
    



    public $fillable = [
        'nit',
        'nombre',
        'direccion',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nit' => 'string',
        'nombre' => 'string',
        'direccion' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
