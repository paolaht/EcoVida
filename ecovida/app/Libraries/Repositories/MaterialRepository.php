<?php

namespace App\Libraries\Repositories;


use App\Models\Material;
use Illuminate\Support\Facades\Schema;

class MaterialRepository
{

	/**
	 * Returns all Materials
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Material::all();
	}

	public function search($input)
    {
        $query = Material::query();

        $columns = Schema::getColumnListing('materials');
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
	 * Stores Material into database
	 *
	 * @param array $input
	 *
	 * @return Material
	 */
	public function store($input)
	{
		return Material::create($input);
	}

	/**
	 * Find Material by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Material
	 */
	public function findMaterialById($id)
	{
		return Material::find($id);
	}

	/**
	 * Updates Material into database
	 *
	 * @param Material $material
	 * @param array $input
	 *
	 * @return Material
	 */
	public function update($material, $input)
	{
		$material->fill($input);
		$material->save();

		return $material;
	}
}