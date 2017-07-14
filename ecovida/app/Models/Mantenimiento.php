<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    
	public $table = "mantenimientos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "fecha",
		"estado",
		"descripcion",
		"responsable",
		"compra_producto_producto_ID",
		"compra_producto_compra_codigo"
	];

	public static $rules = [
	    "fecha" => "nullable"
	];

}
