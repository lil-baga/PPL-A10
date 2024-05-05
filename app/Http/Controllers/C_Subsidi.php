<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subsidi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class C_Subsidi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no = 0;
        $id = Auth::user()->id;
        $currentuser = User::find($id);
        $subsidiPakan = Subsidi::orderBy('created_at', 'ASC')->get();

        return view('subsidi.V_Subsidi', compact('subsidiPakan','currentuser', 'id', 'no'));
    }

    public function detail(Request $request, $id)
    {
        $subsidiPakan = Subsidi::findOrFail($id);
        $users_id = $subsidiPakan['users_id'];
        $currentuser = User::find($users_id);

        return view('subsidi.V_detailSubsidi', compact('subsidiPakan', 'currentuser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subsidi.V_tambahSubsidi');
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
            'jumlah_ternak'=> 'required',
            'jumlah_pakan'=> 'required',
            'foto_peternakan'=> 'required|file|mimes:jpg,jpeg,png',
            'users_id',
        ]);

        if ($request->hasFile('surat_pengantar')) {
            $file = $request->file('surat_pengantar');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_surat', $file_name);
            $validatedAdd['surat_pengantar'] = $file_name;
        };
        if ($request->hasFile('surat_usaha')) {
            $file = $request->file('surat_usaha');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_surat', $file_name);
            $validatedAdd['surat_usaha'] = $file_name;
        };
        if ($request->hasFile('foto_peternakan')) {
            $file = $request->file('foto_peternakan');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_peternak', $file_name);
            $validatedAdd['foto_peternakan'] = $file_name;
        };

        $validatedAdd['users_id'] = $id;
        Subsidi::create($validatedAdd);

        return redirect('subsidiPakan')->with('success', 'Pengajuan Berhasil Ditambahkan!');
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
        $subsidiPakan = Subsidi::findOrFail($id);
        return view('subsidi.V_editSubsidi', compact('subsidiPakan'));
    }

    public function dinasValidasi(Request $request, $id)
    {
        $subsidiPakan = Subsidi::findOrFail($id);
        return view('subsidi.V_validasiSubsidi', compact('subsidiPakan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $subsidiPakan = Subsidi::findOrFail($id);
        
        $checkbox = $request->input('konfirmasi');
        
        $validatedUpdate = $request->validate([
            'surat_pengantar'=> 'file|mimes:jpg,jpeg,png',
            'surat_usaha'=> 'file|mimes:jpg,jpeg,png',
            'jumlah_ternak'=> 'required',
            'jumlah_pakan'=> 'required',
            'foto_peternakan'=> 'file|mimes:jpg,jpeg,png',
            'validasi',
            'foto_konfirmasi'=> 'file|mimes:jpg,jpeg,png',
            'konfirmasi',
            'catatan',
        ]);

        if ($request->hasFile('surat_pengantar')) {
            $file = $request->file('surat_pengantar');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_surat', $file_name);
            $validatedUpdate['surat_pengantar'] = $file_name;
        };
        if ($request->hasFile('surat_usaha')) {
            $file = $request->file('surat_usaha');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_surat', $file_name);
            $validatedUpdate['surat_usaha'] = $file_name;
        };
        if ($request->hasFile('foto_peternakan')) {
            $file = $request->file('foto_peternakan');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_peternak', $file_name);
            $validatedUpdate['foto_peternakan'] = $file_name;
        };
        if ($request->hasFile('foto_konfirmasi')) {
            $file = $request->file('foto_konfirmasi');
            $file_name = $file->getClientOriginalName();
            $file->move('foto_peternak', $file_name);
            $validatedUpdate['foto_konfirmasi'] = $file_name;
        };
        
        $validatedUpdate['konfirmasi'] = $checkbox;

        $subsidiPakan->update($validatedUpdate);
        return redirect('subsidiPakan')->with('success', 'Pengajuan Berhasil Diubah!');
    }

    public function updateValidasi(Request $request, $id)
    {
        $subsidiPakan = Subsidi::findOrFail($id);
        
        $checkbox = $request->input('validasi');
        
        $validated= $request->validate([
            'validasi',
            'catatan',
        ]);

        $validatedUpdate = [
            'validasi'=> $request->validasi,
            'catatan'=> $request->catatan,
        ];
        
        $validatedUpdate['validasi'] = $checkbox;

        $subsidiPakan->update($validatedUpdate);
        return redirect('subsidiPakan')->with('success', 'Pengajuan Berhasil Divalidasi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destroy = Subsidi::findOrFail($id);
        $destroy->delete();
        return redirect('subsidiPakan')->with('success', 'Pengajuan Berhasil Dihapus!');
    }
}
