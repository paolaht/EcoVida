<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCotizacionRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\CotizacionRepository;
use App\Libraries\Repositories\ModelosRepository;
use App\Libraries\Repositories\MaterialRepository;
use App\Libraries\Repositories\MensajeRepository;
use App\Libraries\Repositories\FotosModeloRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use DB;

class CotizacionController extends AppBaseController
{

	/** @var  CotizacionRepository */
	private $cotizacionRepository;
    private $mensajeRepository;
    private $modelosRepository;
    private $materialRepository;
    private $fotosModeloRepository;

	function __construct(CotizacionRepository $cotizacionRepo, MensajeRepository $mensajeRepo, ModelosRepository $modeloRepo, MaterialRepository $materialRepo, FotosModeloRepository $fotosModeloRepo)
	{
		$this->cotizacionRepository = $cotizacionRepo;
		$this->mensajeRepository = $mensajeRepo;
		$this->modelosRepository = $modeloRepo;
		$this->materialRepository = $materialRepo;
		$this->fotosModeloRepository = $fotosModeloRepo;
	}

	/**
	 * Display a listing of the Cotizacion.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		$input = $request->all();

		$input = $request->all();
	    $mensajes = $this->metodoMensajes($request);

		$result = $this->modelosRepository->search($input);

		$modelos = $result[0];

		$attributes = $result[1];

		$result4 = $this->fotosModeloRepository->search($input);

		$fotos = $result4[0];

		return view('modelos.indexCUSTOM')
		    ->with('modelos', $modelos)
		    ->with('attributes', $attributes)
		    ->with('mensajes', $mensajes)
		    ->with('fotos', $fotos);

	}

	/**
	 * Show the form for creating a new Cotizacion.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
		$mensajes = $this->metodoMensajes($request);
		return view('cotizacions.create')
		->with('mensajes', $mensajes);
	}

	/**
	 * Store a newly created Cotizacion in storage.
	 *
	 * @param CreateCotizacionRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateCotizacionRequest $request)
	{


       $input = $request->all();

		$cotizacion = $this->cotizacionRepository->store($input);

		Flash::message('Cotizacion se ha guardado correctamente');

		return redirect(route('cotizacions.index'));
	}

	/**
	 * Display the specified Cotizacion.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id, Request $request)
	{
		$cotizacion = $this->cotizacionRepository->findCotizacionById($id);
		$mensajes = $this->metodoMensajes($request);

		$input = $request->all();
    	$result2 = $this->modelosRepository->search($input);
        $modelos = $result2[0];
        $attributes = $result2[1];

        $input2 = $request->all();
        $result3 = $this->mensajeRepository->search($input);
        $mensajes2 = $result3[0];

        $input4 = $request->all();
        $result4 = $this->fotosModeloRepository->search($input4);
		$fotos = $result4[0];

		if(empty($cotizacion))
		{
			Flash::error('Cotizacion no encontrada');
			return redirect(route('cotizacions.index'));
		}

		return view('cotizacions.show')->with('cotizacion', $cotizacion)->with('mensajes', $mensajes2)->with('modelos', $modelos)->with('attributes',$attributes)->with('fotosModelos',$fotos);
	}

	/**
	 * Show the form for editing the specified Cotizacion.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, Request $request)
	{
		$cotizacion = $this->cotizacionRepository->findCotizacionById($id);
		$mensajes = $this->metodoMensajes($request);

		if(empty($cotizacion))
		{
			Flash::error('Cotizacion no encontrada');
			return redirect(route('cotizacions.index'));
		}

		return view('cotizacions.edit')->with('cotizacion', $cotizacion)->with('mensajes', $mensajes);
	}

	/**
	 * Update the specified Cotizacion in storage.
	 *
	 * @param  int    $id
	 * @param CreateCotizacionRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateCotizacionRequest $request)
	{
		$cotizacion = $this->cotizacionRepository->findCotizacionById($id);
	//	$mensajes = $this->metodoMensajes($request);

		if(empty($cotizacion))
		{
			Flash::error('Cotizacion no encontrada');
			return redirect(route('cotizacions.index'));
		}

		$cotizacion = $this->cotizacionRepository->update($cotizacion, $request->all());

		Flash::message('Cotizacion actualizada correctamente.');

		return redirect(route('cotizacions.index'));
	}

	/**
	 * Remove the specified Cotizacion from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$cotizacion = $this->cotizacionRepository->findCotizacionById($id);

		if(empty($cotizacion))
		{
			Flash::error('Cotizacion no encontrada');
			return redirect(route('cotizacions.index'));
		}

		$cotizacion->delete();

		Flash::message('Cotizacion eliminada correctamente.');

		return redirect(route('vistaCotizacions.index'));
	}

	function metodoMensajes(Request $request) {
        $input = $request->all();
    	$result2 = $this->mensajeRepository->search($input);
        $mensajes = $result2[0];

        return $mensajes;
    }

}
