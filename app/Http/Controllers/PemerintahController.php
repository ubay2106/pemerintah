<?php

namespace App\Http\Controllers;

use App\Models\BidangModel;
use App\Models\JabatanModel;
use App\Models\PemerintahModel;
use Illuminate\Http\Request;

class PemerintahController extends Controller
{
    public function index()
    {
        $data = [
            'pemerintah' => PemerintahModel::all(),
        ];
        return view('pemerintah', $data);
    }

    public function tambah_pemerintah()
    {
        $bidang = BidangModel::all();
        $jabatan = JabatanModel::all();
        return view('tambah-pemerintah', compact('bidang', 'jabatan'));
    }

    public function action_tambah_pemerintah(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string',
            'jk' => 'required|in:laki-laki,perempuan',
            'bidang_id' => 'required|exists:bidang,id',
            'jabatan_id' => 'required|exists:jabatan,id',
        ]);

        PemerintahModel::create($request->all());
        return redirect('/pemerintah')->with('success', 'Pemerintah berhasil ditambahkan');
    }

    public function edit_pemerintah($id){
        $jabatan = JabatanModel::all();
        $bidang = BidangModel::all();
        
        $detail = PemerintahModel::findOrFail($id);
    
        return view('edit-pemerintah',  compact('detail','jabatan','bidang'));
    }
    public function action_edit_pemerintah(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string',
            'jk' => 'required|in:laki-laki,perempuan',
            'jabatan_id' => 'required|exists:jabatan,id',
            'bidang_id' => 'required|exists:bidang,id',
        ]);

        $pemerintah = PemerintahModel::findOrFail($id);
        $pemerintah->update($request->only(['nama', 'email', 'jk', 'jabatan_id', 'bidang_id']));
        return redirect('/pemerintah')->with('success', 'Pemerintah berhasil ditambahkan');
    }

    public function hapus_pemerintah($id)
    {
        $pemerintah = PemerintahModel::findOrFail($id);
        $pemerintah->delete();

        return back()->with('success','Pemerintah berhasil dihapus');
    }
}