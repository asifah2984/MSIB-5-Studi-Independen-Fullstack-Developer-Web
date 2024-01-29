<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Pelanggan;
use App\models\Kartu;
use RealRashid\SweetAlert\Facades\Alert;


class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Query Eloquent 
        $pelanggan = Pelanggan::all();

        $title = 'Hapus Pelanggan !';
        $text = "Apakah Anda yakin untuk menghapus ?";
        confirmDelete($title, $text);

        return view('admin.pelanggan.index', ['pelanggan' => $pelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Query Eloquent
        $kartu = Kartu::all();
        $gender = ['L', 'P'];
        return view('admin.pelanggan.create', compact('kartu', 'gender'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Query Eloquent
        $pelanggan = new Pelanggan;
        $pelanggan->kode = $request->kode;
        $pelanggan->nama = $request->nama;
        $pelanggan->jk = $request->jk;
        $pelanggan->tmp_lahir = $request->tmp_lahir;
        $pelanggan->tgl_lahir = $request->tgl_lahir;
        $pelanggan->email = $request->email;
        $pelanggan->kartu_id = $request->kartu_id;
        $pelanggan->save();

        Alert::success('Pelanggan', ' Data Pelanggan berhasil Ditambahkan');

        return redirect('admin/pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Query Eloquent
        $pelanggan = Pelanggan::find($id);
        return view ('admin.pelanggan.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Query Eloquent
        $pelanggan = Pelanggan::all()->where('id', $id);
        $kartu = Kartu::all();
        $gender = ['L','P'];
        return view ('admin.pelanggan.edit', compact('pelanggan', 'kartu','gender'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Query Eloquent
        $pelanggan = Pelanggan::find($request->id);
        $pelanggan->kode = $request->kode;
        $pelanggan->nama = $request->nama;
        $pelanggan->jk = $request->jk;
        $pelanggan->tmp_lahir = $request->tmp_lahir;
        $pelanggan->tgl_lahir = $request->tgl_lahir;
        $pelanggan->email = $request->email;
        $pelanggan->kartu_id = $request->kartu_id;
        $pelanggan->save();
        return redirect('admin/pelanggan', compact('pelanggan', 'kartu','gender'))->with('success', 'Pelanggan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Query Eloquent
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect('admin/pelanggan')->with('success', 'Data Pelanggan berhasil Dihapus');
    }
}
