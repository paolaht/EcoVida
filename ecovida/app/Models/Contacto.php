<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    
	public $table = "contactos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "encabezado",
		"dirección",
		"sitio",
		"teléfono",
		"correo"
	];

	public static $rules = [
	    "encabezado" => "required",
		"dirección" => "required",
		"sitio" => "required",
		"teléfono" => "required",
		"correo" => "required"
	];

}
