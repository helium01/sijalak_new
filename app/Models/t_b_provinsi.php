<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_b_provinsi extends Model
{
    use HasFactory;
    protected $table='t_b_provinsi';
    protected $fillabel=[
        'ID_provinsi',
        'nama',
        'koordinat',
        'jenis_hewan'
];
}
