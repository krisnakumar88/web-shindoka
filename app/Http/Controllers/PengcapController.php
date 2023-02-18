<?php

namespace App\Http\Controllers;

use App\Models\Pengcap;
use App\Http\Requests\StorePengcapRequest;
use App\Http\Requests\UpdatePengcapRequest;

class PengcapController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengcapRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengcapRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengcap  $pengcap
     * @return \Illuminate\Http\Response
     */
    public function show(Pengcap $pengcap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengcap  $pengcap
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengcap $pengcap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengcapRequest  $request
     * @param  \App\Models\Pengcap  $pengcap
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengcapRequest $request, Pengcap $pengcap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengcap  $pengcap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengcap $pengcap)
    {
        //
    }
}
