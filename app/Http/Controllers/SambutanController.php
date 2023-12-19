<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SambutanController extends Controller
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
        $sambutan = DB::table('sambutans')->get();
        $data = [
            'sambutan' => $sambutan
        ];
        return view('admin.sambutan.sambutan', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sambutan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'konten' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:1024',
        ], [
            'title.required' => 'title wajib diisi !!',
            'konten.required' => 'kontent wajib diisi !!',
            'image.required' => 'image wajib diisi !!',
            'image.mimes' => 'foto dalam format JPG, JPEG, PNG !!',

        ]);

        $file = Request()->image;
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('thumbnail'), $fileName);

        DB::table('sambutans')->insert([
            'title' => $request->title,
            'konten' => $request->konten,
            'image' => $fileName,
        ]);
        return redirect()->route('sambutan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sambutan = DB::table('sambutans')->where('id', $id)->first();
        $data = [
            'sambutan' => $sambutan
        ];

        return view('admin.sambutan.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sambutan = DB::table('sambutans')->where('id', $id)->first();
        $data = [
            'sambutan' => $sambutan
        ];

        return view('admin.sambutan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'konten' => 'required',
        ], [
            'title.required' => 'title wajib diisi !!',
            'konten.required' => 'kontent wajib diisi !!',

        ]);

        if ($request->image) {
            // Hapus thumbnail yang lama
            $thumbnailLama = DB::table('sambutans')->where('id', $id)->value('image');
            if ($thumbnailLama) {
                File::delete(public_path('thumbnail/' . $thumbnailLama));
            }
            // Simpan thumbnail yang baru
            $file = $request->image;
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('thumbnail'), $fileName);

            // Perbarui data thumbnail
            DB::table('sambutans')->where('id', $id)->update(['image' => $fileName]);
        }

        DB::table('sambutans')->where('id', $id)->update([
            'title' => $request->title,
            'konten' => $request->konten,
        ]);
        return redirect()->route('sambutan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sambutan = DB::table('sambutans')->where('id', $id)->first();
        if ($sambutan) {
            if ($sambutan->image && File::exists(public_path('thumbnail') . '/' . $sambutan->image)) {
                File::delete(public_path('thumbnail') . '/' . $sambutan->image);
            }
            DB::table('sambutans')->where('id', $id)->delete();
            return redirect()->route('sambutan.index');
        } else {
            return redirect()->route('sambutan.index')->with('error', 'gagal menghapus data');
        }
    }
}
