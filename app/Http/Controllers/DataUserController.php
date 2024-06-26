<?php

namespace App\Http\Controllers;

use App\Models\Semen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DataUserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $Stock = Semen::get();

            $user = User::paginate(10);
            return view('dataUsers', ['semenStock' => $Stock,'user' => $user]);
        }
        else {
            return view('login');
        }
    }
    public function store(Request $request)
    {
        if (Auth::check()) {
            User::create([
                'name' => $request->name,
                'alamat' => $request->alamat,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'password' => Hash::make($request->password),
                'status' => $request->status
            ]);
            return redirect()->back();
        }
        else {
            return view('login');
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        if (Auth::check()) {
            if ($request->has('password')) {
                User::where('kode_user', $request->kode_user)->update([
                    'name' => $request->name,
                    'alamat' => $request->alamat,
                    'email' => $request->email,
                    'telephone' => $request->telephone,
                    'password' => Hash::make($request->password),
                    'status' => $request->status
                ]);
            }
            else {
                User::where('kode_user', $request->kode_user)->update([
                    'name' => $request->name,
                    'alamat' => $request->alamat,
                    'email' => $request->email,
                    'telephone' => $request->telephone,
                    'password' => Hash::make($request->password),
                    'status' => $request->status
                ]);
            }
            return redirect()->back();
        }
        else {
            return view('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (Auth::check()) {
            User::where('kode_user', $id)->delete();
            return redirect()->back();
        }
        else {
            return view('login');
        }
    }
}
