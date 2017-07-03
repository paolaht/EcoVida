<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMaterialesModeloRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\MaterialesModeloRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class MaterialesModeloController extends AppBaseController
{

	/** @var  MaterialesModeloRepository */
	private $materialesModeloRepository;

	function __construct(MaterialesModeloRepository $materialesModeloRepo)
	{
		$this->materialesModeloRepository = $materialesModeloRepo;
	}

	/**
	 * Display a listing of the MaterialesModelo.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->materialesModeloRepository->search($input);

		$materialesModelos = $result[0];

		$attributes = $result[1];

		return view('materialesModelos.index')
		    ->with('materialesModelos', $materialesModelos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new MaterialesModelo.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('materialesModelos.create');
	}

	/**
	 * Store a newly created MaterialesModelo in storage.
	 *
	 * @param CreateMaterialesModeloRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateMaterialesModeloRequest $request)
	{
        $input = $request->all();

		$materialesModelo = $this->materialesModeloRepository->store($input);

		Flash::message('MaterialesModelo saved successfully.');

		return redirect(route('materialesModelos.index'));
	}

	/**
	 * Display the specified MaterialesModelo.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$materialesModelo = $this->materialesModeloRepository->findMaterialesModeloById($id);

		if(empty($materialesModelo))
		{
			Flash::error('MaterialesModelo not found');
			return redirect(route('materialesModelos.index'));
		}

		return view('materialesModelos.show')->with('materialesModelo', $materialesModelo);
	}

	/**
	 * Show the form for editing the specified MaterialesModelo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$materialesModelo = $this->materialesModeloRepository->findMaterialesModeloById($id);

		if(empty($materialesModelo))
		{
			Flash::error('MaterialesModelo not found');
			return redirect(route('materialesModelos.index'));
		}

		return view('materialesModelos.edit')->with('materialesModelo', $materialesModelo);
	}

	/**
	 * Update the specified MaterialesModelo in storage.
	 *
	 * @param  int    $id
	 * @param CreateMaterialesModeloRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateMaterialesModeloRequest $request)
	{
		$materialesModelo = $this->materialesModeloRepository->findMaterialesModeloById($id);

		if(empty($materialesModelo))
		{
			Flash::error('MaterialesModelo not found');
			return redirect(route('materialesModelos.index'));
		}

		$materialesModelo = $this->materialesModeloRepository->update($materialesModelo, $request->all());

		Flash::message('MaterialesModelo updated successfully.');

		return redirect(route('materialesModelos.index'));
	}

	/**
	 * Remove the specified MaterialesModelo from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$materialesModelo = $this->materialesModeloRepository->findMaterialesModeloById($id);

		if(empty($materialesModelo))
		{
			Flash::error('MaterialesModelo not found');
			return redirect(route('materialesModelos.index'));
		}

		$materialesModelo->delete();

		Flash::message('MaterialesModelo deleted successfully.');

		return redirect(route('materialesModelos.index'));
	}

}
