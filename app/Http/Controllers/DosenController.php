<?php

// app/Http/Controllers/DosenController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function profil($nama_dosen)
    {
        // Logika untuk menampilkan halaman profil dosen
        return view('dosen.profil', ['nama_dosen' => $nama_dosen]);
    }

    public function dataPengampu($nama_dosen)
    {
        // Logika untuk menampilkan halaman data pengampu
        return view('dosen.data_pengampu', ['nama_dosen' => $nama_dosen]);
    }
}

