<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'jenis_layanan';

    public function dokumen(){
        return $this->hasMany('App\Dokumen');
    }

    public function lampiran(){
        return $this->hasMany('App\Lampiran');
    }
    
}
