<?php

namespace App\Libraries\Repositories;


use App\Models\MaterialesModelo;
use Illuminate\Support\Facades\Schema;

class MaterialesModeloRepository
{

	/**
	 * Returns all MaterialesModelos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return MaterialesModelo::all();
	}

	public function search($input)
    {
        $query = MaterialesModelo::query();

        $columns = Schema::getColumnListing('materiales_modelos');
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
	 * Stores MaterialesModelo into database
	 *
	 * @param array $input
	 *
	 * @return MaterialesModelo
	 */
	public function store($input)
	{
		return MaterialesModelo::create($input);
	}

	/**
	 * Find MaterialesModelo by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|MaterialesModelo
	 */
	public function findMaterialesModeloById($id)
	{
		return MaterialesModelo::find($id);
	}

	/**
	 * Updates MaterialesModelo into database
	 *
	 * @param MaterialesModelo $materialesModelo
	 * @param array $input
	 *
	 * @return MaterialesModelo
	 */
	public function update($materialesModelo, $input)
	{
		$materialesModelo->fill($input);
		$materialesModelo->save();

		return $materialesModelo;
	}
}