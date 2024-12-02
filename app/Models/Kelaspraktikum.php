<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelaspraktikum extends Model
{
    protected $perPage = 20;

    protected $fillable = [
        'nama_praktikum',
        'dosen',
        'asisten_praktikum',
        'kepala_laboratorium',
        'tanggal_dibuka',
        'tanggal_ditutup'
    ];

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'kelas_praktikum_mahasiswa', 'kelas_praktikum_id', 'mahasiswa_id');
    }

    public function moduls()
    {
        return $this->hasMany(Modul::class);
    }
    

    public function persyaratan()
    {
        return $this->belongsToMany(Persyaratan::class, 'kelas_praktikum_persyaratan');
    }
    
    public $timestamps =true;
};