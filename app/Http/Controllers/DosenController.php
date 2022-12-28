<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DosenEloquent;


class DosenController

{
    public function index()
    {
        $dsn = DosenEloquent::all();
        return view('DosenEloqORM', ['data' => $dsn], ['title' => 'Dosen']);
    }
    public function insert()
    {
        DosenEloquent::create([
            'nidn' => '1026',
            'nama' => 'Fadhilah',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Karawang',
            'tempat_lahir' => 'Indramayu',
            'tanggal_lahir' => '2002-09-26',
            'photo' => 'Lapangan Futsal',
        ]);
        return "Berhasil disimpan";
    }
    public function delete()
    {
        $dsn = DosenEloquent::where('nama', 'Fadhilah')->delete();
        return "Berhasil dihapus";
    }
    public function update()
    {
        $dsn = DosenEloquent::where('id', 8)->first()->update([
            'nama' => 'Az-haari'
        ]);
        return "Berhasil diupdate";
    }
}
