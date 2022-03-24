<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $primarykey ='id_kelas';
    protected $table = 't_kelas';
    protected $fillable = [
        'nama_kelas', 'jurusan'
    ];
}
