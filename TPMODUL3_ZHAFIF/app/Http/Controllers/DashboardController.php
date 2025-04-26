<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');
        // - Buat variabel nama, jam, waktu
        $nama = "Adhira Zhafif Dwicahyo";
        $jam = date("H:i:s");
        $tanggal = $this->getTanggal();
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        if ($jam >= 5 && $jam < 12) {
            $salam = "Selamat Pagi";
        } elseif ($jam >= 12 && $jam < 17) {
            $salam = "Selamat Siang";
        } elseif ($jam >= 17 && $jam < 19) {
            $salam = "Selamat Sore";
        } else {
            $salam = "Selamat Malam";
        }
        // - Panggil fungsi getTanggal()
        $tanggal = $this->getTanggal();
        // - Kirim data ke view 'dashboard' 
        return view('dashboard', compact('salam', 'nama', 'jam', 'tanggal'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date("d-m-Y");
    }
}
