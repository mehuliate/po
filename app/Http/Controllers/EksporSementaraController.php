<?php

namespace App\Http\Controllers;

use App\Printables\PdfEksporSementara;
use App\EksporSementara;
use App\EksporSementaraDetailBarang;
use Illuminate\Http\Request;

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
        return view('ekspor-sementara/create');
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

        $count = count($request->uraian_detail_barang);
        for($i=0; $i < $count; $i++){
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

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EksporSementara  $eksporSementara
     * @return \Illuminate\Http\Response
     */
    public function show(EksporSementara $eksporSementara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EksporSementara  $eksporSementara
     * @return \Illuminate\Http\Response
     */
    public function edit(EksporSementara $eksporSementara)
    {
        //
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
