<?php

namespace App\Http\Controllers;

use App\Models\AdminDetail;
use App\Models\Anggota;
use App\Models\Dojo;
use App\Models\Pengcap;
use App\Models\Pengda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    {
        $send = [];
        
        if (Gate::allows('isAdmin')) {
            $admin = AdminDetail::where('id_user', Auth::id())->first();
            $send['anggota']  = Anggota::where('id_dojo', $admin->id_dojo)->get();
            $send['admin']    = $admin;
            $send['dojo']     = Dojo::where('id', $admin->id_dojo)->first();
            $send['pengda']   = Pengda::where('id', $send['dojo']->pengcap->id_pengda)->first();
            $send['admins']   = AdminDetail::where('id_dojo', $admin->id_dojo)->get();
            
         }

         if (Gate::allows('isSuperadmin')) {
            $send['dojo']    = Dojo::all();
            $send['anggota'] = Anggota::all();
            $send['pengda']  = Pengda::all();
            $send['pengcab'] = Pengcap::all();

         }

         if (Gate::allows('isAnggota')) {
            return redirect()->route('profile');
         }

        return view('dashboard.index', $send);
    }
}
