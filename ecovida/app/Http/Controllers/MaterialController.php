<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMaterialRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\MaterialRepository;
use Mitul\Controller\AppBaseController;
use App\Libraries\Repositories\MensajeRepository;
use Response;
use Flash;

class MaterialController extends AppBaseController
{

	/** @var  MaterialRepository */
	private $materialRepository;

	private $mensajeRepository;
	function __construct(MaterialRepository $materialRepo, MensajeRepository $mensajeRepo)
	{
		$this->materialRepository = $materialRepo;

		$this->mensajeRepository = $mensajeRepo;
	}

	/**
	 * Display a listing of the Material.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->materialRepository->search($input);

		$materials = $result[0];

		$attributes = $result[1];

		$input2 = $request->all();

		$result2 = $this->mensajeRepository->search($input2);

		$mensajes = $result2[0];

		return view('materials.index')
		    ->with('materials', $materials)
		    ->with('attributes', $attributes)->with('mensajes', $mensajes);;;
	}

	/**
	 * Show the form for creating a new Material.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('materials.create');
	}

	/**
	 * Store a newly created Material in storage.
	 *
	 * @param CreateMaterialRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateMaterialRequest $request)
	{
        $input = $request->all();

		$material = $this->materialRepository->store($input);

		Flash::message('El material se ha agregado corectamente.');

		return redirect(route('materials.index'));
	}

	/**
	 * Display the specified Material.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$material = $this->materialRepository->findMaterialById($id);

		if(empty($material))
		{
			Flash::error('Material not found');
			return redirect(route('materials.index'));
		}

		return view('materials.show')->with('material', $material);
	}

	/**
	 * Show the form for editing the specified Material.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$material = $this->materialRepository->findMaterialById($id);

		if(empty($material))
		{
			Flash::error('Material not found');
			return redirect(route('materials.index'));
		}

		return view('materials.edit')->with('material', $material);
	}

	/**
	 * Update the specified Material in storage.
	 *
	 * @param  int    $id
	 * @param CreateMaterialRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateMaterialRequest $request)
	{
		$material = $this->materialRepository->findMaterialById($id);

		if(empty($material))
		{
			Flash::error('Material not found');
			return redirect(route('materials.index'));
		}

		$material = $this->materialRepository->update($material, $request->all());

		Flash::message('Material updated successfully.');

		return redirect(route('materials.index'));
	}

	/**
	 * Remove the specified Material from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$material = $this->materialRepository->findMaterialById($id);

		if(empty($material))
		{
			Flash::error('Material not found');
			return redirect(route('materials.index'));
		}

		$material->delete();

		Flash::message('Material deleted successfully.');

		return redirect(route('materials.index'));
	}

}
