<?php

namespace App\Libraries\Repositories;


use App\Models\Mantenimiento;
use Illuminate\Support\Facades\Schema;

class MantenimientoRepository
{

	/**
	 * Returns all Mantenimientos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Mantenimiento::all();
	}

	public function search($input)
    {
        $query = Mantenimiento::query();

        $columns = Schema::getColumnListing('mantenimientos');
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
	 * Stores Mantenimiento into database
	 *
	 * @param array $input
	 *
	 * @return Mantenimiento
	 */
	public function store($input)
	{
		return Mantenimiento::create($input);
	}

	/**
	 * Find Mantenimiento by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Mantenimiento
	 */
	public function findMantenimientoById($id)
	{
		return Mantenimiento::find($id);
	}

	/**
	 * Updates Mantenimiento into database
	 *
	 * @param Mantenimiento $mantenimiento
	 * @param array $input
	 *
	 * @return Mantenimiento
	 */
	public function update($mantenimiento, $input)
	{
		$mantenimiento->fill($input);
		$mantenimiento->save();

		return $mantenimiento;
	}
}