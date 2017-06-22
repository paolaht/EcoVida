<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{

	public $table = "contenidos";

	public $primaryKey = "id";

	public $timestamps = true;

	public $fillable = [
	    "text",
		"pagina",
		"seccion"
	];

	public static $rules = [
	    "text" => "required",
	];

}
