<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kategori.index', [
            'data' => Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);
        Kategori::create($data);
        return redirect()->route('kategori.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return view('kategori.show', [
            'data' => $kategori
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.edit', [
            'data' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $data = $request->validate([
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);
        $kategori->update($data);
        return redirect()->route('kategori.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        try {
            $kategori->delete();
        }

        catch (QueryException $e){
            if($e->getCode() === '23000') {
                return redirect()->route('kategori.index')->withErrors(['msg' => 'Data Kategori digunakan di tabel lain!']);
            }
        }
        return redirect()->route('kategori.index')->with('success', 'Data kategori telah dihapus!');
    }
}
