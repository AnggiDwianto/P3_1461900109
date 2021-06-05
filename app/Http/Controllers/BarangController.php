<?php

namespace App\Http\Controllers;

use App\Models\Barang0109;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang0109 = Barang0109::all();
        return view('barang0109', ['barang0109' => $barang0109]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang0109_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Barang0109::create([
            'id' => $request->id,
            'nama_brg' => $request->nama_brg,
            'harga' => $request->harga,
        ]);
        return redirect('barang0109');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang0109 = Barang0109::find($id);
        return view('barang0109_edit', ['barang0109' => $barang0109]);
        
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang0109 = Barang0109::find($id);
        $barang0109->id = $request->id;
        $barang0109->nama_brg = $request->nama_brg;
        $barang0109->harga = $request->harga;
        $barang0109->save();

        return redirect('barang0109');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang0109 = Barang0109::find($id);
        $barang0109->delete();

        return redirect('barang0109');
    }
}
