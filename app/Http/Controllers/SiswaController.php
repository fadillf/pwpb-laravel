<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index(){
        $data['siswa'] = DB::table('t_siswa')->get();
        return view('belajar', $data);
    }
}
