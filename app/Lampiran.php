<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lampiran extends Model
{
    protected $table = 'layanan_lampiran';

    public function layanan(){
        return $this->belongsTo('App\Layanan');
    }

}
