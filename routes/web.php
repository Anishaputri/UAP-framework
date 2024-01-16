<?php

// routes/web.php

use App\Http\Controllers\DosenController;

Route::prefix('dosen')->group(function () {
    // Route untuk menampilkan halaman profil dosen
    Route::get('/profil/{nama_dosen}', [DosenController::class, 'profil'])->name('dosen.profil');

    // Route untuk menampilkan halaman data pengampu oleh dosen
    Route::get('/data-pengampu/{nama_dosen}', [DosenController::class, 'dataPengampu'])->name('dosen.data_pengampu');
});

