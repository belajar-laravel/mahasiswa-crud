<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Mahasiswa;
use Session;
use Redirect;
use Input;

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
        return Redirect::to('/app');
    }

    public function edit($id) {
        $mahasiswa = Mahasiswa::find($id);
        return View::make('edit')->with('mahasiswa', $mahasiswa);
    }

    public function update($id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = Input::get('nama');
        $mahasiswa->jurusan = Input::get('jurusan');
        $mahasiswa->save();

        Session::flash('message', 'Data telah tersimpan');
        return Redirect::to('app');
    }

    public function destroy($id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();

        Session::flash('message', 'Data ' . $id . ' telah terhapus');
        return Redirect::to('app');
    }
}
