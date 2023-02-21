<?php

namespace App\Http\Controllers;

use App\Models\Pengda;
use App\Http\Requests\StorePengdaRequest;
use App\Http\Requests\UpdatePengdaRequest;
use Exception;

class PengdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengda.index', [
            'data' => Pengda::all()
        ]);
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
     * @param  \App\Http\Requests\StorePengdaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengdaRequest $request)
    {
        $input = $request->all();
        try {
            Pengda::create($input);

            return redirect()->route('pengda.index')->with('success', 'Data Berhasil Ditambahkan');
        } catch (Exception $th) {
            return redirect()->route('pengda.index')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengda  $pengda
     * @return \Illuminate\Http\Response
     */
    public function show(Pengda $pengda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengda  $pengda
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengda $pengda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengdaRequest  $request
     * @param  \App\Models\Pengda  $pengda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengdaRequest $request, Pengda $pengda)
    {
        try {
            Pengda::where('id', $pengda->id)
                ->update($request);

            return redirect()->route('pengda.index')->with('success', 'Data Berhasil Diperbarui');
        } catch (Exception $th) {
            return redirect()->route('pengda.index')->with('failed', 'Data Gagal Diperbarui');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengda  $pengda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengda $pengda)
    {
        try {
            Pengda::destroy($pengda->id);

            return redirect()->route('pengda.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('pengda.index')->with('failed', 'Data Gagal Dihapus');
        }
    }
}
