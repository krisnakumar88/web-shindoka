<?php

namespace App\Http\Controllers;

use App\Models\AdminDetail;
use App\Http\Requests\StoreAdminDetailRequest;
use App\Http\Requests\UpdateAdminDetailRequest;
use App\Models\Anggota;
use App\Models\Dojo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            'data' => AdminDetail::all(),
            'dojo' => Dojo::all()
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
     * @param  \App\Http\Requests\StoreAdminDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminDetailRequest $request)
    {
        $input = $request->all();

        try {
            $user =  User::create([
                'name'     => $input['name'],
                'email'    => $input['email'],
                'username' => $input['username'],
                'password' => Hash::make($input['password']),
                'role' => 'admin'
            ]);

            $admin = AdminDetail::create([
                'id_user' => $user->id,
                'no_hp'   => $input['no_hp'],
                'id_dojo' => $input['id_dojo']
            ]);


            return redirect()->route('admin.index')->with('success', 'Data Berhasil Ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('admin.index')->with('failed', 'Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminDetail  $adminDetail
     * @return \Illuminate\Http\Response
     */
    public function show(AdminDetail $adminDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminDetail  $adminDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminDetail $adminDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminDetailRequest  $request
     * @param  \App\Models\AdminDetail  $adminDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $adminDetail)
    {

        $admin = AdminDetail::where('id', $adminDetail)->first();

        $user  = User::where('id', $admin->id_user)->first();

        $rules = [
            'name'  => 'required|min:3|max:255',
            'email' => 'required|email:dns'
        ];

        if ($request->password != "") {
            $rules['password'] = 'required|min:3';
        }

        if ($request->username != $user->username) {
            $rules['username'] = 'required|unique:users';
        }

        if (!$request->has('id_dojo')) {
            $request->id_dojo = $admin->id_dojo;
        }

        $validate = $request->validate($rules);

        if ($request->password != "") {
            $validate['password'] = Hash::make($validate['password']);
        }

        try {
            User::where('id', $admin->id_user)
                ->update($validate);

            AdminDetail::where('id', $admin->id)->update([
                'no_hp'   => $request->no_hp,
                'id_dojo' => $request->id_dojo
            ]);

            return redirect()->back()->with('success', 'Data Berhasil Diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'Data Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminDetail  $adminDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($adminDetail)
    {
        $admin = AdminDetail::where('id', $adminDetail)->first();

        $anggota = Anggota::where('bring_by', $admin->id)->count();
        if ($anggota > 0) {
            return redirect()->route('admin.index')->with('failed', 'Data Ini Terhubung Dengan Data Lain');
        }

        try {
            AdminDetail::where('id', $admin->id)->delete();

            User::where('id', $admin->id_user)->delete();

            return redirect()->route('admin.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('admin.index')->with('failed', 'Data Gagal Dihapus');
        }



        //     return redirect()->route('admin.index')->with('success', 'Data Berhasil Dihapus');
        // } catch (\Throwable $th) {
        //     return redirect()->route('admin.index')->with('failed', 'Data Gagal DiHapus');
        // }

    }
}
