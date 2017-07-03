<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    
	public $table = "materials";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "categoria",
		"nombre"
	];

	public static $rules = [
	    "categoria" => "required",
		"nombre" => "required"
	];

}
