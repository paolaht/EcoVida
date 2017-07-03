<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    
	public $table = "compras";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "fecha",
		"usuarios_ID",
		"cancelado"
	];

	public static $rules = [
	    
	];

}
