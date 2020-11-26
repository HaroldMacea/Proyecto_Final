<?php

namespace App\Repositories;

use App\Models\Pedidos;
use App\Repositories\BaseRepository;

/**
 * Class PedidosRepository
 * @package App\Repositories
 * @version November 18, 2020, 9:34 pm UTC
*/

class PedidosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cliente_id',
        'producto_id'
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
        return Pedidos::class;
    }
}
