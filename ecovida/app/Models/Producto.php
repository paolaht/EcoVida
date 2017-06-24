<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
	public $table = "productos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "tipo",
		"nombre",
		"caracteristicas",
		"precio"
	];

	public static $rules = [
	    "tipo" => "required",
		"nombre" => "required",
		"precio" => "required"
	];

}
