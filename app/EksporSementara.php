<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EksporSementara extends Model
{
    protected $table = 'ekspor_sementara';

    public function detail(){
       return $this->hasMany('App\EksporSementaraDetailBarang');
    }
}