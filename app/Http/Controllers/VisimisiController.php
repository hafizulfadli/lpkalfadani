<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisimisiController extends Controller
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
        $visimisi = DB::table('visimisis')->get();
        $data = [
            'visimisi' => $visimisi
        ];
        return view('admin.visimisi.visimisi', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.visimisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'konten_visi' => 'required',
            'konten_misi' => 'required',
        ], [
            'konten_visi' => 'visi wajib diisi !',
            'konten_misi' => 'misi wajib diisi !',

        ]);
        DB::table('visimisis')->insert([
            'konten_visi' => $request->konten_visi,
            'konten_misi' => $request->konten_misi,
        ]);
        return redirect()->route('visimisi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $visimisi = DB::table('visimisis')->where('id', $id)->first();
        $data = [
            'visimisi' => $visimisi
        ];
        return view('admin.visimisi.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visimisi = DB::table('visimisis')->where('id', $id)->first();
        $data = [
            'visimisi' => $visimisi
        ];
        return view('admin.visimisi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'konten_visi' => 'required',
            'konten_misi' => 'required',
        ], [
            'konten_visi' => 'visi wajib diisi !',
            'konten_misi' => 'misi wajib diisi !',

        ]);
        DB::table('visimisis')->where('id', $id)->update([
            'konten_visi' => $request->konten_visi,
            'konten_misi' => $request->konten_misi,
        ]);
        return redirect()->route('visimisi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('visimisis')->where('id', $id)->delete();
        return redirect()->route('visimisi.index');
    }
}
