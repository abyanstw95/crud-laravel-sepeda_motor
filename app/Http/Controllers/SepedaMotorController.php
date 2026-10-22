<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SepedaMotorController extends Controller
{
    public function index()
    {
        $data = DB::table('tb_sepeda_motor')
            ->orderBy('NAMA_PRODUK', 'ASC')
            ->get();

        return view('sepeda_motor.index', compact('data'));
    }
}