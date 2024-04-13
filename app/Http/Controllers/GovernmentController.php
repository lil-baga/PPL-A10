<?php

namespace App\Http\Controllers;

use App\Models\Government;
use App\Models\User;
use App\Http\Requests\StoreFarmerRequest;
use App\Http\Requests\UpdateFarmerRequest;
use Illuminate\Http\Request;

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
            'email'=> 'required',
            'password'=> 'required',
        ]);

        $validatedData = $request->validate([
            'name'=> 'required',
            'address'=> 'required',
            'phone_number'=> 'required',
        ]);

        $validatedRegister['password'] = bcrypt($validatedRegister['password']);

        User::create($validatedRegister);
        Government::create($validatedData);

        return redirect('/loginDinas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Government $government)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Government $government)
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
