<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use App\Http\Requests\StoreDojoRequest;
use App\Http\Requests\UpdateDojoRequest;
use App\Models\AdminDetail;
use App\Models\Pengcap;

class DojoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dojo.index', [
            'data' => Dojo::all(),
            'pengcab' => Pengcap::all()
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
     * @param  \App\Http\Requests\StoreDojoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDojoRequest $request)
    {
        $input = $request->all();
        try {
            Dojo::create($input);

            return redirect()->route('dojo.index')->with('success', 'Data Berhasil Ditambahkan');
        } catch (\Exception $th) {
            return redirect()->route('dojo.index')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dojo  $dojo
     * @return \Illuminate\Http\Response
     */
    public function show(Dojo $dojo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dojo  $dojo
     * @return \Illuminate\Http\Response
     */
    public function edit(Dojo $dojo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDojoRequest  $request
     * @param  \App\Models\Dojo  $dojo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDojoRequest $request, Dojo $dojo)
    {
        $request = $request->except(['_token','_method']);

        
        try {
            Dojo::where('id', $dojo->id)
                ->update($request);

            return redirect()->route('dojo.index')->with('success', 'Data Berhasil Diperbarui');
        } catch (\Exception $th) {
            return redirect()->route('dojo.index')->with('failed', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dojo  $dojo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dojo $dojo)
    {
        $admin = AdminDetail::where('id_dojo', $dojo->id)->count();
        if ($admin > 0) {
            return redirect()->route('dojo.index')->with('failed', 'Data Ini Terhubung Dengan Data Lain');
        }
        try {
            Dojo::destroy($dojo->id);
            return redirect()->route('dojo.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('dojo.index')->with('failed', 'Data Gagal Dihapus');
        }
    }
}
