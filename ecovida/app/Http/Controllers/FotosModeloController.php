<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateFotosModeloRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\FotosModeloRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class FotosModeloController extends AppBaseController
{

	/** @var  FotosModeloRepository */
	private $fotosModeloRepository;

	function __construct(FotosModeloRepository $fotosModeloRepo)
	{
		$this->fotosModeloRepository = $fotosModeloRepo;
	}

	/**
	 * Display a listing of the FotosModelo.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->fotosModeloRepository->search($input);

		$fotosModelos = $result[0];

		$attributes = $result[1];

		return view('fotosModelos.index')
		    ->with('fotosModelos', $fotosModelos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new FotosModelo.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('fotosModelos.create');
	}

	/**
	 * Store a newly created FotosModelo in storage.
	 *
	 * @param CreateFotosModeloRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateFotosModeloRequest $request)
	{
        $input = $request->all();

		$fotosModelo = $this->fotosModeloRepository->store($input);

		Flash::message('FotosModelo saved successfully.');

		return redirect(route('fotosModelos.index'));
	}

	/**
	 * Display the specified FotosModelo.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$fotosModelo = $this->fotosModeloRepository->findFotosModeloById($id);

		if(empty($fotosModelo))
		{
			Flash::error('FotosModelo not found');
			return redirect(route('fotosModelos.index'));
		}

		return view('fotosModelos.show')->with('fotosModelo', $fotosModelo);
	}

	/**
	 * Show the form for editing the specified FotosModelo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$fotosModelo = $this->fotosModeloRepository->findFotosModeloById($id);

		if(empty($fotosModelo))
		{
			Flash::error('FotosModelo not found');
			return redirect(route('fotosModelos.index'));
		}

		return view('fotosModelos.edit')->with('fotosModelo', $fotosModelo);
	}

	/**
	 * Update the specified FotosModelo in storage.
	 *
	 * @param  int    $id
	 * @param CreateFotosModeloRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateFotosModeloRequest $request)
	{
		$fotosModelo = $this->fotosModeloRepository->findFotosModeloById($id);

		if(empty($fotosModelo))
		{
			Flash::error('FotosModelo not found');
			return redirect(route('fotosModelos.index'));
		}

		$fotosModelo = $this->fotosModeloRepository->update($fotosModelo, $request->all());

		Flash::message('FotosModelo updated successfully.');

		return redirect(route('fotosModelos.index'));
	}

	/**
	 * Remove the specified FotosModelo from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$fotosModelo = $this->fotosModeloRepository->findFotosModeloById($id);

		if(empty($fotosModelo))
		{
			Flash::error('FotosModelo not found');
			return redirect(route('fotosModelos.index'));
		}

		$fotosModelo->delete();

		Flash::message('FotosModelo deleted successfully.');

		return redirect(route('fotosModelos.index'));
	}

}
