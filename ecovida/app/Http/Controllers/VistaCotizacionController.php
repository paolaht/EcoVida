<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libraries\Repositories\CotizacionRepository;
use App\Libraries\Repositories\MensajeRepository;
use App\Libraries\Repositories\ModelosRepository;


use Illuminate\Http\Request;

class VistaCotizacionController extends Controller {


	private $cotizacionRepository;
    private $mensajeRepository;
    private $modelosRepository;

    	function __construct(CotizacionRepository $cotizacionRepo, MensajeRepository $mensajeRepo, modelosRepository $modelosRepo)
	{
		$this->cotizacionRepository = $cotizacionRepo;
		$this->mensajeRepository = $mensajeRepo;
		$this->modelosRepository= $modelosRepo;

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$input = $request->all();
	    $mensajes = $this->metodoMensajes($request);

		$result = $this->cotizacionRepository->search($input);

		$cotizacions = $result[0];

		$attributes = $result[1];

		$input2 = $request->all();
		$result2 = $this->modelosRepository->search($input2);
		$modelos = $result2[0];



		return view('cotizacions.index')
		    ->with('cotizacions', $cotizacions)
		    ->with('attributes', $attributes)
		    ->with('mensajes', $mensajes)
		    ->with('modelos', $modelos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	function metodoMensajes(Request $request) {
         $input = $request->all();
    	$result2 = $this->mensajeRepository->search($input);
        $mensajes = $result2[0];

        return $mensajes;
    }

}
