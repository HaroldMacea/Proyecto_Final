<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetalle_ventaRequest;
use App\Http\Requests\UpdateDetalle_ventaRequest;
use App\Repositories\Detalle_ventaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Detalle_ventaController extends AppBaseController
{
    /** @var  Detalle_ventaRepository */
    private $detalleVentaRepository;

    public function __construct(Detalle_ventaRepository $detalleVentaRepo)
    {
        $this->detalleVentaRepository = $detalleVentaRepo;
    }

    /**
     * Display a listing of the Detalle_venta.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detalleVentas = $this->detalleVentaRepository->paginate(10);

        return view('detalle_ventas.index')
            ->with('detalleVentas', $detalleVentas);
    }

    /**
     * Show the form for creating a new Detalle_venta.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalle_ventas.create');
    }

    /**
     * Store a newly created Detalle_venta in storage.
     *
     * @param CreateDetalle_ventaRequest $request
     *
     * @return Response
     */
    public function store(CreateDetalle_ventaRequest $request)
    {
        $input = $request->all();

        $detalleVenta = $this->detalleVentaRepository->create($input);

        Flash::success('Detalle Venta saved successfully.');

        return redirect(route('detalleVentas.index'));
    }

    /**
     * Display the specified Detalle_venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detalleVenta = $this->detalleVentaRepository->find($id);

        if (empty($detalleVenta)) {
            Flash::error('Detalle Venta not found');

            return redirect(route('detalleVentas.index'));
        }

        return view('detalle_ventas.show')->with('detalleVenta', $detalleVenta);
    }

    /**
     * Show the form for editing the specified Detalle_venta.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detalleVenta = $this->detalleVentaRepository->find($id);

        if (empty($detalleVenta)) {
            Flash::error('Detalle Venta not found');

            return redirect(route('detalleVentas.index'));
        }

        return view('detalle_ventas.edit')->with('detalleVenta', $detalleVenta);
    }

    /**
     * Update the specified Detalle_venta in storage.
     *
     * @param int $id
     * @param UpdateDetalle_ventaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDetalle_ventaRequest $request)
    {
        $detalleVenta = $this->detalleVentaRepository->find($id);

        if (empty($detalleVenta)) {
            Flash::error('Detalle Venta not found');

            return redirect(route('detalleVentas.index'));
        }

        $detalleVenta = $this->detalleVentaRepository->update($request->all(), $id);

        Flash::success('Detalle Venta updated successfully.');

        return redirect(route('detalleVentas.index'));
    }

    /**
     * Remove the specified Detalle_venta from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detalleVenta = $this->detalleVentaRepository->find($id);

        if (empty($detalleVenta)) {
            Flash::error('Detalle Venta not found');

            return redirect(route('detalleVentas.index'));
        }

        $this->detalleVentaRepository->delete($id);

        Flash::success('Detalle Venta deleted successfully.');

        return redirect(route('detalleVentas.index'));
    }
}
