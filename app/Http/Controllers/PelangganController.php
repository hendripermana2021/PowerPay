<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Tarif;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        $tarif = Tarif::all();
        return view('pelanggan.index', compact('pelanggan', 'tarif'));
    }

    public function create() 
    {
        $pelanggan = Pelanggan::all();
        $tarif = Tarif::all();
       return view('pelanggan.create', compact('pelanggan', 'tarif'));
    }
    // public function details($id)
    // {
    //     $pelanggan = Pelanggan::find($id);
    //     $tarif = Tarif::find($id);
    //     return view('pelanggan.details', compact('tarif', 'pelanggan'));
    // }

    public function store(Request $request)
    {
        $data = $request;
        $data['id_pelanggan'] = date('ymdHis');
        $data['nomor_kwh'] = date('Hisymd');
        $data['password'] = Hash::make('user123');
        $data['id_tarif'] =(int)$data['id_tarif'];

        $pelanggan = [
            'id_tarif' => $data['id_tarif'],
            'id_pelanggan' => $data['id_pelanggan'],
            'nama_pelanggan' => $data ['nama_pelanggan'],
            'email'  => $data['email'],
            
            'alamat'  => $data['alamat'],
            'nomor_kwh' => $data['nomor_kwh'],
            'password' => $data['password'],
           
        ];
        Pelanggan::create($pelanggan);
        return redirect('/pelanggan');
    }
    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        $tarifs = Tarif::all();
        return view('pelanggan.edit', compact('pelanggan', 'tarifs'));
    }
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->update($request->all());

        $pelanggan->update([
            'id_tarif' => $request->id_tarif,
            'daya'  => $request->daya,
            'tarifperkwh'  => $request->tarifperkwh,
            // 'id_tarif'  => $request->id_tarif,
        ]);
        return redirect('/pelanggan');
    }

    public function delete(Request $request, $id)
{

    $pelanggan = Pelanggan::find($id);
    $pelanggan->delete();
    return redirect('/pelanggan');

    }
}