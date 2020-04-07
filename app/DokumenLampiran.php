<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokumenLampiran extends Model
{
    protected $table = 'dokumen_lampiran';

    public function dokumen(){
        return $this->belongsTo('App\Dokumen');
    }
}
