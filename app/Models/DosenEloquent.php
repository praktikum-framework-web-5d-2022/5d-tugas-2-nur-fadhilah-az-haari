<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class DosenEloquent extends Model
{
    protected $table = 'Dosen';
    protected $fillable = [
        'nidn',
        'nama',
        'jenis_kelamin',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'photo'
    ];
    public $timestamps = false;
}
