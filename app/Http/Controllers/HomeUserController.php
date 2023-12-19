<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeUserController extends Controller
{
    private $Visitor;
    public function __construct()
    {
        $this->Visitor = new Visitor();
    }
    public function index()
    {

        $beritaterbaru = DB::table('beritas')->orderBy('id', 'desc')->limit(1)->get();
        $beritaslide1 = DB::table('beritas')->orderBy('id', 'desc')->limit(4)->get();
        $beritaslide2 = DB::table('beritas')->orderBy('id', 'desc')->limit(4)->skip(4)->get();
        $beritapopuler = DB::table('beritas')->orderBy('dilihat', 'desc')->limit(5)->get();
        $setting = DB::table('settings')->get();
        $kategori = DB::table('kategoris')->get();
        $sambutan = DB::table('sambutans')->first();
        $data = [
            'beritaterbaru' => $beritaterbaru,
            'beritaslide1' => $beritaslide1,
            'beritaslide2' => $beritaslide2,
            'beritapopuler' => $beritapopuler,
            'setting' => $setting,
            'kategori' => $kategori,
            'sambutan' => $sambutan,
            'hitungpengunjung' => $this->Visitor->hitungpengunjung(),

        ];
        return view('user.home.home', $data);
    }
    public function detailberita($slug)
    {
        $detailberita = DB::table('beritas')->where('slug', $slug)->first();
        $kategori = DB::table('kategoris')->get();
        $berita1 = DB::table('beritas')->limit(5)->get();
        $setting = DB::table('settings')->get();
        $berita = DB::table('beritas')->get();
        $dilihat = DB::table('beritas')
            ->where('slug', $slug)
            ->first()->dilihat;
        DB::table('beritas')->where('slug', $slug)->update(['dilihat' => ++$dilihat]);
        $data = [
            'detailberita' => $detailberita,
            'berita1' => $berita1,
            'berita' => $berita,
            'kategori' => $kategori,
            'setting' => $setting,
            'dilihat' => $dilihat,
        ];
        return view('user.home.detail', $data);
    }
    public function sambutan()
    {
        $sambutan = DB::table('sambutans')->get();
        $setting = DB::table('settings')->get();
        $kategori = DB::table('kategoris')->get();
        $data = [
            'sambutan' => $sambutan,
            'setting' => $setting,
            'kategori' => $kategori,
        ];
        return view('user.sambutan.sambutan', $data);
    }
    public function profil()
    {
        $profil = DB::table('abouts')->get();
        $setting = DB::table('settings')->get();
        $kategori = DB::table('kategoris')->get();
        $data = [
            'about' => $profil,
            'setting' => $setting,
            'kategori' => $kategori,
        ];
        return view('user.profil.profil', $data);
    }
    public function visimisi()
    {
        $visimisi = DB::table('visimisis')->get();
        $setting = DB::table('settings')->get();
        $kategori = DB::table('kategoris')->get();
        $data = [
            'visimisi' => $visimisi,
            'setting' => $setting,
            'kategori' => $kategori,
        ];
        return view('user.visimisi.visimisi', $data);
    }

    public function berita($nama_kategori)
    {
        $berita = DB::table('beritas')->get();
        $setting = DB::table('settings')->get();
        $kategori = DB::table('kategoris')->get();
        $beritakategoris = DB::table('beritas')
            ->select('*', 'beritas.id as id')
            ->join('kategoris', 'beritas.id_kategori', '=', 'kategoris.id')
            ->where('kategoris.nama_kategori', $nama_kategori)
            ->limit(4)
            ->get();
        $beritakategoris2 = DB::table('beritas')
            ->select('*', 'beritas.id as id')
            ->join('kategoris', 'beritas.id_kategori', '=', 'kategoris.id')
            ->where('kategoris.nama_kategori', $nama_kategori)
            ->limit(4)
            ->skip(4)
            ->get();
        $beritanamakategoris = DB::table('beritas')
            ->select('*', 'beritas.id as id')
            ->join('kategoris', 'beritas.id_kategori', '=', 'kategoris.id')
            ->where('kategoris.nama_kategori', $nama_kategori)->Limit(1)
            ->first();
        $beritapopuler = DB::table('beritas')
            ->select('*', 'beritas.id as id')
            ->join('kategoris', 'beritas.id_kategori', '=', 'kategoris.id')
            ->where('kategoris.nama_kategori', $nama_kategori)
            ->limit(5)
            ->orderBy('beritas.dilihat', 'desc')
            ->get();
        $data = [
            'berita' => $berita,
            'setting' => $setting,
            'kategori' => $kategori,
            'beritakategoris' => $beritakategoris,
            'beritakategoris2' => $beritakategoris2,
            'beritanamakategoris' => $beritanamakategoris,
            'beritapopuler' => $beritapopuler,
        ];
        return view('user.berita.berita', $data);
    }
    public function namaroute($nama_route)
    {
        $data['pages'] = DB::table('pages')
            ->leftjoin('navbars', 'pages.navbar_id', '=', 'navbars.id')
            ->where('navbars.url', 'LIKE', '%' . $nama_route)
            ->get();
        $beritapopuler = DB::table('beritas')
            ->select('*', 'beritas.id as id')
            ->join('kategoris', 'beritas.id_kategori', '=', 'kategoris.id')
            ->limit(5)
            ->orderBy('beritas.dilihat', 'desc')
            ->get();
        $setting = DB::table('settings')->get();
        $kategori = DB::table('kategoris')->get();
        $navbar = DB::table('navbars')->get();
        $data = [
            'beritapopuler' => $beritapopuler,
            'setting' => $setting,
            'navbar' => $navbar,
            'kategori' => $kategori,
            'nama' => $nama_route,
        ];
        $data['tampilpages'] = DB::table('pages')
            ->select('*', 'pages.id as id')
            ->join('navbars', 'navbars.id', '=', 'pages.navbar_id')
            ->where('navbars.title', $nama_route)
            ->limit(4)
            ->get();

        $data['tampilpages2'] = DB::table('pages')
            ->select('*', 'pages.id as id')
            ->join('navbars', 'navbars.id', '=', 'pages.navbar_id')
            ->where('navbars.title', $nama_route)
            ->limit(4)
            ->skip(4)
            ->get();

        return view('user.landing_page.pages', $data);
    }
    public function detailpage($nama_route)
    {

        $data['tampilpages'] = DB::table('pages')
            ->select('*', 'pages.id as id')
            ->join('navbars', 'navbars.id', '=', 'pages.navbar_id')
            ->where('navbars.title', $nama_route)
            ->limit(4)
            ->get();
        $beritapopuler = DB::table('beritas')
            ->select('*', 'beritas.id as id')
            ->join('kategoris', 'beritas.id_kategori', '=', 'kategoris.id')
            ->limit(5)
            ->orderBy('beritas.dilihat', 'desc')
            ->get();
        $setting = DB::table('settings')->get();
        $kategori = DB::table('kategoris')->get();
        $page = DB::table('pages')->where('id', $nama_route)->first();
        $data = [
            'beritapopuler' => $beritapopuler,
            'setting' => $setting,
            'kategori' => $kategori,
            'page' => $page,
            'nama' => $nama_route


        ];
        return view('user.landing_page.detail', $data);
    }
    public function program()
    {
        $program = DB::table('programs')->get();
        $setting = DB::table('settings')->get();
        $kategori = DB::table('kategoris')->get();
        $data = [
            'program' => $program,
            'setting' => $setting,
            'kategori' => $kategori,
        ];
        return view('user.program.program', $data);
    }
    public function galery()
    {
        $galery = DB::table('galeries')->limit(12)->get();
        $setting = DB::table('settings')->get();
        $kategori = DB::table('kategoris')->get();
        $data = [
            'galery' => $galery,
            'setting' => $setting,
            'kategori' => $kategori,
        ];
        return view('user.galery.galery', $data);
    }
    public function kontak()
    {
        $setting = DB::table('settings')->get();
        $setting1 = DB::table('settings')->limit(1)->get();
        $kategori = DB::table('kategoris')->get();
        $data = [
            'setting1' => $setting1,
            'setting' => $setting,
            'kategori' => $kategori,
        ];
        return view('user.kontak.kontak', $data);
    }
}
