<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dokumen;
use App\Layanan;
use App\User;


class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokumen = Dokumen::paginate(10);
        return view('pengajuan/index', compact('dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::findOrFail(auth()->user()->id);
        $layanan = Layanan::get();
        return view('pengajuan/create', compact('user', 'layanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'layanan' => 'required'
        ]);

        $layanan = Layanan::findOrFail($request->layanan);
        $user = User::findOrFail(auth()->user()->id);

        $dokumen = new Dokumen;
        $dokumen->layanan_id = $layanan->id;
        $dokumen->user_id = $user->id;
        $dokumen->status_id = 0;
        $dokumen->status = 'draft';
        $dokumen->perusahaan_id = $user->perusahaan->id;
        $dokumen->save();

        return redirect()->route('pengajuanShow', [$dokumen]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokumen = Dokumen::findOrFail($id);

        return view('pengajuan/show', compact('dokumen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
