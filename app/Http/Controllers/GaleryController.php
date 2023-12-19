<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GaleryController extends Controller
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
        $galery = DB::table('galeries')->get();
        $data = [
            'galery' => $galery
        ];
        return view('admin.galery.galery', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:5024',
        ], [
            'title.required' => 'title wajib diisi !!',
            'image.required' => 'image wajib diisi !!',
            'image.mimes' => 'foto dalam format JPG, JPEG, PNG !!',

        ]);

        $file = Request()->image;
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('thumbnail'), $fileName);

        DB::table('galeries')->insert([
            'title' => $request->title,
            'image' => $fileName,
        ]);
        return redirect()->route('galery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $galery = DB::table('galeries')->where('id', $id)->first();
        $data = [
            'galery' => $galery
        ];

        return view('admin.galery.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galery = DB::table('galeries')->where('id', $id)->first();
        $data = [
            'galery' => $galery
        ];

        return view('admin.galery.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
        ], [
            'title.required' => 'title wajib diisi !!',

        ]);

        if ($request->image) {
            // Hapus thumbnail yang lama
            $thumbnailLama = DB::table('galeries')->where('id', $id)->value('image');
            if ($thumbnailLama) {
                File::delete(public_path('thumbnail/' . $thumbnailLama));
            }
            // Simpan thumbnail yang baru
            $file = $request->image;
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('thumbnail'), $fileName);

            // Perbarui data thumbnail
            DB::table('galeries')->where('id', $id)->update(['image' => $fileName]);
        }

        DB::table('galeries')->where('id', $id)->update([
            'title' => $request->title,
        ]);
        return redirect()->route('galery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galery = DB::table('galeries')->where('id', $id)->first();
        if ($galery) {
            if ($galery->image && File::exists(public_path('thumbnail') . '/' . $galery->image)) {
                File::delete(public_path('thumbnail') . '/' . $galery->image);
            }
            DB::table('galeries')->where('id', $id)->delete();
            return redirect()->route('galery.index');
        } else {
            return redirect()->route('galery.index')->with('error', 'gagal menghapus data');
        }
    }
}
