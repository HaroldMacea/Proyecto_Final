<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductosAPIRequest;
use App\Http\Requests\API\UpdateProductosAPIRequest;
use App\Models\Productos;
use App\Repositories\ProductosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ProductosController
 * @package App\Http\Controllers\API
 */

class ProductosAPIController extends AppBaseController
{
    /** @var  ProductosRepository */
    private $productosRepository;

    public function __construct(ProductosRepository $productosRepo)
    {
        $this->productosRepository = $productosRepo;
    }

    /**
     * Display a listing of the Productos.
     * GET|HEAD /productos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $productos = $this->productosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($productos->toArray(), 'Productos retrieved successfully');
    }

    /**
     * Store a newly created Productos in storage.
     * POST /productos
     *
     * @param CreateProductosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProductosAPIRequest $request)
    {
        $input = $request->all();

        $productos = $this->productosRepository->create($input);

        return $this->sendResponse($productos->toArray(), 'Productos saved successfully');
    }

    /**
     * Display the specified Productos.
     * GET|HEAD /productos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Productos $productos */
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            return $this->sendError('Productos not found');
        }

        return $this->sendResponse($productos->toArray(), 'Productos retrieved successfully');
    }

    /**
     * Update the specified Productos in storage.
     * PUT/PATCH /productos/{id}
     *
     * @param int $id
     * @param UpdateProductosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductosAPIRequest $request)
    {
        $input = $request->all();

        /** @var Productos $productos */
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            return $this->sendError('Productos not found');
        }

        $productos = $this->productosRepository->update($input, $id);

        return $this->sendResponse($productos->toArray(), 'Productos updated successfully');
    }

    /**
     * Remove the specified Productos from storage.
     * DELETE /productos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Productos $productos */
        $productos = $this->productosRepository->find($id);

        if (empty($productos)) {
            return $this->sendError('Productos not found');
        }

        $productos->delete();

        return $this->sendSuccess('Productos deleted successfully');
    }
}
