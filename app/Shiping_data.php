<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shiping_data extends Model
{
    protected $table = "shiping_data";

    protected $fillable = ["orden_id", 'user_id', 'documento_de_identidad', 'direccion_1', 'direccion_2', 'codigo_postal', 'telefono'];

    public function orden()
    {
    	return $this->belongsTo('App\Order', 'orden_id');
    }
}
