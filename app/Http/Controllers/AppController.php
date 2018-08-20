<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Mahasiswa;
use Session;
use Redirect;

class AppController extends Controller
{
    public function index() {
        $listMahasiswa = Mahasiswa::all();
        return View::make('index')->with('listMahasiswa', $listMahasiswa);
    }

    public function create() {
        return View::make('add-form');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nim' => 'required', 
            'nama' => 'required'
        ]);

        $mahasiswa = new Mahasiswa;

        $mahasiswa->nim = $request->input('nim');
        $mahasiswa->nama = $request->input('nama');
        $mahasiswa->jurusan = $request->input('jurusan');

        $mahasiswa->save();

        Session::flash('message', 'Data telah tersimpan');
        return Redirect::to('/');
    }

    public function edit($id) {
        dump($id);
        $mahasiswa = Mahasiswa::find($id);
        return View::make('edit')->with('mahasiswa', $mahasiswa);
    }
}
