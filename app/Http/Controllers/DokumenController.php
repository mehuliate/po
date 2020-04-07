<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumen;
use App\DokumenLampiran;
use App\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
    public function UploadLampiran(Request $request, $id){

        
        $request->validate([
            'jenis_dok' =>  'required',
            'nomor' =>  'required',
            'tgl' =>  'required',
            'dokPelengkap' => 'mimes:pdf,jpg,jpeg,png|max:1024'
        ]);


        $dokumen = Dokumen::findOrfail($id);

        $dokumenLampiran = new Dokumenlampiran();

        $dokumenLampiran->nama = $request->jenis_dok;
        $dokumenLampiran->nomor = $request->nomor;
        $dokumenLampiran->tgl = $request->tgl;

        if($request->hasFile('dokPelengkap')){
            try{
                $path = $request->dokPelengkap->store('lamp_dok');
                $berkas = new File();
                $berkas->uuid = (string) Str::uuid();
                $berkas->file_name = $path;
                $berkas->dokumen_id = $dokumen->id;
                $berkas->pelayanan_id = $dokumen->layanan_id;
                $berkas->size = $request->dokPelengkap->getSize();
                $berkas->save();

            } catch (Exception $e){
                echo 'Caught exception: ',  $e->getMessage(), "\n";

            }

        }

        $dokumenLampiran->file_id = $berkas->uuid;

        $dokumen->dokumenLampiran()->save($dokumenLampiran);

        return back();

    }

    public function downloadFile($uuid){
        $berkas = File::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path('app/'. $berkas->file_name);
        return response()->file($pathToFile);
    }
}
