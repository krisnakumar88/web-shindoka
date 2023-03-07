<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Catch_;

class SuperadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('superadmin.index', [
            'data' => User::where('role', 'superadmin')->get()
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataUser = $request->validate([
            'name'     => 'required|min:3|max:255',
            'email'    => 'required|email:dns',
            'username' => 'required|unique:users|min:3',
            'password' => 'required|min:3'
        ]);

        $dataUser['password'] = Hash::make($dataUser['password']);

        $dataUser['role'] = "superadmin";

        $user = User::create($dataUser);

        return redirect()->route('superadmin.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $user = User::where('id', $id)->first();

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

        $validate = $request->validate($rules);

        if ($request->password != "") {
            $validate['password'] = bcrypt($validate['password']);   
        }

        try{
            User::where('id', $id)
            ->update($validate);

            return redirect()->back()->with('success', 'Data Berhasil Diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('failed', 'Data Gagal Diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            User::where('id', $id)->delete();

            return redirect()->route('superadmin.index')->with('success', 'Data Berhasil Dihapus');
        } catch (\Throwable $th) {
            return redirect()->route('superadmin.index')->with('failed', 'Data Gagal Dihapus');
        }
    }
}
