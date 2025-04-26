<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'
        $mahasiswa = (object)[
            'nama'=>'Adhira Zhafif Dwicahyo',
            'nim'=>'102022300161',
            'email'=>'zhafif9@gmail.com',
            'jurusan'=>'S1 Sistem Informasi',
            'fakultas'=>'Rekayasa Industri',
            'foto'=>asset('images/logo-ead.png')
        ];
        return view('profil', ['mahasiswa'=>$mahasiswa]);
    }
}
