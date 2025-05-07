<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    // TODO
    namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'isbn',
        'jumlah_halaman',
    ];

    // Jika nama tabel database Anda bukan 'bukus', definisikan di sini
    // protected $table = 'nama_tabel_anda';

    // Definisikan relasi di sini jika ada
    // Contoh relasi "belongsTo" dengan model Kategori (jika ada kolom kategori_id di tabel bukus)
    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
}
}
