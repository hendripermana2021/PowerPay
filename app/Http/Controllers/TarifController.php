<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tarif;

class TarifController extends Controller
{
    public function index()
    {
        $data = Tarif::all();
        return view('tarif.index', compact('data'));
    }

    public function create()
    {
        return view('tarif/create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        tarif::create([
            'daya' => $request->daya,
            'tarifperkwh' => $request->tarifperkwh  
        ]);
        return redirect('tarif');
    }

    public function edit($id)
    {
        $tarif = Tarif::find($id);
        // $tarifs = Tarif::all();
        return view('tarif.edit', compact('tarif'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'daya' => 'required|numeric',
            'tarifperkwh' => 'required|numeric',
        ]);
        // dd($request);
        $tarif = Tarif::find($id);
        // $tarif = Tarif::findOrFail("id_tarif", $id );

        $tarif->update([
            'id_tarif'=>$id,
            'daya' => $request->daya,
            'tarifperkwh'  => $request->tarifperkwh,
        ]);
        return redirect('/tarif');
    }

    public function delete(Request $request, $id)
    {
        
        $tarif = Tarif::find($id); 
        // dd($tarif);
        $tarif->delete();
        return redirect('/tarif');
        
    }

    // public function destroy(Request $request)
    // {
    //     $tarif = Tarif::where("id_tarif", $request->input('id') )->first();
    //     $tarif->delete();
    //     return redirect('/tarif');
    //     // dd($id);
    // }
}