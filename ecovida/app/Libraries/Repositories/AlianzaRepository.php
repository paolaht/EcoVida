<?php

namespace App\Libraries\Repositories;


use App\Models\Alianza;
use Illuminate\Support\Facades\Schema;

class AlianzaRepository
{

	/**
	 * Returns all Alianzas
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Alianza::all();
	}

	public function search($input)
    {
        $query = Alianza::query();

        $columns = Schema::getColumnListing('alianzas');
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
	 * Stores Alianza into database
	 *
	 * @param array $input
	 *
	 * @return Alianza
	 */
	public function store($input)
	{
		return Alianza::create($input);
	}

	/**
	 * Find Alianza by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Alianza
	 */
	public function findAlianzaById($id)
	{
		return Alianza::find($id);
	}

	/**
	 * Updates Alianza into database
	 *
	 * @param Alianza $alianza
	 * @param array $input
	 *
	 * @return Alianza
	 */
	public function update($alianza, $input)
	{
		$alianza->fill($input);
		$alianza->save();

		return $alianza;
	}
}