<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Food;
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
        $foodSubmissions = Food::orderBy('created_at', 'ASC')->get();

        return view('subsidi.V_Subsidi', compact('foodSubmissions','currentuser', 'id', 'no'));
    }

    public function detail(Request $request, $id)
    {
        $foodSubmissions = Food::findOrFail($id);
        $users_id = $foodSubmissions['users_id'];
        $currentuser = User::find($users_id);

        return view('subsidi.V_detailSubsidi', compact('foodSubmissions', 'currentuser'));
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

        $checkbox = $request->input('confirmation');

        $validatedAdd = $request->validate([
            'covering_letter'=> 'file|mimes:pdf',
            'business_letter'=> 'file|mimes:pdf',
            'farm_quantity'=> 'required',
            'food_quantity'=> 'required',
            'farm_picture'=> 'file|mimes:jpg,jpeg,png',
            'validation',
            'confirm_picture'=> 'file|mimes:jpg,jpeg,png',
            'confirmation',
            'government_note',
            'users_id',
        ]);

        if ($request->hasFile('covering_letter')) {
            $file = $request->file('covering_letter');
            $file_name = $file->getClientOriginalName();
            $file->move('pdf', $file_name);
            $validatedAdd['covering_letter'] = $file_name;
        };
        if ($request->hasFile('business_letter')) {
            $file = $request->file('business_letter');
            $file_name = $file->getClientOriginalName();
            $file->move('pdf', $file_name);
            $validatedAdd['business_letter'] = $file_name;
        };
        if ($request->hasFile('farm_picture')) {
            $file = $request->file('farm_picture');
            $file_name = $file->getClientOriginalName();
            $file->move('image', $file_name);
            $validatedAdd['farm_picture'] = $file_name;
        };
        if ($request->hasFile('confirm_picture')) {
            $file = $request->file('confirm_picture');
            $file_name = $file->getClientOriginalName();
            $file->move('image', $file_name);
            $validatedAdd['confirm_picture'] = $file_name;
        };

        $validatedAdd['confirmation'] = $checkbox;
        $validatedAdd['users_id'] = $id;
        Food::create($validatedAdd);

        return redirect('/V_Subsidi')->with('success', 'Pengajuan Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $foodSubmissions = Food::findOrFail($id);
        return view('subsidi.V_editSubsidi', compact('foodSubmissions'));
    }

    public function dinasValidate(Request $request, $id)
    {
        $foodSubmissions = Food::findOrFail($id);
        return view('subsidi.V_validasiSubsidi', compact('foodSubmissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $foodSubmissions = Food::findOrFail($id);
        
        $checkbox = $request->input('confirmation');
        
        $validatedUpdate = $request->validate([
            'covering_letter'=> 'file|mimes:pdf',
            'business_letter'=> 'file|mimes:pdf',
            'farm_quantity'=> 'required',
            'food_quantity'=> 'required',
            'farm_picture'=> 'file|mimes:jpg,jpeg,png',
            'validation',
            'confirm_picture'=> 'file|mimes:jpg,jpeg,png',
            'confirmation',
            'government_note',
        ]);

        if ($request->hasFile('covering_letter')) {
            $file = $request->file('covering_letter');
            $file_name = $file->getClientOriginalName();
            $file->move('pdf', $file_name);
            $validatedUpdate['covering_letter'] = $file_name;
        };
        if ($request->hasFile('business_letter')) {
            $file = $request->file('business_letter');
            $file_name = $file->getClientOriginalName();
            $file->move('pdf', $file_name);
            $validatedUpdate['business_letter'] = $file_name;
        };
        if ($request->hasFile('farm_picture')) {
            $file = $request->file('farm_picture');
            $file_name = $file->getClientOriginalName();
            $file->move('image', $file_name);
            $validatedUpdate['farm_picture'] = $file_name;
        };
        if ($request->hasFile('confirm_picture')) {
            $file = $request->file('confirm_picture');
            $file_name = $file->getClientOriginalName();
            $file->move('image', $file_name);
            $validatedUpdate['confirm_picture'] = $file_name;
        };
        
        $validatedUpdate['confirmation'] = $checkbox;

        $foodSubmissions->update($validatedUpdate);
        return redirect('/V_Subsidi')->with('success', 'Pengajuan Berhasil Diubah!');
    }

    public function updateValidation(Request $request, $id)
    {
        $foodSubmissions = Food::findOrFail($id);
        
        $checkbox = $request->input('validation');
        
        $validated = $request->validate([
            'validation',
            'government_note',
        ]);

        $validatedUpdate = [
            'validation'=> $request->validation,
            'government_note'=> $request->government_note,
        ];
        
        $validatedUpdate['validation'] = $checkbox;

        $foodSubmissions->update($validatedUpdate);
        return redirect('/V_Subsidi')->with('success', 'Pengajuan Berhasil Divalidasi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $destroy = Food::findOrFail($id);
        $destroy->delete();
        return redirect('/V_Subsidi')->with('success', 'Pengajuan Berhasil Dihapus!');
    }
}
