<?php

namespace App\Http\Controllers;

use App\Models\Supir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Imports\SupirImport;
use App\Models\Semen;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class DataSupirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $Stock = Semen::get();

            $search = '';
            $supir = Supir::paginate(10);

            return view('dataSupir', ['semenStock' => $Stock,'supir' => $supir, 'search' => $search]);
        }
        else {
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



            Supir::create([
                'kode_supirt' => $request->kode_supir,
                'nama_supir' => $request->nama_supir,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'no_sim' => $request->no_sim,
                'jenis_sim' => $request->jenis_sim,
                'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,


            ]);

            return redirect()->back();
        }
        else {
            return view('login');
        }
    }
    public function cari(Request $request)
    {
        $search = '';
        $Stock = Semen::get();

        if ($request->has('search')) {
            $search = $request->search;
        }
        else {
            redirect('/datasupir');
        }
        $supir = Supir::where('nama_supir', 'like', $request->search . '%')
            ->orWhere('no_sim', 'like', $request->search . '%')
            ->paginate(10);
        $supir->appends(['search' => $search]);
        return view('dataSupir', ['semenStock' => $Stock,'supir' => $supir, 'search' => $search]);
    }
    public function import_excel(Request $request)
    {

        if (Auth::check()) {
            // validasi
            $this->validate($request, [
                'supir_excel' => 'required|mimes:csv,xls,xlsx'
            ]);

            // menangkap file excel
            $file = $request->file('supir_excel');

            // membuat nama file unik
            $nama_file = rand() . $file->getClientOriginalName();

            // upload ke folder file_siswa di dalam folder public
            $file->move(public_path('excel/supir'), $nama_file);

            // import data
            Excel::import(new SupirImport, public_path('excel/supir/' . $nama_file));

            // notifikasi dengan session
            Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

            // alihkan halaman kembali
            return redirect('/datasupir');
        }
        else {
            return view('login');
        }
    }
    public function truncateData()
    {
        if (Auth::check()) {
            Supir::truncate();
            return redirect()->back();
        }
        else {
            return view('login');
        }
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
    public function update(Request $request)
    {
        if (Auth::check()) {


            Supir::where('kode_supir', $request->kode_supir)->update([
                'kode_supir' => $request->kode_supir,
                'nama_supir' => $request->nama_supir,
                'no_hp' => $request->no_hp,
                'alamat' => $request->alamat,
                'no_sim' => $request->no_sim,
                'jenis_sim' => $request->jenis_sim,
                'tanggal_kadaluarsa' => $request->tanggal_kadaluarsa,

            ]);
            // alihkan halaman ke halaman pegawai
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
            Supir::where('kode_supir', $id)->delete();
            return redirect()->back();
        }
        else {
            return view('login');
        }
    }
}
