<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagihanController extends Controller
{

    public function index()
    {
        $tagihan = Tagihan::all();
        return view('tagihan.index', compact('tagihan'));
    }

    public function create() {
        $pelanggan = Pelanggan::all();

        $currentYear = 2024;
        $yearsCount = 30;
        $tahuns = [];

        for ($i = 0; $i < $yearsCount; $i++) {
            $tahuns[] = $currentYear - $i;
        }
        

        return view('tagihan.create', compact('pelanggan', 'tahuns'));
    }

    public function store(Request $request) {
        $tagihan = Tagihan::create([
            'id_pelanggan'=> $request->id_pelanggan,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'meter_awal' => $request->meter_awal,
            'meter_akhir' => $request->meter_akhir,
            'jumlah_meter' => $request->meter_akhir - $request->meter_awal,
            'status' => 1, //default 1
        ]);
        return redirect('tagihan');
    }
}