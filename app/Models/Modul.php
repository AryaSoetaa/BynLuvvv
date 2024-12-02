<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Modul extends Model
{
    
    protected $perPage = 20;
    protected $fillable = [
        'nama_modul',
        'content',
        'kelas_praktikum_id'
    ];

    public function kelasPraktikum()
    {
        return $this->belongsTo(KelasPraktikum::class);
    }

}


