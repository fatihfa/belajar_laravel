<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    //
    public function index()
    {
        $pegawai = DB::table('pegawai')->get();
    	
    	return view('mahasiswa', ['pegawai' => $pegawai]);
    }
}
