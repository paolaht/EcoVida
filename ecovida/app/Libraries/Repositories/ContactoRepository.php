<?php

namespace App\Libraries\Repositories;


use App\Models\Contacto;
use Illuminate\Support\Facades\Schema;

class ContactoRepository
{

	/**
	 * Returns all Contactos
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return Contacto::all();
	}

	public function search($input)
    {
        $query = Contacto::query();

        $columns = Schema::getColumnListing('contactos');
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
	 * Stores Contacto into database
	 *
	 * @param array $input
	 *
	 * @return Contacto
	 */
	public function store($input)
	{
		return Contacto::create($input);
	}

	/**
	 * Find Contacto by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|Contacto
	 */
	public function findContactoById($id)
	{
		return Contacto::find($id);
	}

	/**
	 * Updates Contacto into database
	 *
	 * @param Contacto $contacto
	 * @param array $input
	 *
	 * @return Contacto
	 */
	public function update($contacto, $input)
	{
		$contacto->fill($input);
		$contacto->save();

		return $contacto;
	}
}