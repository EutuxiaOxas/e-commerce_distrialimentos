<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banks_User extends Model
{
    protected $table = 'banks_user';

    protected $fillable = ['title', 'number_account', 'titular'];
}
