<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    Protected $table = 'pelanggan';
    Protected $primaryKey = 'pelanggan_id';
    Protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ];
}
