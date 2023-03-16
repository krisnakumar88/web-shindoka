<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateAnggotaRequest;
use App\Models\AdminDetail;
use App\Models\Dojo;
use App\Models\File;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $send = [];
        $send['dojo'] = Dojo::all();
        if (Gate::allows('isAdmin')) {
            $admin = AdminDetail::where('id_user', Auth::id())->first();
            $send['data']  = Anggota::where('id_dojo', $admin->id_dojo)->get();
            $send['admin'] = $admin;
        } else {
            $send['data'] = Anggota::all();
        }
        return view('anggota.index', $send);
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


        // dd($request);
        // $dataFile = $request->validate([
        //     'foto' => 'required|file|mimes:jpg,jpeg,bmp,png'
        // ]);

        // if ($request->hasFile('foto')) {
        //     $filenameWithExt = $request->file('foto')->getClientOriginalName();
        //     $type = $request->file('foto')->getClientMimeType();
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('foto')->getClientOriginalExtension();
        //     $filenameSimpan = $filename . '_' . time() . '.' . $extension;
        //     $size = $request->file('foto')->getSize();
        // } else {
        //     return redirect()->back()->with('failed', 'Gambar Belum Masuk');
        // }

        // // $type = $request->foto->getClientMimeType();
        // // $size = $request->foto->getSize();

        // // $fileName = time() . '-' . $request->foto->getClientOriginalName();


        // $dataUser = $request->validate([
        //     'name'     => 'required|min:3|max:255',
        //     'email'    => 'required|email:dns',
        //     'username' => 'required|unique:users|min:3',
        //     'password' => 'required|min:3'
        // ]);

        // $dataAnggota = [
        //     'nama'           => $request->input('name'),
        //     'alamat'         => $request->input('lokasi'),
        //     'no_hp'          => $request->input('no_hp'),
        //     'tahun_masuk'    => $request->input('tahun_masuk'),
        //     'sabut_terakhir' => $request->input('sabut_terakhir'),
        //     'prestasi'       => $request->input('prestasi'),
        //     'bring_by'       => Auth::user()->id,
        //     'id_dojo'        => $request->input('id_dojo'),
        // ];



        // $dataUser['password'] = Hash::make($dataUser['password']);

        // $dataUser['role'] = "anggota";

        // try {

        //     $user = User::FirstOrCreate($dataUser);

        //     $dataAnggota['id_user'] = $user->id;

        //     $file = File::create([
        //         'name' => $filenameSimpan,
        //         'type' => $type,
        //         'size' => $size
        //     ]);

        //     $dataAnggota['foto'] = $file->id;

        //     $anggota = Anggota::create($dataAnggota);

        //     $path = $request->file('foto')->storeAs('images', $filenameSimpan);

        //     return redirect()->route('anggota.index')->with('success', 'Data Berhasil Ditambahkan');
        // } catch (\Throwable $th) {
        //     return redirect()->route('anggota.index')->with('failed', 'Data Gagal Ditambahkan, ' . $th->getMessage());
        // }
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
    public function update(Request $request, $anggota)
    {


        // $anggota = Anggota::where('id', $anggota)->first();

        // $user = User::where('id', $anggota->id_user)->first();

        // if ($user->foto == "") {
        //     $file = File::create([
        //         'name' => '',
        //         'type' => '',
        //         'size' => ''
        //     ]);

        //     $anggota->foto = $file->id;

        //     $anggota->save();
        // } else {
        //     $file = File::where('id', $anggota->foto)->first();
        // }

        // // Ganti jadi firstOrCerate



        // $dataAnggota = [
        //     'nama'           => $request->input('name'),
        //     'alamat'         => $request->input('lokasi'),
        //     'no_hp'          => $request->input('no_hp'),
        //     'tahun_masuk'    => $request->input('tahun_masuk'),
        //     'sabut_terakhir' => $request->input('sabut_terakhir'),
        //     'prestasi'       => $request->input('prestasi'),
        //     'id_dojo'        => $request->input('id_dojo'),
        // ];

        // if ($request->foto != null || $request->foto != "") {

        //     $dataFile = $request->validate([
        //         'foto' => 'required|mimes:jpeg,jpg,png,gif,bmp,svg'
        //     ]);

        //     $filenameWithExt = $request->file('foto')->getClientOriginalName();
        //     $type = $request->file('foto')->getClientMimeType();
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('foto')->getClientOriginalExtension();
        //     $filenameSimpan = $filename . '_' . time() . '.' . $extension;
        //     $size = $request->file('foto')->getSize();

        //     try {

        //         if (!$file->name == "") {
        //             unlink(asset('images/' . $file->name));
        //             Storage::delete('images/' . $file->name);
        //         }



        //         $path = $request->file('foto')->storeAs('images', $filenameSimpan);

        //         $file = File::where('id', $anggota->foto)->update([
        //             'name' => $filenameSimpan,
        //             'type' => $type,
        //             'size' => $size
        //         ]);
        //     } catch (\Throwable $th) {
        //         return redirect()->back()->with('failed', $th->getMessage());
        //     }
        // }

        // $rules = [
        //     'name'  => 'required|min:3|max:255',
        //     'email' => 'required'
        // ];

        // if ($request->password != "") {
        //     $rules['password'] = 'required|unique:users|min:3';
        // }

        // if ($request->username != $user->username) {
        //     $rules['username'] = 'required|unique:users';
        // }

        // $validate = $request->validate($rules);

        // if ($request->password != "") {
        //     $validate['password'] = Hash::make($validate['password']);
        // }


        // try {
        //     User::where('id', $user->id)
        //         ->update($validate);

        //     Anggota::where('id', $anggota->id)
        //         ->update($dataAnggota);

        //     return redirect()->back()->with('success', 'Data Berhasil Diupdate');
        // } catch (Exception $th) {
        //     return redirect()->back()->with('failed', $th->getMessage());
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($anggota)
    {

        // $anggota = Anggota::where('id', $anggota)->first();

        // $foto = File::where('id', $anggota->foto)->first();

        // $user = User::where('id', $anggota->bring_by)->count();

        // if (!$user > 0) {
        //     return redirect()->route('anggota.index')->with('failed', 'Data Gagal Dihapus');
        // }

        // try {

            
        //     Storage::delete('images/' . $foto->name);


        //     User::where('id', $anggota->id_user)->delete();
        //     File::where('id', $anggota->foto)->delete();
        //     Anggota::destroy($anggota->id);
        //     return redirect()->route('anggota.index')->with('success', 'Data Berhasil Dihapus');
        // } catch (\Throwable $th) {
        //     return redirect()->route('anggota.index')->with('failed', 'Data Gagal Dihapus' . $th->getMessage());
        // }
    }
}
