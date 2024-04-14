<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use App\Models\User;
use App\Http\Requests\StoreFarmerRequest;
use App\Http\Requests\UpdateFarmerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedRegister = $request->validate([
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:8',
        ]);

        $validatedData = $request->validate([
            'name'=> 'required',
            'address'=> 'required',
            'phone_number'=> 'required',
        ]);

        $validatedRegister['password'] = bcrypt($validatedRegister['password']);

        User::create($validatedRegister);
        Farmer::create($validatedData);

        return redirect('/loginPeternak');
    }

    public function authlogin(Request $request)
    {
        return redirect('/subsidiPeternak')->with('failed', 'Gagal Login, Password atau Kata Sandi Salah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Farmer $farmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Farmer $farmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFarmerRequest $request, Farmer $farmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Farmer $farmer)
    {
        //
    }
}
