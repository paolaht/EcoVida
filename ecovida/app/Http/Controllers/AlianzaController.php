<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateAlianzaRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\AlianzaRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class AlianzaController extends AppBaseController
{

	/** @var  AlianzaRepository */
	private $alianzaRepository;

	function __construct(AlianzaRepository $alianzaRepo)
	{
		$this->alianzaRepository = $alianzaRepo;
	}

	/**
	 * Display a listing of the Alianza.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->alianzaRepository->search($input);

		$alianzas = $result[0];

		$attributes = $result[1];

		return view('alianzas.index')
		    ->with('alianzas', $alianzas)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Alianza.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('alianzas.create');
	}

	/**
	 * Store a newly created Alianza in storage.
	 *
	 * @param CreateAlianzaRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateAlianzaRequest $request)
	{
		$input = $request->all();
		$alianza = $this->alianzaRepository->store($input);


       //obtenemos el nombre del archivo


	$file = $request->file('imagen');
	 $nombre = $file->getClientOriginalName();
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($file,  \File::get($file));

		Flash::message('La alianza se ha guardado correctamente.');

		return redirect(route('alianzas.index'));
	}

	/**
	 * Display the specified Alianza.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$alianza = $this->alianzaRepository->findAlianzaById($id);

		if(empty($alianza))
		{
			Flash::error('No se ha encontrado la información solicitada');
			return redirect(route('alianzas.index'));
		}

		return view('alianzas.show')->with('alianza', $alianza);
	}

	/**
	 * Show the form for editing the specified Alianza.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alianza = $this->alianzaRepository->findAlianzaById($id);

		if(empty($alianza))
		{
			Flash::error('Alianza not found');
			return redirect(route('alianzas.index'));
		}

		return view('alianzas.edit')->with('alianza', $alianza);
	}

	/**
	 * Update the specified Alianza in storage.
	 *
	 * @param  int    $id
	 * @param CreateAlianzaRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateAlianzaRequest $request)
	{
		$alianza = $this->alianzaRepository->findAlianzaById($id);

		if(empty($alianza))
		{
			Flash::error('Alianza not found');
			return redirect(route('alianzas.index'));
		}

		$alianza = $this->alianzaRepository->update($alianza, $request->all());

		Flash::message('Alianza updated successfully.');

		return redirect(route('alianzas.index'));
	}

	/**
	 * Remove the specified Alianza from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$alianza = $this->alianzaRepository->findAlianzaById($id);

		if(empty($alianza))
		{
			Flash::error('Alianza no encontrada');
			return redirect(route('alianzas.index'));
		}

		$alianza->delete();

		Flash::message('La alianza fue eliminada correctamente .');

		return redirect(route('alianzas.index'));
	}

}
