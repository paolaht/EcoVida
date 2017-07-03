<?php

namespace App\Libraries\Repositories;


use App\Models\Modelos;
use Illuminate\Support\Facades\Schema;

class ModelosRepository
{

	/**
	 * Returns all Modelos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Modelos::all();
	}

	public function search($input)
    {
        $query = Modelos::query();

        $columns = Schema::getColumnListing('modelos');
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
	 * Stores Modelos into database
	 *
	 * @param array $input
	 *
	 * @return Modelos
	 */
	public function store($input)
	{
		return Modelos::create($input);
	}

	/**
	 * Find Modelos by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Modelos
	 */
	public function findModelosById($id)
	{
		return Modelos::find($id);
	}

	/**
	 * Updates Modelos into database
	 *
	 * @param Modelos $modelos
	 * @param array $input
	 *
	 * @return Modelos
	 */
	public function update($modelos, $input)
	{
		$modelos->fill($input);
		$modelos->save();

		return $modelos;
	}
}