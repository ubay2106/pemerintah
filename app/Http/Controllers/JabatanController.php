<?php

namespace App\Http\Controllers;

use App\Models\BidangModel;
use App\Models\JabatanModel;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $data = [
            'jabatan' => JabatanModel::all(),
        ];
        return view('jabatan', $data);
    }

    public function tambah_jabatan()
    {
        return view('tambah-jabatan');
    }

    public function action_tambah_jabatan(Request $request)
    {
        $nama_jabatan = $request->nama_jabatan;
        $jabatan = new JabatanModel();
        $jabatan->nama_jabatan = $nama_jabatan;

        $jabatan->save();
        return redirect('/jabatan')->with('success', 'jabatan berhasil ditambahkan');
    }

    public function edit_jabatan($id)
    {
        $data = [
            'detail' => JabatanModel::findOrFail($id),
        ];

        return view('edit-jabatan', $data);
    }

    public function action_edit_jabatan($id, Request $request)
    {
        $nama_jabatan = $request->nama_jabatan;
        $jabatan = JabatanModel::findOrFail($id);
        $jabatan->update([
            'nama_jabatan' => $nama_jabatan,
        ]);

        return redirect('/jabatan')->with('success', 'jabatan berhasil diedit');
    }

    public function hapus_jabatan($id)
    {
        $jabatan = JabatanModel::findOrFail($id);
        $jabatan->delete();

        return back()->with('success', 'jabatan berhasil dihapus');
    }
}
