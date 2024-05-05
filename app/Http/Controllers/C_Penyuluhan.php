<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Penyuluhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $penyuluhanTernak = Penyuluhan::findOrFail($id);
        $users_id = $penyuluhanTernak['users_id'];
        $currentuser = User::find($users_id);

        return view('penyuluhan.V_detailPenyuluhan', compact('penyuluhanTernak', 'currentuser'));
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
            $file->move('foto_surat', $file_name);
            $validatedAdd['surat_pengantar'] = $file_name;
        };
        if ($request->hasFile('foto_ayam')) {
            $file = $request->file('foto_ayam');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_peternak', $file_name);
            $validatedAdd['foto_ayam'] = $file_name;
        };
        if ($request->hasFile('foto_peternakan')) {
            $file = $request->file('foto_peternakan');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_peternak', $file_name);
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
        $penyuluhanTernak = Penyuluhan::findOrFail($id);
        return view('penyuluhan.V_editPenyuluhan', compact('penyuluhanTernak'));
    }

    public function dinasValidasi(Request $request, $id)
    {
        $penyuluhanTernak = Penyuluhan::findOrFail($id);
        return view('penyuluhan.V_validasiPenyuluhan', compact('penyuluhanTernak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $penyuluhanTernak = Penyuluhan::findOrFail($id);

        $validatedUpdate = $request->validate([
            'surat_pengantar'=> '|file|mimes:jpg,jpeg,png',
            'suhu_kandang'=> 'required',
            'kadar_air'=> 'required',
            'kadar_pakan'=> 'required',
            'kondisi_ayam'=> 'required',
            'foto_ayam'=> '|file|mimes:jpg,jpeg,png',
            'foto_peternakan'=> '|file|mimes:jpg,jpeg,png',
        ]);

        if ($request->hasFile('surat_pengantar')) {
            $file = $request->file('surat_pengantar');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_surat', $file_name);
            $validated['surat_pengantar'] = $file_name;
        };
        if ($request->hasFile('foto_ayam')) {
            $file = $request->file('foto_ayam');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_peternak', $file_name);
            $validatedUpdate['foto_ayam'] = $file_name;
        };
        if ($request->hasFile('foto_peternakan')) {
            $file = $request->file('foto_peternakan');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_peternak', $file_name);
            $validatedUpdate['foto_peternakan'] = $file_name;
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
        $penyuluhanTernak = Penyuluhan::findOrFail($id);
        
        $checkbox = $request->input('validasi');
        
        $validated = $request->validate([
            'validasi',
            'tanggal_penyuluhan',
            'catatan',
        ]);

        $validatedUpdate = [
            'validasi'=> $request->validasi,
            'tanggal_penyuluhan'=> $request->tanggal_penyuluhan,
            'catatan'=> $request->catatan,
        ];
        
        $validatedUpdate['validasi'] = $checkbox;

        $penyuluhanTernak->update($validatedUpdate);
        return redirect('penyuluhanTernak')->with('success', 'Pengajuan Berhasil Divalidasi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destroy = Penyuluhan::findOrFail($id);
        $destroy->delete();
        return redirect('penyuluhanTernak')->with('success', 'Pengajuan Berhasil Dihapus!');
    }
}
