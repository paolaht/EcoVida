<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMantenimientoRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\MantenimientoRepository;
use App\Libraries\Repositories\MensajeRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class MantenimientoController extends AppBaseController
{

	/** @var  MantenimientoRepository */
	private $mantenimientoRepository;
	private $mensajeRepository;

	function __construct(MantenimientoRepository $mantenimientoRepo, MensajeRepository $mensajeRepo)
	{
		$this->mantenimientoRepository = $mantenimientoRepo;
		$this->mensajeRepository = $mensajeRepo;
	}

	/**
	 * Display a listing of the Mantenimiento.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();
	    $mensajes = $this->metodoMensajes($request);

		$result = $this->mantenimientoRepository->search($input);

		$mantenimientos = $result[0];

		$attributes = $result[1];

		return view('mantenimientos.index')
		    ->with('mantenimientos', $mantenimientos)
		    ->with('attributes', $attributes)
    		->with('mensajes', $mensajes);
	}

	/**
	 * Show the form for creating a new Mantenimiento.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		$mensajes = $this->metodoMensajes($request);
		return view('mantenimientos.create')
        ->with('mensajes', $mensajes);
	}

	/**
	 * Store a newly created Mantenimiento in storage.
	 *
	 * @param CreateMantenimientoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateMantenimientoRequest $request)
	{
        $input = $request->all();

		$mantenimiento = $this->mantenimientoRepository->store($input);

		Flash::message('Mantenimiento saved successfully.');

		return redirect(route('mantenimientos.index'));
	}

	/**
	 * Display the specified Mantenimiento.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id, Request $request)
	{
		$mantenimiento = $this->mantenimientoRepository->findMantenimientoById($id);

		$mensajes = $this->metodoMensajes($request);

		if(empty($mantenimiento))
		{
			Flash::error('Mantenimiento not found');
			return redirect(route('mantenimientos.index'));
		}

		return view('mantenimientos.show')->with('mantenimiento', $mantenimiento)->with('mensajes', $mensajes);
	}

	/**
	 * Show the form for editing the specified Mantenimiento.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, Request $request)
	{
		$mantenimiento = $this->mantenimientoRepository->findMantenimientoById($id);

		$mensajes = $this->metodoMensajes($request);

		if(empty($mantenimiento))
		{
			Flash::error('Mantenimiento not found');
			return redirect(route('mantenimientos.index'));
		}

		return view('mantenimientos.edit')->with('mantenimiento', $mantenimiento)->with('mensajes', $mensajes);
	}

	/**
	 * Update the specified Mantenimiento in storage.
	 *
	 * @param  int    $id
	 * @param CreateMantenimientoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateMantenimientoRequest $request)
	{
		$mantenimiento = $this->mantenimientoRepository->findMantenimientoById($id);

		$mensajes = $this->metodoMensajes($request);

		if(empty($mantenimiento))
		{
			Flash::error('Mantenimiento not found');
			return redirect(route('mantenimientos.index'))->with('mensajes', $mensajes);
		}

		$mantenimiento = $this->mantenimientoRepository->update($mantenimiento, $request->all());

		Flash::message('Mantenimiento updated successfully.');

		return redirect(route('mantenimientos.index'))->with('mensajes', $mensajes);
	}

	/**
	 * Remove the specified Mantenimiento from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$mantenimiento = $this->mantenimientoRepository->findMantenimientoById($id);

		if(empty($mantenimiento))
		{
			Flash::error('Mantenimiento not found');
			return redirect(route('mantenimientos.index'));
		}

		$mantenimiento->delete();

		Flash::message('Mantenimiento deleted successfully.');

		return redirect(route('mantenimientos.index'));
	}

    function metodoMensajes(Request $request) {
         $input = $request->all();
    	$result2 = $this->mensajeRepository->search($input);
        $mensajes = $result2[0];

        return $mensajes;
    }
}
