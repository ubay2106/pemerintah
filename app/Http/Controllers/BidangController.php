<?php

namespace App\Http\Controllers;

use App\Models\BidangModel;
use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index()
    {
        $data = [
            'bidang' => BidangModel::all(),
        ];
        return view('bidang', $data);
    }

    public function tambah_bidang()
    {
        return view('tambah-bidang');
    }

    public function action_tambah_bidang(Request $request)
    {
        $nama_bidang = $request->nama_bidang;
        $bidang = new BidangModel();
        $bidang->nama_bidang = $nama_bidang;

        $bidang->save();
        return redirect('/bidang')->with('success', 'Bidang berhasil ditambahkan');
    }

    public function edit_bidang($id)
    {
        $data = [
            'detail' => BidangModel::findOrFail($id),
        ];

        return view('edit-bidang', $data);
    }

    public function action_edit_bidang($id, Request $request)
    {
        $nama_bidang = $request->nama_bidang;
        $bidang = BidangModel::findOrFail($id);
        $bidang->update([
            'nama_bidang' => $nama_bidang,
        ]);

        return redirect('/bidang')->with('success', 'bidang berhasil diedit');
    }

    public function hapus_bidang($id)
    {
        $bidang = BidangModel::findOrFail($id);
        $bidang->delete();

        return back()->with('success', 'bidang berhasil dihapus');
    }
}
