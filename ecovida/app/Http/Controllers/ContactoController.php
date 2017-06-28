<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateContactoRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\ContactoRepository;
use Mitul\Controller\AppBaseController;

use App\Libraries\Repositories\MensajeRepository;
use Response;
use Flash;

class ContactoController extends AppBaseController
{

	/** @var  ContactoRepository */
	private $contactoRepository;

	private $mensajeRepository;
	function __construct(ContactoRepository $contactoRepo,MensajeRepository $mensajeRepo)
	{
		$this->contactoRepository = $contactoRepo;
		$this->mensajeRepository = $mensajeRepo;
	}

	/**
	 * Display a listing of the Contacto.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->contactoRepository->search($input);

		$contactos = $result[0];

		$attributes = $result[1];
	 $input2 = $request->all();

		$result2 = $this->mensajeRepository->search($input2);

		$mensajes = $result2[0];

		$attributes = $result2[1];
		return view('contactos.index')
			->with('mensajes', $mensajes)
		    ->with('attributes', $attributes)
		    ->with('contactos', $contactos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Contacto.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('contactos.create');
	}

	/**
	 * Store a newly created Contacto in storage.
	 *
	 * @param CreateContactoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateContactoRequest $request)
	{
        $input = $request->all();

		$contacto = $this->contactoRepository->store($input);

		Flash::message('Contacto saved successfully.');

		return redirect(route('contactos.index'));
	}

	/**
	 * Display the specified Contacto.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$contacto = $this->contactoRepository->findContactoById($id);

		if(empty($contacto))
		{
			Flash::error('Contacto not found');
			return redirect(route('contactos.index'));
		}

		return view('contactos.show')->with('contacto', $contacto);
	}

	/**
	 * Show the form for editing the specified Contacto.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id, Request $request)
	{
		 $input2 = $request->all();

		$result2 = $this->mensajeRepository->search($input2);

		$mensajes = $result2[0];

		$attributes = $result2[1];


		$contacto = $this->contactoRepository->findContactoById($id);

		if(empty($contacto))
		{
			Flash::error('Contacto not found');
			return redirect(route('contactos.index'));
		}

		return view('contactos.edit')	->with('mensajes', $mensajes)
		    ->with('attributes', $attributes)->with('contacto', $contacto);
	}

	/**
	 * Update the specified Contacto in storage.
	 *
	 * @param  int    $id
	 * @param CreateContactoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateContactoRequest $request)
	{
		$contacto = $this->contactoRepository->findContactoById($id);

		if(empty($contacto))
		{
			Flash::error('Contacto not found');
			return redirect(route('contactos.index'));
		}

		$contacto = $this->contactoRepository->update($contacto, $request->all());

		Flash::message('Contacto updated successfully.');

		return redirect(route('contactos.index'));
	}

	/**
	 * Remove the specified Contacto from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$contacto = $this->contactoRepository->findContactoById($id);

		if(empty($contacto))
		{
			Flash::error('Contacto not found');
			return redirect(route('contactos.index'));
		}

		$contacto->delete();

		Flash::message('Contacto deleted successfully.');

		return redirect(route('contactos.index'));
	}

}
