<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateModelosRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\MaterialRepository;
use App\Libraries\Repositories\ModelosRepository;
use Mitul\Controller\AppBaseController;
use App\Libraries\Repositories\MensajeRepository;
use Response;
use Flash;

class ModelosController extends AppBaseController
{

	/** @var  ModelosRepository */
	private $modelosRepository;
	private $mensajeRepository;
		private $materialRepository;
	function __construct(ModelosRepository $modelosRepo,MensajeRepository $mensajeRepo,MaterialRepository $materialRepo)
	{
		$this->modelosRepository = $modelosRepo;
		$this->mensajeRepository = $mensajeRepo;
		$this->materialRepository = $materialRepo;
	}

	/**
	 * Display a listing of the Modelos.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->modelosRepository->search($input);

		$modelos = $result[0];

		$attributes = $result[1];

		$input2 = $request->all();

		$result2 = $this->mensajeRepository->search($input2);

		$mensajes = $result2[0];

		$input3 = $request->all();

		$result3 = $this->materialRepository->search($input3);

		$materials = $result3[0];



		return view('modelos.index')
		    ->with('modelos', $modelos)
		    ->with('attributes', $attributes)
		    ->with('materials', $materials)
		    ->with('attributes', $attributes)
		    ->with('mensajes', $mensajes);;;
	}

	/**
	 * Show the form for creating a new Modelos.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('modelos.create');
	}

	/**
	 * Store a newly created Modelos in storage.
	 *
	 * @param CreateModelosRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateModelosRequest $request)
	{
        $input = $request->all();

		$modelos = $this->modelosRepository->store($input);

		Flash::message('Modelos saved successfully.');

		return redirect(route('modelos.index'));
	}

	/**
	 * Display the specified Modelos.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$modelos = $this->modelosRepository->findModelosById($id);

		if(empty($modelos))
		{
			Flash::error('Modelos not found');
			return redirect(route('modelos.index'));
		}

		return view('modelos.show')->with('modelos', $modelos);
	}

	/**
	 * Show the form for editing the specified Modelos.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$modelos = $this->modelosRepository->findModelosById($id);

		if(empty($modelos))
		{
			Flash::error('Modelos not found');
			return redirect(route('modelos.index'));
		}

		return view('modelos.edit')->with('modelos', $modelos);
	}

	/**
	 * Update the specified Modelos in storage.
	 *
	 * @param  int    $id
	 * @param CreateModelosRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateModelosRequest $request)
	{
		$modelos = $this->modelosRepository->findModelosById($id);

		if(empty($modelos))
		{
			Flash::error('Modelos not found');
			return redirect(route('modelos.index'));
		}

		$modelos = $this->modelosRepository->update($modelos, $request->all());

		Flash::message('Modelos updated successfully.');

		return redirect(route('modelos.index'));
	}

	/**
	 * Remove the specified Modelos from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$modelos = $this->modelosRepository->findModelosById($id);

		if(empty($modelos))
		{
			Flash::error('Modelos not found');
			return redirect(route('modelos.index'));
		}

		$modelos->delete();

		Flash::message('Modelos deleted successfully.');

		return redirect(route('modelos.index'));
	}

}
