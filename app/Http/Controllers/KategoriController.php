<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kategori = DB::table('kategoris')->get();
        $data = [
            'kategori' => $kategori
        ];
        return view('admin.kategori.kategori', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
        ], [
            'nama_kategori' => 'kategori wajib diisi !',

        ]);
        DB::table('kategoris')->insert([
            'nama_kategori' => $request->nama_kategori,
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = DB::table('kategoris')->where('id', $id)->first();
        $data = [
            'kategori' => $kategori
        ];
        return view('admin.kategori.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'nama_kategori' => 'required',
        ], [
            'nama_kategori' => 'kategori wajib diisi !',

        ]);
        DB::table('kategoris')->where('id', $id)->update([
            'nama_kategori' => $request->nama_kategori,
        ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('kategoris')->where('id', $id)->delete();
        return redirect()->route('kategori.index');
    }
}
