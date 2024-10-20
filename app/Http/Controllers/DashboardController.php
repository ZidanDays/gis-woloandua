<?php

namespace App\Http\Controllers;
// use App\Models\Perkara;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function create ()
    {  
        // $perkara = Perkara::all();
        // return view('dashboard.index', ['perkaras' => $perkara]); // Mengirim data ke view nm/index.blade.php
        return view('dashboard.index'); // Mengirim data ke view nm/index.blade.php
    }
}