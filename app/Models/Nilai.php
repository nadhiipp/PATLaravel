<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;
use App\Models\MataPelajaran;
use App\Models\Murid;
use App\Models\User;


class Nilai extends Model
{
    use HasFactory;

    protected $fillable = ['nilai', 'predikat', 'semester', 'id_mata_pelajaran', 'id_guru', 'id_murid'];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    public function murid()
    {
        return $this->belongsTo(Murid::class, 'id_murid');
    }

    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mata_pelajaran');
    }
}


