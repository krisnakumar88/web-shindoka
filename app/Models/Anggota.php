<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    protected $guarded = ['id'];

    public function user(){
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function file(){
        return $this->hasOne(File::class, 'id', 'foto');
    }

    public function dojo()
    {
        return $this->hasOne(Dojo::class, 'id', 'id_dojo');
    }
}
