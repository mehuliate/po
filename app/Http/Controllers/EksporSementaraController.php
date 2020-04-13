<?php

namespace App\Http\Controllers;

use App\Printables\EksporSementara as PrintES;
use App\EksporSementara;
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
        //
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

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetak()
    {
        return view('ekspor-sementara/cetak');
    }
}
