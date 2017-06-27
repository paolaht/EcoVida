<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateMensajeRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\MensajeRepository;
use Mitul\Controller\AppBaseController;
use App\User;
use Response;
use Flash;

class MensajeController extends AppBaseController
{

	/** @var  MensajeRepository */
	private $mensajeRepository;

	function __construct(MensajeRepository $mensajeRepo)
	{
		$this->mensajeRepository = $mensajeRepo;
	}

	/**
	 * Display a listing of the Mensaje.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->mensajeRepository->search($input);

		$mensajes = $result[0];

		$attributes = $result[1];
		$usuarios = User::all();
		return view('mensajes.index')
		    ->with('mensajes', $mensajes)
		    ->with('attributes', $attributes)
		    ->with('usuarios',$usuarios);;
	}

	/**
	 * Show the form for creating a new Mensaje.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('mensajes.create');
	}

	/**
	 * Store a newly created Mensaje in storage.
	 *
	 * @param CreateMensajeRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateMensajeRequest $request)
	{
        $input = $request->all();

		$mensaje = $this->mensajeRepository->store($input);

		Flash::message('Mensaje saved successfully.');

		return redirect(route('mensajes.index'));
	}

	/**
	 * Display the specified Mensaje.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$mensaje = $this->mensajeRepository->findMensajeById($id);

		if(empty($mensaje))
		{
			Flash::error('Mensaje not found');
			return redirect(route('mensajes.index'));
		}

		return view('mensajes.show')->with('mensaje', $mensaje);
	}

	/**
	 * Show the form for editing the specified Mensaje.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mensaje = $this->mensajeRepository->findMensajeById($id);

		if(empty($mensaje))
		{
			Flash::error('Mensaje not found');
			return redirect(route('mensajes.index'));
		}

		return view('mensajes.edit')->with('mensaje', $mensaje);
	}

	/**
	 * Update the specified Mensaje in storage.
	 *
	 * @param  int    $id
	 * @param CreateMensajeRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateMensajeRequest $request)
	{
		$mensaje = $this->mensajeRepository->findMensajeById($id);

		if(empty($mensaje))
		{
			Flash::error('Mensaje not found');
			return redirect(route('mensajes.index'));
		}

		$mensaje = $this->mensajeRepository->update($mensaje, $request->all());

		Flash::message('Mensaje updated successfully.');

		return redirect(route('mensajes.index'));
	}

	/**
	 * Remove the specified Mensaje from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$mensaje = $this->mensajeRepository->findMensajeById($id);

		if(empty($mensaje))
		{
			Flash::error('Mensaje not found');
			return redirect(route('mensajes.index'));
		}

		$mensaje->delete();

		Flash::message('Mensaje deleted successfully.');

		return redirect(route('mensajes.index'));
	}

}
