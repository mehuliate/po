<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $table = 'dokumen';

    public function layanan(){
        return $this->belongsTo('App\Layanan');
    }

    public function perusahaan(){
        return $this->belongsTo('App\Perusahaan','perusahaan_id');
    }

    public function dokumenLampiran(){
        return $this->hasMany('App\DokumenLampiran', 'dokumen_id');
    }
}
