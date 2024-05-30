<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class C_Berita extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no = 0;
        $id = Auth::user()->id;
        $currentuser = User::find($id);
        $broadcastBerita = Berita::orderBy('created_at', 'DESC')->get();

        return view('berita.V_Berita', compact('broadcastBerita', 'currentuser', 'id', 'no'));
    }

    public function detail(Request $request, $id)
    {
        $decryptedID = Crypt::decryptString($id);
        $broadcastBerita = Berita::findOrFail($decryptedID);
        $users_id = $broadcastBerita['users_id'];
        $currentuser = User::find($users_id);

        return view('berita.V_detailBerita', compact('broadcastBerita', 'currentuser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.V_tambahBerita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;

        $validatedAdd = $request->validate([
            'thumbnail'=> 'required|file|mimes:jpg,jpeg,png',
            'judul'=> 'required',
            'isi'=> 'required',
            'users_id',
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_berita', $file_name);
            $validatedAdd['thumbnail'] = $file_name;
        };

        $validatedAdd['users_id'] = $id;
        Berita::create($validatedAdd);

        return redirect('broadcastBerita')->with('success', 'Berita Berhasil Ditambahkan!');
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
        $broadcastBerita = Berita::findOrFail($decryptedID);
        return view('berita.V_editBerita', compact('broadcastBerita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $decryptedID = Crypt::decryptString($id);
        $broadcastBerita = Berita::findOrFail($decryptedID);

        $validatedUpdate = $request->validate([
            'thumbnail'=> 'file|mimes:jpg,jpeg,png',
            'judul'=> 'required',
            'isi'=> 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $file_name = $file->getClientOriginalName();
            $file->move('img/foto_berita', $file_name);
            $validatedUpdate['thumbnail'] = $file_name;
        };

        $isiBerita = [
            'isi'=>$request->isi,
        ];

        $validatedUpdate['isi'] = $isiBerita['isi'];

        $broadcastBerita->update($validatedUpdate);

        return redirect('broadcastBerita')->with('success', 'Berita Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $decryptedID = Crypt::decryptString($id);
        $destroy = Berita::findOrFail($decryptedID);
        $destroy->delete();
        return redirect('broadcastBerita')->with('success', 'Berita Berhasil Dihapus!');
    }
}
