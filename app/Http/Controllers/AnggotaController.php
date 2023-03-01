<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAnggotaRequest;
use App\Models\File;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('anggota.index', [
            'data' => Anggota::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnggotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataFile = $request->validate([
            'foto' => 'required|file|mimes:jpg,jpeg,bmp,png'
        ]);


        $dataUser = $request->validate([
            'name'     => 'required|min:3|max:255',
            'email'    => 'required|email:dns',
            'username' => 'required|unique:users|min:3',
            'password' => 'required|min:3'
        ]);

        $dataAnggota = [
            'nama'           => $request->input('name'),
            'alamat'         => $request->input('lokasi'),
            'no_hp'          => $request->input('no_hp'),
            'tahun_masuk'    => $request->input('tahun_masuk'),
            'sabut_terakhir' => $request->input('sabut_terakhir'),
            'prestasi'       => $request->input('prestasi'),
            'bring_by'       => Auth::user()->id
        ];

        $dataUser['password'] = Hash::make($dataUser['password']);

        $dataUser['role'] = "anggota";

        $user = User::create($dataUser);

        if (!$user) {
            return redirect()->route('anggota.index')->with('failed', 'Data User Gagal Ditambahkan');
        }

        $dataAnggota['id_user'] = $user->id;

        $type = $request->file->getClientMimeType();
        $size = $request->file->getSize();

        $fileName = time().'_'.$request->file->extension();

        $file = File::create([
            'name' => $fileName,
            'type' => $type,
            'size' => $size
        ]);

        $dataAnggota['foto'] = $file->id;

        $anggota = Anggota::create($dataAnggota);

        if (!$anggota) {
            return redirect()->route('anggota.index')->with('failed', 'Data Anggota Gagal Ditambahkan');
        }

        return redirect()->route('anggota.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnggotaRequest  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {

        $user = User::where('id', $anggota->id_user)->first();

        $rules = [
            'name'  => 'required|min:3|max:255',
            'email' => 'required'
        ];

        if ($request->password != "") {
            $rules['password'] = 'required|unique:users|min:3';   
        }

        if ($request->username != $user->username) {
            $rules['username'] = 'required|unique:users';
        }

        $validate = $request->validate($rules);

        if ($request->password != "") {
            $validate['password'] = bcrypt($validate['password']);   
        }

        $dataAnggota = [
            'nama'           => $request->input('name'),
            'alamat'         => $request->input('lokasi'),
            'no_hp'          => $request->input('no_hp'),
            'tahun_masuk'    => $request->input('tahun_masuk'),
            'sabut_terakhir' => $request->input('sabut_terakhir'),
            'prestasi'       => $request->input('prestasi'),
            'foto'           => '',
        ];

        try {
            User::where('id', $user->id)
            ->update($validate);

            Anggota::where('id', $anggota->id)
            ->update($dataAnggota);

            return redirect()->route('anggota.index')->with('success', 'Data Berhasil Dihapus');
            
        } catch (Exception $th) {
            return redirect()->route('anggota.index')->with('failed', 'Data Gagal Diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        try {

            User::where('id', $anggota->id_user)->delete();

            Anggota::destroy($anggota->id);

            return redirect()->route('anggota.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('anggota.index')->with('failed', 'Data Gagal Dihapus');
        }
    }
}
