<?php

namespace App\Http\Controllers;

use App\Models\AdminDetail;
use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ProfileController extends Controller
{
    public function index(){
        $send = [];
        
        if (Gate::allows('isAdmin')) {
            $admin = AdminDetail::where('id_user', Auth::id())->first();
            $send['user'] = Auth::user();
            $send['admin'] = $admin; 
         } 

         if (Gate::allows('isSuperadmin')) {
            $superadmin = Auth::user();
            $send['superadmin'] = $superadmin;
         }
        
        return view('profile.index', $send);
    }

    public function update(Request $request){
        if (Gate::allows('isAdmin')) {
            
        }else {
            # code...
        }
    }
}
