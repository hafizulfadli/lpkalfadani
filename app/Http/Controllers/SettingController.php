<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
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
        $setting = DB::table('settings')->get();
        $data = [
            'setting' => $setting
        ];
        return view('admin.setting.setting', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'alamat1' => 'required',
            'alamat2' => 'required',
            'map' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'whatsapp' => 'required',
            'youtube' => 'required',
            'tiktok' => 'required',
        ], [
            'alamat1' => 'alamat 1 wajib diisi!',
            'alamat2' => 'alamat 2 wajib diisi!',
            'map' => 'map wajib diisi!',
            'phone' => 'phone wajib diisi!',
            'email' => 'email wajib diisi!',
            'instagram' => 'instagram wajib diisi!',
            'facebook' => 'facebook wajib diisi!',
            'whatsapp' => 'whatsapp wajib diisi!',
            'youtube' => 'youtube wajib diisi!',
            'tiktok' => 'tiktok',

        ]);
        DB::table('settings')->insert([
            'alamat1' => $request->alamat1,
            'alamat2' => $request->alamat2,
            'map' => $request->map,
            'phone' => $request->phone,
            'email' => $request->email,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'youtube' => $request->youtube,
            'tiktok' => $request->tiktok,
        ]);
        return redirect()->route('setting.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $setting = DB::table('settings')->where('id', $id)->first();
        $data = [
            'setting' => $setting
        ];
        return view('admin.setting.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $setting = DB::table('settings')->where('id', $id)->first();
        $data = [
            'setting' => $setting
        ];
        return view('admin.setting.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'alamat1' => 'required',
            'alamat2' => 'required',
            'map' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'whatsapp' => 'required',
            'youtube' => 'required',
            'tiktok' => 'required',
        ], [
            'alamat1' => 'alamat 1 wajib diisi!',
            'alamat2' => 'alamat 2 wajib diisi!',
            'map' => 'map wajib diisi!',
            'phone' => 'phone wajib diisi!',
            'email' => 'email wajib diisi!',
            'instagram' => 'instagram wajib diisi!',
            'facebook' => 'facebook wajib diisi!',
            'whatsapp' => 'whatsapp wajib diisi!',
            'youtube' => 'youtube wajib diisi!',
            'tiktok' => 'tiktok',

        ]);
        DB::table('settings')->where('id', $id)->update([
            'alamat1' => $request->alamat1,
            'alamat2' => $request->alamat2,
            'map' => $request->map,
            'phone' => $request->phone,
            'email' => $request->email,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'whatsapp' => $request->whatsapp,
            'youtube' => $request->youtube,
            'tiktok' => $request->tiktok,
        ]);
        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('settings')->where('id', $id)->delete();
        return redirect()->route('setting.index');
    }
}
