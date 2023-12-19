<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $berita = DB::table('beritas')
            ->select('*', 'beritas.id as id')
            ->join('kategoris', 'beritas.id_kategori', '=', 'kategoris.id')
            ->orderBy('beritas.id', 'desc')
            ->get();

        $data = [
            'berita' => $berita
        ];
        return view('admin.berita.berita', $data);
    }


    public function create()
    {
        $kategori = DB::table('kategoris')->get();
        $data = [
            'kategori' => $kategori
        ];
        return view('admin.berita.create', $data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'id_kategori' => 'required',
            'kontent' => 'required',
            'tanggal' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png|max:3024',
        ], [
            'id_kategori.required' => 'Kategori Berita Wajib Diisi !!',
            'title.required' => 'Judul Berita Wajib Diisi !!',
            'konten.required' => 'Isi Berita Wajib Diisi !!',
            'tanggal.required' => 'Tanggal Berita Wajib Diisi !!',
            'thumbnail.required' => 'Foto Wajib Diisi !!',
            'thumbnail.mimes' => 'Foto Dalam Format JPG, JPEG, PNG !!',

        ]);

        $file = Request()->thumbnail;
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('thumbnail'), $fileName);

        $input = request()->link;
        $gantiDari = "https://youtu.be/";
        $gantike = "https:/www.youtube.com/embed/";

        DB::table('beritas')->insert([
            'id_kategori' => $request->id_kategori,
            'title' => $request->title,
            'kontent' => $request->kontent,
            'tanggal' => $request->tanggal,
            'thumbnail' => $fileName,
            'link' => str_replace($gantiDari, $gantike, $input),
            'slug' => Str::slug($request->title)
        ]);
        return redirect()->route('berita.index');
    }


    public function show(string $slug)
    {
        $dilihat = DB::table('beritas')
            ->where('slug', $slug)
            ->first()->dilihat;
        DB::table('beritas')->where('slug', $slug)->update(['dilihat' => ++$dilihat]);
        $berita = DB::table('beritas')
            ->where('beritas.slug', $slug)
            ->first();
        $data = [
            'dilihat' => $dilihat,
            'berita' => $berita
        ];

        return view('admin.berita.show', $data);
    }


    public function edit(string $id)
    {
        $berita = DB::table('beritas')->where('id', $id)->first();
        $kategori = DB::table('kategoris')->get();
        $data = [
            'berita' => $berita,
            'kategori' => $kategori
        ];
        return view('admin.berita.edit', $data);
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'id_kategori' => 'required',
            'kontent' => 'required',
            'tanggal' => 'required',
        ], [
            'id_kategori.required' => 'Kategori Berita Wajib Diisi !!',
            'title.required' => 'Judul Berita Wajib Diisi !!',
            'konten.required' => 'Isi Berita Wajib Diisi !!',
            'tanggal.required' => 'Tanggal Berita Wajib Diisi !!',
        ]);

        if ($request->thumbnail) {
            // Hapus thumbnail yang lama
            $thumbnailLama = DB::table('beritas')->where('id', $id)->value('thumbnail');
            if ($thumbnailLama) {
                File::delete(public_path('thumbnail/' . $thumbnailLama));
            }
            // Simpan thumbnail yang baru
            $file = $request->thumbnail;
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('thumbnail'), $fileName);

            // Perbarui data thumbnail
            DB::table('beritas')->where('id', $id)->update(['thumbnail' => $fileName]);
        }

        $input = request()->link;
        $gantiDari = "https://youtu.be/";
        $gantike = "https:/www.youtube.com/embed/";
        DB::table('beritas')->where('id', $id)->update([
            'id_kategori' => $request->id_kategori,
            'title' => $request->title,
            'kontent' => $request->kontent,
            'tanggal' => $request->tanggal,
            'link' => str_replace($gantiDari, $gantike, $input),
            'slug' => Str::slug($request->title)
        ]);

        return redirect()->route('berita.index');
    }

    public function destroy(string $slug)
    {
        $berita = DB::table('beritas')
            ->where('slug', $slug)
            ->first();

        if ($berita) {
            if ($berita->thumbnail && File::exists(public_path('thumbnail') . '/' . $berita->thumbnail)) {
                File::delete(public_path('thumbnail') . '/' . $berita->thumbnail);
            }
            DB::table('beritas')->where('slug', $slug)->delete();
            return redirect()->route('berita.index');
        } else {
            return redirect()->route('berita.index')->with('error', 'gagal menghapus data');
        }
    }
}
