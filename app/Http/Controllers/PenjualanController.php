<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allPenjualans = Penjualan::all();
        return view('penjualan.index', compact('allPenjualans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat validasinya
        $request->validate([
            'nama_produk' =>'required|string|max:100',
            'harga'=>'required|numeric|min:0',
            'jumlah'=>'required|integer|min:1',
            'tanggal'=>'required|date',
        ]);

        // total jumlah otomatis 
        $total = $request->harga * $request->jumlah;

        //simpan data ke database
        Penjualan::create([
            'nama_produk'=> $request->nama_produk,
            'harga'=> $request->harga,
            'jumlah'=> $request->jumlah,
            'total'=> $total,
            'tanggal'=>$request->tanggal,
        ]);
        return redirect()->route('penjualan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penjualan $penjualan)
    {
        //untuk menampilkan semua data
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penjualan $penjualan)
    {
        return view('penjualan.edit', compact('penjualan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        // membuat validasinya
        $request->validate([
            'nama_produk' =>'required|string|max:100',
            'harga'=>'required|numeric|min:0',
            'jumlah'=>'required|integer|min:1',
            'tanggal'=>'required|date',
        ]);

        // total jumlah otomatis 
        $total = $request->harga * $request->jumlah;

        //update data
        $penjualan->update([
            'nama_produk'=> $request->nama_produk,
            'harga'=> $request->harga,
            'jumlah'=> $request->jumlah,
            'total'=> $total,
            'tanggal'=>$request->tanggal,
        ]);
        //rederect (kembali)
        return redirect()->route('penjualan.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        //rederect (kembali)
        return redirect()->route('penjualan.index')->with('success', 'Data berhasil dihapus');
    }
}
