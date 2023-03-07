<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    use HasFactory;

    protected $table = 'dojo';

    protected $guarded = ['id'];

    public function pengcap(){
        return $this->hasOne(Pengcap::class, 'id', 'id_pengcap');
    }
}
