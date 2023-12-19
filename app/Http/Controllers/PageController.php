<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PageController extends Controller
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
        $page = DB::table('pages')
            ->select('*', 'pages.id as id')
            ->join('navbars', 'pages.navbar_id', '=', 'navbars.id')
            ->orderBy('pages.id', 'desc')
            ->get();

        $data = [
            'page' => $page
        ];
        return view('admin.page.page', $data);
    }


    public function create()
    {
        $navbar = DB::table('navbars')->get();
        $data = [
            'navbar' => $navbar
        ];
        return view('admin.page.create', $data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'konten' => 'required',
            'tanggal' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png|max:1024',
        ], [
            'judul.required' => 'Judul page Wajib Diisi !!',
            'konten.required' => 'Isi page Wajib Diisi !!',
            'tanggal.required' => 'Tanggal page Wajib Diisi !!',
            'thumbnail.required' => 'Foto Wajib Diisi !!',
            'thumbnail.mimes' => 'Foto Dalam Format JPG, JPEG, PNG !!',

        ]);

        $file = Request()->thumbnail;
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('thumbnail'), $fileName);

        DB::table('pages')->insert([
            'navbar_id' => $request->navbar_id,
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
            'thumbnail' => $fileName,
            'slug' => Str::slug($request->judul)
        ]);
        return redirect()->route('page.index');
    }


    public function show(string $slug)
    {
        $dilihat = DB::table('pages')
            ->where('slug', $slug)
            ->first()->dilihat;
        DB::table('pages')->where('slug', $slug)->update(['dilihat' => ++$dilihat]);
        $page = DB::table('pages')
            ->select('*', 'pages.id as id')
            ->join('navbars', 'pages.navbar_id', '=', 'navbars.id')
            ->where('pages.slug', $slug)
            ->first();
        $data = [
            'dilihat' => $dilihat,
            'page' => $page
        ];

        return view('admin.page.show', $data);
    }


    public function edit(string $id)
    {
        $page = DB::table('pages')->where('id', $id)->first();
        $navbar = DB::table('navbars')->get();
        $data = [
            'page' => $page,
            'navbar' => $navbar
        ];
        return view('admin.page.edit', $data);
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'navbar_id' => 'required',
            'konten' => 'required',
            'tanggal' => 'required',
        ], [
            'navbar_id.required' => 'menu page Wajib Diisi !!',
            'judul.required' => 'Judul page Wajib Diisi !!',
            'konten.required' => 'Isi page Wajib Diisi !!',
            'tanggal.required' => 'Tanggal page Wajib Diisi !!',
        ]);

        if ($request->thumbnail) {
            // Hapus thumbnail yang lama
            $thumbnailLama = DB::table('pages')->where('id', $id)->value('thumbnail');
            if ($thumbnailLama) {
                File::delete(public_path('thumbnail/' . $thumbnailLama));
            }
            // Simpan thumbnail yang baru
            $file = $request->thumbnail;
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('thumbnail'), $fileName);

            // Perbarui data thumbnail
            DB::table('pages')->where('id', $id)->update(['thumbnail' => $fileName]);
        }

        DB::table('pages')->where('id', $id)->update([
            'navbar_id' => $request->navbar_id,
            'judul' => $request->judul,
            'konten' => $request->konten,
            'tanggal' => $request->tanggal,
            'slug' => Str::slug($request->judul)
        ]);

        return redirect()->route('page.index');
    }

    public function destroy(string $slug)
    {
        $page = DB::table('pages')
            ->where('slug', $slug)
            ->first();

        if ($page) {
            if ($page->thumbnail && File::exists(public_path('thumbnail') . '/' . $page->thumbnail)) {
                File::delete(public_path('thumbnail') . '/' . $page->thumbnail);
            }
            DB::table('pages')->where('slug', $slug)->delete();
            return redirect()->route('page.index');
        } else {
            return redirect()->route('page.index')->with('error', 'gagal menghapus data');
        }
    }
}
