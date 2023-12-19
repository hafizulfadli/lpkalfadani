<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
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
        $about = DB::table('abouts')->get();
        $data = [
            'about' => $about
        ];
        return view('admin.about.about', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
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

        DB::table('abouts')->insert([
            'title' => $request->title,
            'konten' => $request->konten,
            'image' => $fileName,
        ]);
        return redirect()->route('about.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $about = DB::table('abouts')->where('id', $id)->first();
        $data = [
            'about' => $about
        ];

        return view('admin.about.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = DB::table('abouts')->where('id', $id)->first();
        $data = [
            'about' => $about
        ];

        return view('admin.about.edit', $data);
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
            $thumbnailLama = DB::table('abouts')->where('id', $id)->value('image');
            if ($thumbnailLama) {
                File::delete(public_path('thumbnail/' . $thumbnailLama));
            }
            // Simpan thumbnail yang baru
            $file = $request->image;
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('thumbnail'), $fileName);

            // Perbarui data thumbnail
            DB::table('abouts')->where('id', $id)->update(['image' => $fileName]);
        }

        DB::table('abouts')->where('id', $id)->update([
            'title' => $request->title,
            'konten' => $request->konten,
        ]);
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = DB::table('abouts')->where('id', $id)->first();
        if ($about) {
            if ($about->image && File::exists(public_path('thumbnail') . '/' . $about->image)) {
                File::delete(public_path('thumbnail') . '/' . $about->image);
            }
            DB::table('abouts')->where('id', $id)->delete();
            return redirect()->route('about.index');
        } else {
            return redirect()->route('about.index')->with('error', 'gagal menghapus data');
        }
    }
}
