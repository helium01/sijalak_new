<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_b_fauna extends Model
{
    use HasFactory;
    protected $table='t_b_fauna';
    protected $fillabel=[ 
    'ID_fauna',
    'nama_fauna',
    'jenis_fauna',
    'endemikdi',
    'jumlah_populasi',
    'ID_provinsi',
    'foto',
    'video'
];
}
