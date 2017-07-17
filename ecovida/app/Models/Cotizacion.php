<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    
	public $table = "cotizacions";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "usuario_ID",
		"piso",
		"techo",
		"vidrio",
		"cielo_razo",
		"estimado",
		"modelo_ID"
	];

	public static $rules = [
	    
	];

}
