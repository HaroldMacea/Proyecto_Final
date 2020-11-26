<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Categoria
 * @package App\Models
 * @version November 18, 2020, 8:57 pm UTC
 *
 * @property string $nombre
 * @property string $descripcion
 */
class Categoria extends Model
{

    public $table = 'categoria';
    



    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
