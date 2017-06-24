<?php

namespace App\Libraries\Repositories;


use App\Models\Producto;
use Illuminate\Support\Facades\Schema;

class ProductoRepository
{

	/**
	 * Returns all Productos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Producto::all();
	}

	public function search($input)
    {
        $query = Producto::query();

        $columns = Schema::getColumnListing('productos');
        $attributes = array();

        foreach($columns as $attribute){
            if(isset($input[$attribute]))
            {
                $query->where($attribute, $input[$attribute]);
                $attributes[$attribute] =  $input[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        return [$query->get(), $attributes];

    }

	/**
	 * Stores Producto into database
	 *
	 * @param array $input
	 *
	 * @return Producto
	 */
	public function store($input)
	{
		return Producto::create($input);
	}

	/**
	 * Find Producto by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Producto
	 */
	public function findProductoById($id)
	{
		return Producto::find($id);
	}

	/**
	 * Updates Producto into database
	 *
	 * @param Producto $producto
	 * @param array $input
	 *
	 * @return Producto
	 */
	public function update($producto, $input)
	{
		$producto->fill($input);
		$producto->save();

		return $producto;
	}
}