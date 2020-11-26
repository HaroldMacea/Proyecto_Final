<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Clientes
 * @package App\Models
 * @version November 18, 2020, 9:23 pm UTC
 *
 * @property string $nit
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 */
class Clientes extends Model
{

    public $table = 'clientes';
    



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
