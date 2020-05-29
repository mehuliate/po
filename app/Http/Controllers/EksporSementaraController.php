<?php

namespace App\Http\Controllers;

use App\Printables\PdfEksporSementara;
use App\EksporSementara;
use App\EksporSementaraDetailBarang;
use App\EksporSementaraDokap;
use App\EksporSementaraFileDokap;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EksporSementaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ekspor-sementara/create',['data' => new EksporSementara()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        // dd($request->file('file_dokumen_pelengkap')[0]->isValid());
        DB::beginTransaction();
        try {
            //code...
            $eksporS = new EksporSementara;
            $eksporS->nama_perusahaan = $request->nama_perusahaan;
            $eksporS->alamat_perusahaan = $request->alamat_perusahaan;
            $eksporS->jenis_barang = $request->jenis_barang;
            $eksporS->jumlah = $request->jumlah;
            $eksporS->nomor_invoice = $request->nomor_invoice;
            $eksporS->tgl_invoice = $request->tgl_invoice;
            $eksporS->nilai_barang = $request->nilai_barang;
            $eksporS->serial_barang = $request->serial_barang;
            $eksporS->negara_tujuan = $request->negara_tujuan;
            $eksporS->jangka_waktu = $request->jangka_waktu;
            $eksporS->save();

            $jlhBarang = count($request->uraian_detail_barang);
            for($i=0; $i < $jlhBarang; $i++){
                if(!empty($request->uraian_detail_barang[$i])){
                    $detailBarang = new EksporSementaraDetailBarang;
                    $detailBarang->ekspor_sementara_id = $eksporS->id;
                    $detailBarang->uraian = $request->uraian_detail_barang[$i];
                    $detailBarang->jumlah_satuan = $request->jumlah_satuan_detail_barang[$i];
                    $detailBarang->jenis_satuan = $request->jenis_satuan_detail_barang[$i];
                    $detailBarang->jumlah_kemasan = $request->jumlah_kemasan_detail_barang[$i];
                    $detailBarang->jenis_kemasan = $request->jenis_kemasan_detail_barang[$i];
                    $detailBarang->serial_number = $request->nomor_detail_barang[$i];
                    $detailBarang->save();
                }
            };

            $jlhDokap = count($request->jenis_dokumen_pelengkap);
            for ($i=0; $i < $jlhDokap; $i++) { 
                if(!empty($request->jenis_dokumen_pelengkap[$i])){
                    $detailBarang = new EksporSementaraDokap;
                    $detailBarang->ekspor_sementara_id = $eksporS->id;
                    $detailBarang->jenis_dokumen = $request->jenis_dokumen_pelengkap[$i];
                    $detailBarang->nomor = $request->nomor_dokumen_pelengkap[$i];
                    $detailBarang->tanggal = $request->tanggal_dokumen_pelengkap[$i];
                    $detailBarang->save();
                }
            }
            //jika ada file
            if($request->hasFile('file_dokumen_pelengkap')){
                $jlhFile = count($request->file_dokumen_pelengkap);
                for ($i=0; $i < $jlhFile; $i++) { 
                    //jika file success terupload dan nama tidak kosong
                    if ($request->file('file_dokumen_pelengkap')[$i]->isValid() AND !empty($request->nama_file_dokumen_pelengkap[$i])) {
                        $fileDokap = new EksporSementaraFileDokap;
                        $fileDokap->ekspor_sementara_id = $eksporS->id;
                        $fileDokap->nama_dokumen = $request->nama_file_dokumen_pelengkap[$i];
                        //Handle File nya
                        $size = File::size($request->file_dokumen_pelengkap[$i]);
                        $fileName = $request->file_dokumen_pelengkap[$i]->hashName();
                        $fileDokap->size = $size;
                        $request->file_dokumen_pelengkap[$i]->storeAs('public\ekspor_sementara\dokumen_pelengkap', $fileName);
                        $fileDokap->file = $fileName;
                        $fileDokap->save();
                    }
                }
            }
            DB::commit();
            return redirect()->route('eksporSementara.edit',$eksporS->id);

        } catch (\Throwable $th) {
            DB::rollback();
            $th->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EksporSementara  $eksporSementara
     * @return \Illuminate\Http\Response
     */
    public function show(EksporSementara $eksporSementara)
    {
        // return view('ekspor-sementara/show', compact('eksporSementara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EksporSementara  $eksporSementara
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = EksporSementara::findOrFail($id);
        $detail = $data->detail;
        dd($detail);
        return view('ekspor-sementara/edit',
            compact('data')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EksporSementara  $eksporSementara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EksporSementara $eksporSementara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EksporSementara  $eksporSementara
     * @return \Illuminate\Http\Response
     */
    public function destroy(EksporSementara $eksporSementara)
    {
        //
    }

}
