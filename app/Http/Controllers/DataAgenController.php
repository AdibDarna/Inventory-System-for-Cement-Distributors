<?php

namespace App\Http\Controllers;

use App\Models\Agen;
use App\Imports\AgenImport;
use App\Models\Semen;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataAgenController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $search = '';
            $Stock = Semen::get();

            $agen = Agen::paginate(10);
            return view('dataAgen', ['semenStock' => $Stock,'agen' => $agen, 'search' => $search]);
        } else {
            return view('login');
        }
    }
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
           
            Agen::create([

                'kode_agen' => $request->kode_agen,
                'nama_agen' => $request->nama_agen,
                'nama_toko' => $request->nama_toko,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp
        
            ]);

            return redirect()->back();
        } else {
            return view('login');
        }
    }
    public function cari(Request $request)
    {
        $search = '';
        $Stock = Semen::get();


        if ($request->has('search')) {
            $search = $request->search;
        } else {
            redirect('/dataagen');
        }
        $agen = Agen::where('nama_agen', 'like', $request->search . '%')
            ->orWhere('nama_toko', 'like', $request->search . '%')
            ->orWhere('kode_agen', 'like', $request->search . '%')
            ->paginate(10);
        $agen->appends(['search' => $search]);
        return view('dataAgen', ['semenStock' => $Stock,'agen' => $agen, 'search' => $search]);
    }
    public function import_excel(Request $request)
    {

        if (Auth::check()) {
            // validasi
            $this->validate($request, [
                'agen_excel' => 'required|mimes:csv,xls,xlsx'
            ]);

            // menangkap file excel
            $file = $request->file('agen_excel');

            // membuat nama file unik
            $nama_file = rand() . $file->getClientOriginalName();

            // upload ke folder file_siswa di dalam folder public
            $file->move(public_path('excel/agen'), $nama_file);

            // import data
            Excel::import(new AgenImport, public_path('excel/agen/' . $nama_file));

            // notifikasi dengan session
            Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

            // alihkan halaman kembali
            return redirect('/dataagen');
        } else {
            return view('login');
        }
    }

    public function truncateData()
    {
        if (Auth::check()) {
            Agen::truncate();
            return redirect()->back();
        } else {
            return view('login');
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if (Auth::check()) {
           
                Agen::where('kode_agen', $request->kode_agen)->update([
                    'nama_agen' => $request->nama_agen,
                    'nama_toko' => $request->nama_toko,
                    'alamat' => $request->alamat,
                    'no_hp' => $request->no_hp,

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
            Agen::where('kode_agen', $id)->delete();

            // alihkan halaman ke halaman pegawai
            return redirect()->back();
        } else {
            return view('login');
        }
    }
}
