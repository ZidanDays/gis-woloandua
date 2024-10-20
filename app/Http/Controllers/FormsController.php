<?php

namespace App\Http\Controllers;

use App\Models\Perkara;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormsController extends Controller
{
    // Menampilkan halaman form Akta Cerai
    public function ShowPageForms()
    {
        return view('forms.index'); // Mengarahkan ke form Akta Cerai
    }

    // Menampilkan halaman form Salinan Putusan/Penetapan (Salput)
    // public function ShowPageFormsSalput()
    // {
    //     return view('forms.indexSalput'); // Mengarahkan ke form Salput
    // }

    // Menyimpan data dari form Akta Cerai
    public function store(Request $request)
    {
        // Validasi input form
        $request->validate([
            'tanggal' => 'required|date',
            'nomor_perkara' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'pihak' => 'required|in:penggugat,pemohon,tergugat,termohon,lainnya',
            'nama_penggugat' => 'required|string|max:255',
            'nama_tergugat' => 'required|string|max:255',
            'nama_ketua_majelis' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        Perkara::create([
            'tanggal' => $request->input('tanggal'),
            'nomor_perkara' => $request->input('nomor_perkara'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'pihak' => $request->input('pihak'),
            'nama_penggugat' => $request->input('nama_penggugat'),
            'nama_tergugat' => $request->input('nama_tergugat'),
            'nama_ketua_majelis' => $request->input('nama_ketua_majelis'),
        ]);

        // Redirect ke halaman form dengan pesan sukses
        return redirect()->route('form.view')->with('success', 'Data perkara berhasil disimpan.');
    }

    // Menyimpan data dari form Salinan Putusan/Penetapan
    public function storeSalput(Request $request)
    {
        // Tambahkan validasi dan logika penyimpanan yang sesuai dengan form Salput
        // Sesuaikan dengan kolom yang dibutuhkan pada form Salput
    }
}