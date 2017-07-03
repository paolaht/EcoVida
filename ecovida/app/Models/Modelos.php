<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{

	public $table = "modelos";

	public $primaryKey = "id";

	public $timestamps = true;

	public $fillable = [
	    "nombre",
		"descripcion",
		"precioBase",
		"video",
		"tamaño"
	];

	public static $rules = [
	    "nombre" => "required",
		"descripcion" => "required",
		"precioBase" => "required",
		"video" => "required",
		"tamaño" => "required"
	];

}
