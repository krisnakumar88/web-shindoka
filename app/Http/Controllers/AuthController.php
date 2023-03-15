<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Dojo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('login.index');

    }

    public function ind_register()
    {
        $data['dojo'] = Dojo::all();
        return view('register.index', $data);
    }

    public function register(Request $request){
        // dd($request);

        $dataUser = $request->validate([
            'name'     => 'required|min:3|max:255',
            'email'    => 'required|email:dns',
            'username' => 'required|unique:users|min:3',
            'password' => 'required|min:3'
        ]);

        $dataAnggota = [
            'nama'           => $request->input('name'),
            'alamat'         => "",
            'no_hp'          => "",
            'tahun_masuk'    => 0,
            'sabut_terakhir' => "",
            'prestasi'       => "",
            'bring_by'       => 0,
            'id_dojo'        => 0,
            'foto'           => ""
        ];

        

        $dataUser['password'] = Hash::make($dataUser['password']);

        $dataUser['role'] = "anggota";

        try {

            $user = User::FirstOrCreate($dataUser);

            $dataAnggota['id_user'] = $user->id;

            $anggota = Anggota::create($dataAnggota);

            return redirect()->route('login')->with('success', 'Silahkan Login Kedalam Sistem');
        } catch (\Throwable $th) {
            return redirect()->route('login')->with('failed', 'Data Gagal Ditambahkan, ' . $th->getMessage());
        }
    }

    public function login(Request $request){
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['username' => $validate['username'], 'password' => $validate['password']])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('failed', 'Mohon Pastikan Username Dan Password Yang Diisi Benar');
    }

    public function logout(Request $request){
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/login');

    }

    
}
