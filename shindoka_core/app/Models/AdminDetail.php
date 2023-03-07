<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDetail extends Model
{
    use HasFactory;

    protected $table = 'admin_detail';

    protected $guarded = ['id'];

    public function user(){
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function dojo(){
        return $this->hasOne(Dojo::class, 'id', 'id_dojo');
    }
}
