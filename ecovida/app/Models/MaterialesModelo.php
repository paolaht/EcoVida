<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialesModelo extends Model
{
    
	public $table = "materiales_modelos";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "modelo",
		"categoria",
		"material",
		"precio"
	];

	public static $rules = [
	    "modelo" => "required",
		"categoria" => "required",
		"material" => "required",
		"precio" => "required"
	];

}
