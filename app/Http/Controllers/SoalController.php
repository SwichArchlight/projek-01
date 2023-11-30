<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index(){
        $siswa = DB::table('siswa')->get();
        $title = 'Delete User?';
        $text = "Beneran mau Di hapus?";
        confirmDelete($title, $text);
        return view('soal.index',['siswa' => $siswa]);
    }
}
