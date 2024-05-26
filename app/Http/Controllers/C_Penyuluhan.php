<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Penyuluhan;
use App\Models\Kecamatan;
use App\Models\Validasi;
use App\Models\Konfirmasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class C_Penyuluhan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no = 0;
        $id = Auth::user()->id;
        $currentuser = User::find($id);
        $penyuluhanTernak = Penyuluhan::orderBy('created_at', 'ASC')->get();

        return view('penyuluhan.V_Penyuluhan', compact('penyuluhanTernak', 'currentuser', 'id', 'no'));
    }

    public function detail(Request $request, $id)
    {
        $decryptedID = Crypt::decryptString($id);
        $penyuluhanTernak = Penyuluhan::findOrFail($decryptedID);
        $users_id = $penyuluhanTernak['users_id'];
        $currentuser = User::find($users_id);
        $validasi_id = $penyuluhanTernak->validasi_id;
        $validasi_table = Validasi::find($validasi_id);
        $validasi = $validasi_table->nama;
        $konfirmasi_id = $penyuluhanTernak->konfirmasi_id;
        $konfirmasi_table = Konfirmasi::find($konfirmasi_id);
        $konfirmasi = $konfirmasi_table->nama;
        $kecamatan_id = $currentuser->kecamatan_id;
        $kecamatan = Kecamatan::find($kecamatan_id);

        return view('penyuluhan.V_detailPenyuluhan', compact('penyuluhanTernak', 'currentuser', 'validasi', 'konfirmasi', 'kecamatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penyuluhan.V_tambahPenyuluhan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;

        $validatedAdd = $request->validate([
            'surat_pengantar'=> 'required|file|mimes:jpg,jpeg,png',
            'surat_usaha'=> 'required|file|mimes:jpg,jpeg,png',
            'suhu_kandang'=> 'required',
            'kadar_air'=> 'required',
            'kadar_pakan'=> 'required',
            'kondisi_ayam'=> 'required',
            'foto_ayam'=> 'required|file|mimes:jpg,jpeg,png',
            'foto_peternakan'=> 'required|file|mimes:jpg,jpeg,png',
            'users_id',
        ]);

        if ($request->hasFile('surat_pengantar')) {
            $file = $request->file('surat_pengantar');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_surat', $file_name);
            $validatedAdd['surat_pengantar'] = $file_name;
        };
        if ($request->hasFile('surat_usaha')) {
            $file = $request->file('surat_usaha');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_surat', $file_name);
            $validatedAdd['surat_usaha'] = $file_name;
        };
        if ($request->hasFile('foto_ayam')) {
            $file = $request->file('foto_ayam');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_peternak', $file_name);
            $validatedAdd['foto_ayam'] = $file_name;
        };
        if ($request->hasFile('foto_peternakan')) {
            $file = $request->file('foto_peternakan');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_peternak', $file_name);
            $validatedAdd['foto_peternakan'] = $file_name;
        };

        $validatedAdd['users_id'] = $id;
        Penyuluhan::create($validatedAdd);

        return redirect('penyuluhanTernak')->with('success', 'Pengajuan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $decryptedID = Crypt::decryptString($id);
        $penyuluhanTernak = Penyuluhan::findOrFail($decryptedID);
        return view('penyuluhan.V_editPenyuluhan', compact('penyuluhanTernak'));
    }

    public function dinasValidasi(Request $request, $id)
    {
        $decryptedID = Crypt::decryptString($id);
        $penyuluhanTernak = Penyuluhan::findOrFail($decryptedID);
        return view('penyuluhan.V_validasiPenyuluhan', compact('penyuluhanTernak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $decryptedID = Crypt::decryptString($id);
        $penyuluhanTernak = Penyuluhan::findOrFail($decryptedID);
        $validasi_id = $penyuluhanTernak->validasi_id;
        $message = [
            'required_if'  => 'foto konfirmasi wajib diisi.',
        ];

        $validatedUpdate = $request->validate([
            'surat_pengantar'=> 'file|mimes:jpg,jpeg,png',
            'surat_usaha'=> 'file|mimes:jpg,jpeg,png',
            'suhu_kandang'=> 'required',
            'kadar_air'=> 'required',
            'kadar_pakan'=> 'required',
            'kondisi_ayam'=> 'required',
            'foto_ayam'=> 'file|mimes:jpg,jpeg,png',
            'validasi_id',
            'foto_peternakan'=> 'file|mimes:jpg,jpeg,png',
            'foto_konfirmasi'=> 'required_if:validasi_id,==,1|file|mimes:jpg,jpeg,png',
            'konfirmasi_id',
        ], $message);

        if ($request->hasFile('surat_pengantar')) {
            $file = $request->file('surat_pengantar');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_surat', $file_name);
            $validated['surat_pengantar'] = $file_name;
        };
        if ($request->hasFile('surat_usaha')) {
            $file = $request->file('surat_usaha');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_surat', $file_name);
            $validatedAdd['surat_usaha'] = $file_name;
        };
        if ($request->hasFile('foto_ayam')) {
            $file = $request->file('foto_ayam');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_peternak', $file_name);
            $validatedUpdate['foto_ayam'] = $file_name;
        };
        if ($request->hasFile('foto_peternakan')) {
            $file = $request->file('foto_peternakan');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_peternak', $file_name);
            $validatedUpdate['foto_peternakan'] = $file_name;
        };
        if ($request->hasFile('foto_konfirmasi')) {
            $file = $request->file('foto_konfirmasi');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_peternak', $file_name);
            $validatedUpdate['foto_konfirmasi'] = $file_name;
        };

        if($validasi_id != 3){
            $checkbox = $request->input('konfirmasi_id');
            $validatedUpdate['konfirmasi_id'] = $checkbox;
        };
        if($validasi_id == 3){
            $validatedUpdate['konfirmasi_id'] = 2;
            $validatedUpdate['validasi_id'] = 2;
        };

        $kondisiAyam = [
            'kondisi_ayam'=> $request->kondisi_ayam,
        ];

        $validatedUpdate['kondisi_ayam'] = $kondisiAyam['kondisi_ayam'];

        $penyuluhanTernak->update($validatedUpdate);

        return redirect('penyuluhanTernak')->with('success', 'Pengajuan Berhasil Diubah!');
    }

    public function updateValidasi(Request $request, $id)
    {
        $decryptedID = Crypt::decryptString($id);
        $penyuluhanTernak = Penyuluhan::findOrFail($decryptedID);
        
        $checkbox = $request->input('validasi');
        $tanggal = $request->input('tanggal_penyuluhan');

        $validatedUpdate = $request->validate([
            'validasi_id'=> 'required',
            'tanggal_penyuluhan',
            'catatan',
        ]);

        $isiCatatan = [
            'catatan'=> $request->catatan,
        ];
        
        $validatedUpdate['validasi'] = $checkbox;
        $validatedUpdate['catatan'] = $isiCatatan['catatan'];
        $validatedUpdate['tanggal_penyuluhan'] = $tanggal;

        $penyuluhanTernak->update($validatedUpdate);
        return redirect('penyuluhanTernak')->with('success', 'Pengajuan Berhasil Divalidasi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $decryptedID = Crypt::decryptString($id);
        $destroy = Penyuluhan::findOrFail($decryptedID);
        $destroy->delete();
        return redirect('penyuluhanTernak')->with('success', 'Pengajuan Berhasil Dihapus!');
    }
}
