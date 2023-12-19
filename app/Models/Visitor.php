<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitor extends Model
{
    use HasFactory;
    protected $table = 'visitors';
    protected $fillable = ['tanggal', 'count'];

    public function HitungPengunjung()
    {
        $date = now()->format('Y-m-d');
        $visitorLog = Visitor::where('tanggal', $date)->first();
        $visitorCount = $visitorLog ? $visitorLog->count : 0;
    }
    public function diagram()
    {
        return DB::table('visitors')::orderBy('tanggal')->get();
    }
}
