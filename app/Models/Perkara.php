<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkara extends Model
{
    use HasFactory;

    // Nama tabel, jika tabel Anda dinamai lain selain default plural form
    // protected $table = 'perkaras'; // Un-comment jika tabel bernama perkaras

    // Daftar kolom yang dapat diisi secara massal
    protected $fillable = [
        'tanggal',            // Tanggal perkara
        'nomor_perkara',      // Nomor perkara
        'nama',               // Nama pengaju perkara (bisa penggugat/pemohon)
        'alamat',             // Alamat pengaju
        'nomor_telepon',      // Nomor telepon pengaju
        'pihak',              // Status pihak (penggugat/pemohon/tergugat/termohon)
        'nama_penggugat',     // Nama penggugat
        'nama_tergugat',      // Nama tergugat
        'nama_ketua_majelis'  // Nama ketua majelis
    ];
}