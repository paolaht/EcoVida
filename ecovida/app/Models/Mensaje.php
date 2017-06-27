<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{

	public $table = "mensajes";

	public $primaryKey = "id";

	public $timestamps = true;

	public $fillable = [
	    "usuario",
		"tipo",
		"fecha",
		"texto",
		"adjunto",
		"tipoAdjunto",
		"leido"
	];

	public static $rules = [
	    "usuario" => "required",
		"tipo" => "required",
		"fecha" => "required",
		"texto" => "required",
		"leido" => "required"
	];

}
