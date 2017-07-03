<?php

namespace App\Libraries\Repositories;


use App\Models\Compra;
use Illuminate\Support\Facades\Schema;

class CompraRepository
{

	/**
	 * Returns all Compras
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Compra::all();
	}

	public function search($input)
    {
        $query = Compra::query();

        $columns = Schema::getColumnListing('compras');
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
	 * Stores Compra into database
	 *
	 * @param array $input
	 *
	 * @return Compra
	 */
	public function store($input)
	{
		return Compra::create($input);
	}

	/**
	 * Find Compra by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Compra
	 */
	public function findCompraById($id)
	{
		return Compra::find($id);
	}

	/**
	 * Updates Compra into database
	 *
	 * @param Compra $compra
	 * @param array $input
	 *
	 * @return Compra
	 */
	public function update($compra, $input)
	{
		$compra->fill($input);
		$compra->save();

		return $compra;
	}
}