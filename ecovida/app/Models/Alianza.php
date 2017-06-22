<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alianza extends Model
{
    
	public $table = "alianzas";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "nombre",
		"imagen"
	];

	public static $rules = [
	    "nombre" => "required",
		"imagen" => "required"
	];

}
