<?php

namespace App\Http\Controllers;

use App\Models\Pengcap;
use App\Http\Requests\StorePengcapRequest;
use App\Http\Requests\UpdatePengcapRequest;
use App\Models\Dojo;
use App\Models\Pengda;
use Exception;

class PengcapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pengcap.index', [
            'data' => Pengcap::all(),
            'pengda' => Pengda::all()
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
     * @param  \App\Http\Requests\StorePengcapRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengcapRequest $request)
    {
        $input = $request->all();
        try {
            Pengcap::create($input);

            return redirect()->route('pengcab.index')->with('success', 'Data Berhasil Ditambahkan');
        } catch (Exception $th) {
            return redirect()->route('pengcab.index')->with('failed', 'Data Gagal Ditambahkan');
        }
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
    public function update(UpdatePengcapRequest $request, $pengcap)
    {
        $pengcap = Pengcap::where('id', $pengcap)->first();
    
        $request = $request->except(['_token','_method']);
        try {
            Pengcap::where('id', $pengcap->id)
                ->update($request);

            return redirect()->route('pengcab.index')->with('success', 'Data Berhasil Diperbarui');
        } catch (Exception $th) {
            return redirect()->route('pengcab.index')->with('failed', 'Data Gagal Diperbarui');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengcap  $pengcap
     * @return \Illuminate\Http\Response
     */
    public function destroy($pengcap)
    {
        $pengcap = Pengcap::where('id', $pengcap)->first();
        
        $dojo = Dojo::where('id_pengcap', $pengcap->id)->count();
        if ($dojo > 0) {
            return redirect()->route('pengcab.index')->with('failed', 'Data Ini Terhubung Dengan Data Lain');
        }

        
        try {
            Pengcap::destroy($pengcap->id);

            return redirect()->route('pengcab.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('pengcab.index')->with('failed', 'Data Gagal Dihapus');
        }
    }
}
