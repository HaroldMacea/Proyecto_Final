<?php

namespace App\Repositories;

use App\Models\Detalle_venta;
use App\Repositories\BaseRepository;

/**
 * Class Detalle_ventaRepository
 * @package App\Repositories
 * @version November 18, 2020, 9:40 pm UTC
*/

class Detalle_ventaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pedido_id',
        'total_venta'
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
        return Detalle_venta::class;
    }
}
