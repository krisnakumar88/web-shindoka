<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengda extends Model
{
    use HasFactory;

    protected $table = 'pengda';

    protected $guarded = ['id'];
}
