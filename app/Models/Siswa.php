<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Siswa extends Model
{
    use HasFactory;

    protected $table='siswa';
    // use Softdeletes;

    // protected $fillable = [
    //     'slug',
    //     'nama_siswa',
    //     'nta',
    //     'kelas',
    //     'tempat_lahir',
    //     'tanggal_lahir',
    //     'jenis_kelamin',
    //     'agama',
    //     'alamat',
    //     'tlp',
    //     'golongan',
    //     'jabatan',
    //     'pangkalan'
    // ];

// protected $hidden = [

// ];
}