<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Requests\CreateMensajeRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\MensajeRepository;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	 	private $mensajeRepository;
	public function __construct(MensajeRepository $mensajeRepo)
	{
		$this->middleware('auth');
			$this->mensajeRepository = $mensajeRepo;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index(Request $request)
	{
	   $input = $request->all();

		$result = $this->mensajeRepository->search($input);

		$mensajes = $result[0];

		$attributes = $result[1];

		return view('app')
		    ->with('mensajes', $mensajes)
		    ->with('attributes', $attributes);
	}

}
