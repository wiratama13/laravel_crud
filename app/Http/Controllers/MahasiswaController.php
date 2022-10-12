<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index() {

        $mahasiswa = DB::table('mahasiswa')->get();
        return view('pages.index', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request){
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/mahasiswa');
    }

    public function edit($id){
        $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
        return view('pages.edit', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function update(Request $request){
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);
        return redirect('/mahasiswa');
    }
    public function delete($id)
    {
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/mahasiswa');
    }
}
