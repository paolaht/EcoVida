<?php

namespace App\Libraries\Repositories;


use App\Models\Mensaje;
use Illuminate\Support\Facades\Schema;

class MensajeRepository
{

	/**
	 * Returns all Mensajes
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Mensaje::all();
	}

	public function search($input)
    {
        $query = Mensaje::query();

        $columns = Schema::getColumnListing('mensajes');
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
	 * Stores Mensaje into database
	 *
	 * @param array $input
	 *
	 * @return Mensaje
	 */
	public function store($input)
	{
		return Mensaje::create($input);
	}

	/**
	 * Find Mensaje by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Mensaje
	 */
	public function findMensajeById($id)
	{
		return Mensaje::find($id);
	}

	/**
	 * Updates Mensaje into database
	 *
	 * @param Mensaje $mensaje
	 * @param array $input
	 *
	 * @return Mensaje
	 */
	public function update($mensaje, $input)
	{
		$mensaje->fill($input);
		$mensaje->save();

		return $mensaje;
	}
}