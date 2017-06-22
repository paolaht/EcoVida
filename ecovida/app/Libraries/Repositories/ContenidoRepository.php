<?php

namespace App\Libraries\Repositories;


use App\Models\Contenido;
use Illuminate\Support\Facades\Schema;

class ContenidoRepository
{

	/**
	 * Returns all Contenidos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Contenido::all();
	}

	public function search($input)
    {
        $query = Contenido::query();

        $columns = Schema::getColumnListing('contenidos');
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
	 * Stores Contenido into database
	 *
	 * @param array $input
	 *
	 * @return Contenido
	 */
	public function store($input)
	{
		return Contenido::create($input);
	}

	/**
	 * Find Contenido by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Contenido
	 */
	public function findContenidoById($id)
	{
		return Contenido::find($id);
	}

	/**
	 * Updates Contenido into database
	 *
	 * @param Contenido $contenido
	 * @param array $input
	 *
	 * @return Contenido
	 */
	public function update($contenido, $input)
	{
		$contenido->fill($input);
		$contenido->save();

		return $contenido;
	}
}