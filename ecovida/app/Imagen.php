<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model {


    protected $fillable = ['product_id', 'filename'];

    public function product()
    {
        return $this->belongsTo('App\Producto');
    }

}
