<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Nilai;
use App\Models\Guru;

    class MataPelajaran extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'mata_pelajaran'];

    public function guru()
    {
        return $this->hasMany(Guru::class, 'id_mata_pelajaran');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_mata_pelajaran');
    }
}

