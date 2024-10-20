<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
        // Kolom yang dapat diisi massal
        protected $fillable = [
            'name',
            'description',
            'latitude',
            'longitude',
            'geom', // Kolom geometry
        ];
    
        // Jika Anda ingin menggunakan casting untuk kolom geospasial
        protected $casts = [
            'geom' => 'geometry', // Gunakan casting untuk geom jika perlu
        ];
    
        // Jika Anda ingin menambahkan fungsi relasi, bisa dilakukan di sini
        // Contoh:
        // public function otherModel()
        // {
        //     return $this->hasMany(OtherModel::class);
        // }
}