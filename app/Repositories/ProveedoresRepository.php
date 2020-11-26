<?php

namespace App\Repositories;

use App\Models\Proveedores;
use App\Repositories\BaseRepository;

/**
 * Class ProveedoresRepository
 * @package App\Repositories
 * @version November 18, 2020, 8:54 pm UTC
*/

class ProveedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nit',
        'nombre',
        'direccion',
        'telefono'
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
        return Proveedores::class;
    }
}
