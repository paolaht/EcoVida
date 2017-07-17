<?php

namespace App\Libraries\Repositories;


use App\Models\Cotizacion;
use Illuminate\Support\Facades\Schema;

class CotizacionRepository
{

	/**
	 * Returns all Cotizacions
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Cotizacion::all();
	}

	public function search($input)
    {
        $query = Cotizacion::query();

        $columns = Schema::getColumnListing('cotizacions');
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
	 * Stores Cotizacion into database
	 *
	 * @param array $input
	 *
	 * @return Cotizacion
	 */
	public function store($input)
	{
		return Cotizacion::create($input);
	}

	/**
	 * Find Cotizacion by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Cotizacion
	 */
	public function findCotizacionById($id)
	{
		return Cotizacion::find($id);
	}

	/**
	 * Updates Cotizacion into database
	 *
	 * @param Cotizacion $cotizacion
	 * @param array $input
	 *
	 * @return Cotizacion
	 */
	public function update($cotizacion, $input)
	{
		$cotizacion->fill($input);
		$cotizacion->save();

		return $cotizacion;
	}
}