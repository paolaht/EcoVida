<?php

namespace App\Libraries\Repositories;


use App\Models\FotosModelo;
use Illuminate\Support\Facades\Schema;

class FotosModeloRepository
{

	/**
	 * Returns all FotosModelos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return FotosModelo::all();
	}

	public function search($input)
    {
        $query = FotosModelo::query();

        $columns = Schema::getColumnListing('fotos_modelos');
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
	 * Stores FotosModelo into database
	 *
	 * @param array $input
	 *
	 * @return FotosModelo
	 */
	public function store($input)
	{
		return FotosModelo::create($input);
	}

	/**
	 * Find FotosModelo by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|FotosModelo
	 */
	public function findFotosModeloById($id)
	{
		return FotosModelo::find($id);
	}

	/**
	 * Updates FotosModelo into database
	 *
	 * @param FotosModelo $fotosModelo
	 * @param array $input
	 *
	 * @return FotosModelo
	 */
	public function update($fotosModelo, $input)
	{
		$fotosModelo->fill($input);
		$fotosModelo->save();

		return $fotosModelo;
	}
}