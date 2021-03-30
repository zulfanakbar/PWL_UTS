<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $cari = $request->cari;
            $barang = Barang::where('kode_barang', 'like', '%'.$cari.'%')
                ->orWhere('nama_barang', 'like', '%'.$cari.'%')
                ->orWhere('kategori_barang', 'like', '%'.$cari.'%')
                ->paginate(10);
        } else {
            $barang = Barang::paginate(10);
        } 
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *   \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang'       => 'required',
            'nama_barang'       => 'required',
            'kategori_barang'   => 'required',
            'harga'             => 'required',
            'qty'               => 'required'
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     *   int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::find($id);
        return view('barang.detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     *   \Illuminate\Http\Request  $request
     *   int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_barang'       => 'required',
            'nama_barang'       => 'required',
            'kategori_barang'   => 'required',
            'harga'             => 'required',
            'qty'               => 'required'
        ]);

        Barang::find($id)->update($request->all());

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     *   int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil dihapus!');
    }
}
