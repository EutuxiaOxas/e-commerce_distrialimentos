<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = ['user_id', 'orden_id', 'monto', 'fecha', 'id_banco_emisor', 'id_banco_receptor', 'referencia', 'titular_cuenta', 'documento_identidad_titular'];

    public function emisor()
    {
    	return $this->belongsTo('App\Bank', 'id_banco_emisor');
    }

    public function receptor()
    {
    	return $this->belongsTo('App\Banks_User', 'id_banco_receptor');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
}

