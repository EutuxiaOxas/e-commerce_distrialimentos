<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo_Banner extends Model
{
    protected $fillable = ['image', 'url' , 'status', 'tipo'];
}
