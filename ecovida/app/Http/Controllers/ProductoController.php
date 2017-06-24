<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateProductoRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\ProductoRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class ProductoController extends AppBaseController
{

	/** @var  ProductoRepository */
	private $productoRepository;

	function __construct(ProductoRepository $productoRepo)
	{
		$this->productoRepository = $productoRepo;
	}

	/**
	 * Display a listing of the Producto.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->productoRepository->search($input);

		$productos = $result[0];

		$attributes = $result[1];

		return view('productos.index')
		    ->with('productos', $productos)
		    ->with('attributes', $attributes);;
	}

	/**
	 * Show the form for creating a new Producto.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('productos.create');
	}

	/**
	 * Store a newly created Producto in storage.
	 *
	 * @param CreateProductoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateProductoRequest $request)
	{
        $input = $request->all();

		$producto = $this->productoRepository->store($input);

		Flash::message('Producto saved successfully.');

		return redirect(route('productos.index'));
	}

	/**
	 * Display the specified Producto.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$producto = $this->productoRepository->findProductoById($id);

		if(empty($producto))
		{
			Flash::error('Producto not found');
			return redirect(route('productos.index'));
		}

		return view('productos.show')->with('producto', $producto);
	}

	/**
	 * Show the form for editing the specified Producto.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$producto = $this->productoRepository->findProductoById($id);

		if(empty($producto))
		{
			Flash::error('Producto not found');
			return redirect(route('productos.index'));
		}

		return view('productos.edit')->with('producto', $producto);
	}

	/**
	 * Update the specified Producto in storage.
	 *
	 * @param  int    $id
	 * @param CreateProductoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateProductoRequest $request)
	{
		$producto = $this->productoRepository->findProductoById($id);

		if(empty($producto))
		{
			Flash::error('Producto not found');
			return redirect(route('productos.index'));
		}

		$producto = $this->productoRepository->update($producto, $request->all());

		Flash::message('Producto updated successfully.');

		return redirect(route('productos.index'));
	}

	/**
	 * Remove the specified Producto from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$producto = $this->productoRepository->findProductoById($id);

		if(empty($producto))
		{
			Flash::error('Producto not found');
			return redirect(route('productos.index'));
		}

		$producto->delete();

		Flash::message('Producto deleted successfully.');

		return redirect(route('productos.index'));
	}

}
