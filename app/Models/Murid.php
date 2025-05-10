<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Nilai;
use App\Models\User;

class Murid extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nis', 'kelas', 'no_telp', 'jenis_kelamin', 'tgl_lahir', 'id_user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_murid');
    }
}
