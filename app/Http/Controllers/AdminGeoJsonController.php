<?php

namespace App\Http\Controllers;

use App\Models\GeoJsonFile;
use Illuminate\Http\Request;

class AdminGeoJsonController extends Controller
{
    //
    public function index () {
        $files = GeoJsonFile::all();
        return view('admin.index', compact('files'));   
    }

    public function create () {
        return view ('index.create');
    }
}