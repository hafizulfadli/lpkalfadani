<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $hitungberita = DB::table('beritas')->count();
        $hitungprogram = DB::table('programs')->count();
        $hitungkategori = DB::table('kategoris')->count();
        $hitunguser = DB::table('users')->count();
        $data = [
            'hitungberita' => $hitungberita,
            'hitungprogram' => $hitungprogram,
            'hitungkategori' => $hitungkategori,
            'hitunguser' => $hitunguser,
            // 'hitungpengunjung' => $this->Visitor->diagram(),
            'visitorlogs' => $visitorlogs = Visitor::select(DB::raw('CONCAT(EXTRACT(YEAR FROM tanggal), "-", LPAD(EXTRACT(MONTH FROM tanggal), 2, "0"), "-01") AS bulan_tahun'), DB::raw('SUM(count) AS jumlah_view'))
                ->groupBy('bulan_tahun')
                ->orderBy('bulan_tahun')
                ->get(),
            'dates' => $visitorlogs->pluck('bulan_tahun'),
            'visitorviews' => $visitorlogs->pluck('jumlah_view'),
        ];
        return view('admin.dashboard.dashboard', $data);
    }
}
