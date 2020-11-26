<?php

namespace App\Repositories;

use App\Models\Productos;
use App\Repositories\BaseRepository;

/**
 * Class ProductosRepository
 * @package App\Repositories
 * @version November 18, 2020, 9:14 pm UTC
*/

class ProductosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'cantidad',
        'precio',
        'estado',
        'proveedor_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Productos::class;
    }
}
