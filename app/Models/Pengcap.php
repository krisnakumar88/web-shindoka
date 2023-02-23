<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengcap extends Model
{
    use HasFactory;

    protected $table = 'pengcap';

    protected $guarded = ['id'];

    public function pengda(){
        return $this->hasOne(Pengda::class, 'id', 'id_pengda');
    }
}
