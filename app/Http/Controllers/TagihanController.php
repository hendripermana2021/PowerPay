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
        // Validate the incoming request
        $request->validate([
            'id_pelanggan' => 'required|exists:pelanggan,id',
            'bulan' => 'required|integer|min:1|max:12',
            'tahun' => 'required|integer|digits:4',
            'meter_awal' => 'required|numeric|min:0',
            'meter_akhir' => 'required|numeric|min:0',
            'jumlah_meter' => 'required|numeric|min:0',
        ]);

        // Create the Tagihan record
        Tagihan::create([
            'pelanggan_id' => $request->id_pelanggan,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'meter_awal' => $request->meter_awal,
            'meter_akhir' => $request->meter_akhir,
            'jumlah_meter' => $request->meter_akhir - $request->meter_awal,
            'status' => 1,
        ]);

        // Redirect to the tagihan index page with a success message
        return redirect('tagihan')->with('success', 'Tagihan berhasil ditambahkan.');
    }
}
