<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreFarmerRequest;
use App\Http\Requests\UpdateFarmerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GovernmentController extends Controller
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
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:8',
            'address'=> 'required',
            'phone_number'=> 'required',
        ]);

        $validatedRegister['password'] = bcrypt($validatedRegister['password']);
        $validatedRegister['roles_id'] = '3';
        User::create($validatedRegister);

        return redirect('/loginDinas');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password', 'access_code');
        if (Auth::attempt($credentials)) {
            return redirect('/subsidiDinas');
        } else {
            return redirect('/loginDinas')->with('failed', 'Username atau Password Salah!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('status', 'You have been logged out successfully.');
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
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGovernmentRequest $request, Government $government)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Government $government)
    {
        //
    }
}
