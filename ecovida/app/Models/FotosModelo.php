<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FotosModelo extends Model
{

	public $table = "fotos_modelos";

	public $primaryKey = "id";

	public $timestamps = true;

	public $fillable = [
	    "modelo",
		"direccion"
	];

	public static $rules = [
	    "modelo" => "required",
		"direccion" => "required"
	];

}
