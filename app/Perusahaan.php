<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';

    public function user(){
        return $this->hasMany('App\User');
    }
}
