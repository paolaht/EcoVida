<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCompraRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\CompraRepository;
use App\Libraries\Repositories\MensajeRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class CompraController extends AppBaseController
{

	/** @var  CompraRepository */
	private $compraRepository;
    private $mensajeRepository;


	function __construct(CompraRepository $compraRepo, MensajeRepository $mensajeRepo)
	{
		$this->compraRepository = $compraRepo;
		$this->mensajeRepository = $mensajeRepo;
	}

	/**
	 * Display a listing of the Compra.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();
	    $mensajes = $this->metodoMensajes($request);

		$result = $this->compraRepository->search($input);

		$compras = $result[0];

		$attributes = $result[1];

		return view('compras.index')
		    ->with('compras', $compras)
		    ->with('attributes', $attributes)
		    ->with('mensajes', $mensajes);
	}

	/**
	 * Show the form for creating a new Compra.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		$mensajes = $this->metodoMensajes($request);
		return view('compras.create')
		->with('mensajes', $mensajes);
	}

	/**
	 * Store a newly created Compra in storage.
	 *
	 * @param CreateCompraRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCompraRequest $request)
	{
        $input = $request->all();

		$compra = $this->compraRepository->store($input);

		Flash::message('Compra saved successfully.');

		return redirect(route('compras.index'));
	}

	/**
	 * Display the specified Compra.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id, Request $request)
	{
		$compra = $this->compraRepository->findCompraById($id);
		$mensajes = $this->metodoMensajes($request);
		if(empty($compra))
		{
			Flash::error('Compra not found');
			return redirect(route('compras.index'));
		}

		return view('compras.show')->with('compra', $compra)->with('mensajes', $mensajes);
	}

	/**
	 * Show the form for editing the specified Compra.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, Request $request)
	{
		$compra = $this->compraRepository->findCompraById($id);
		$mensajes = $this->metodoMensajes($request);
		if(empty($compra))
		{
			Flash::error('Compra not found');
			return redirect(route('compras.index'));
		}

		return view('compras.edit')->with('compra', $compra)->with('mensajes', $mensajes);
	}

	/**
	 * Update the specified Compra in storage.
	 *
	 * @param  int    $id
	 * @param CreateCompraRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateCompraRequest $request)
	{
		$compra = $this->compraRepository->findCompraById($id);
		$mensajes = $this->metodoMensajes($request);

		if(empty($compra))
		{
			Flash::error('Compra not found');
			return redirect(route('compras.index'));
		}

		$compra = $this->compraRepository->update($compra, $request->all());

		Flash::message('Compra updated successfully.');

		return redirect(route('compras.index'));
	}

	/**
	 * Remove the specified Compra from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$compra = $this->compraRepository->findCompraById($id);

		if(empty($compra))
		{
			Flash::error('Compra not found');
			return redirect(route('compras.index'));
		}

		$compra->delete();

		Flash::message('Compra deleted successfully.');

		return redirect(route('compras.index'));
	}

	 function metodoMensajes(Request $request) {
         $input = $request->all();
    	$result2 = $this->mensajeRepository->search($input);
        $mensajes = $result2[0];

        return $mensajes;
    }

}
