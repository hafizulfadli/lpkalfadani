<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NavbarController extends Controller
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
        $navbar = DB::table('navbars')->get();
        $data = [
            'navbar' => $navbar
        ];
        return view('admin.navbar.navbar', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $navbar = DB::table('navbars')->get();
        $data = [
            'navbar' => $navbar
        ];
        return view('admin.navbar.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'url' => 'required',
        ], [
            'title' => 'title wajib diisi !',
            'url' => 'title wajib diisi !',

        ]);
        DB::table('navbars')->insert([
            'parent_id' => Request()->parent_id,
            'title' => $request->title,
            'url' => $request->url,
        ]);
        return redirect()->route('navbar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $navbar = DB::table('navbars')->where('id', $id)->first();
        $navbar1 = DB::table('navbars')->get();
        $data = [
            'navbar' => $navbar,
            'navbar1' => $navbar1
        ];
        return view('admin.navbar.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required',
            'url' => 'required',
        ], [
            'title' => 'title wajib diisi !',
            'url' => 'title wajib diisi !',

        ]);
        DB::table('navbars')->where('id', $id)->update([
            'parent_id' => Request()->parent_id,
            'title' => $request->title,
            'url' => $request->url,
        ]);
        return redirect()->route('navbar.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('navbars')->where('id', $id)->delete();
        return redirect()->route('navbar.index');
    }
}
