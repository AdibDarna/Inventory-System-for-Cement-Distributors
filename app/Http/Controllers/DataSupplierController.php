<?php

namespace App\Http\Controllers;

use App\Models\Semen;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $Stock = Semen::get();

            $supplier = Supplier::paginate(10);
            return view('dataSupplier', ['semenStock' => $Stock,'supplier' => $supplier]);
        } else {
            return view('login');
        }
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
        if (Auth::check()) {
            Supplier::create([
                'supplier' => $request->supplier,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon
            ]);

            return redirect()->back();
        } else {
            return view('login');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {


        if (Auth::check()) {
            Supplier::where('kode_supplier', $request->kode_supplier)->update([
                'supplier' => $request->supplier,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon
            ]);
            // alihkan halaman ke halaman pegawai
            return redirect()->back();
        } else {
            return view('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        if (Auth::check()) {
            Supplier::where('kode_supplier', $id)->delete();

            // alihkan halaman ke halaman pegawai
            return redirect()->back();
        } else {
            return view('login');
        }
    }
}
