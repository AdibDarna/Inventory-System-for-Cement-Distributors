<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Imports\MobilImport;
use App\Models\DeliveryOrder;
use App\Models\Semen;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class DataMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = '';
        if (Auth::check()) {
            $Stock = Semen::get();

            $datePrior = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + 5, date('Y')));
            $dateNow = \Carbon\Carbon::now()->format('Y-m-d');
            $do= DeliveryOrder::where('status','Proses')->get();
        
            $mobil = Mobil::paginate(10);
            return view('dataMobil', ['semenStock' => $Stock,'mobil' => $mobil, 'search' => $search,'do'=>$do]);
        }
        else {
            return view('login');
        }
    }

    /** utk manggil halaman tambah tp gak guna
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


            Mobil::create([
                'status_kepemilikan' => $request->status_kepemilikan,
                'transportir' => $request->transportir,
                'plat_nomor' => $request->plat_nomor,
                'jenis_truk' => $request->jenis_truk,
                'merek_truk' => $request->merek_truk,
                'kapasitas' => $request->kapasitas,
                'nomor_stnk' => $request->nomor_stnk,
                'nomor_rangka' => $request->nomor_rangka,
                'nomor_gps' => $request->nomor_gps,

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
            redirect('/datamobil');
        }
        $mobil = Mobil::where('plat_nomor', 'like', $request->search . '%')
            ->orWhere('transportir', 'like', $request->search . '%')
            ->orWhere('merek_truk', 'like', $request->search . '%')
            ->paginate(10);
        $mobil->appends(['search' => $search]);
        return view('dataMobil', ['semenStock' => $Stock,'mobil' => $mobil, 'search' => $search]);
    }

    public function import_excel(Request $request)
    {
        if (Auth::check()) {
            // validasi
            $this->validate($request, [
                'mobil_excel' => 'required|mimes:csv,xls,xlsx'
            ]);

            // menangkap file excel
            $file = $request->file('mobil_excel');

            // membuat nama file unik
            $nama_file = rand() . $file->getClientOriginalName();

            // upload ke folder file_siswa di dalam folder public
            $file->move(public_path('excel/mobil'), $nama_file);

            // import data
            Excel::import(new MobilImport, public_path('excel/mobil/' . $nama_file));

            // notifikasi dengan session
            Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

            // alihkan halaman kembali
            return redirect('/datamobil');
        }
        else {
            return view('login');
        }
    }

    public function truncateData()
    {

        if (Auth::check()) {
            Mobil::truncate();
            return redirect()->back();
        }
        else {
            return view('login');
        }
    }
    /** utk show db tapi dibikin di index
     * Display the specified resource.
     */
    public function show()
    {
    //
    }

    /** utk bukak halaman, karna pakai modal jadi gapakae
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

            Mobil::where('kode_mobil', $request->kode_mobil)->update([
                'status_kepemilikan' => $request->status_kepemilikan,
                'transportir' => $request->transportir,
                'plat_nomor' => $request->plat_nomor,
                'jenis_truk' => $request->jenis_truk,
                'merek_truk' => $request->merek_truk,
                'kapasitas' => $request->kapasitas,
                'nomor_stnk' => $request->nomor_stnk,
                'nomor_rangka' => $request->nomor_rangka,
                'nomor_gps' => $request->nomor_gps,

            ]);
            // alihkan halaman ke halaman mobil
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
            Mobil::where('kode_mobil', $id)->delete();
            return redirect()->back();
        }
        else {
            return view('login');
        }
    }
}
