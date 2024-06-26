<?php

namespace App\Http\Controllers;

use App\Models\Agen;
use App\Models\Semen;
use App\Models\Mobil;
use App\Models\Supir;
use App\Models\DeliveryOrder;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use App\Imports\DeliveryOrderImport;
use App\Models\SalesOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException;


class DeliveryOrderController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $Stock = Semen::get();

            $semen = Semen::all();
            $agen = Agen::all();
            $mobil = Mobil::all();
            $checkStatusDO = DeliveryOrder::select('kode_do AS id','tanggal','kode_mobil','kode_supir','status')->where('status','Proses');
            $checkStatusSO = SalesOrder::select('kode_so AS id','tanggal','kode_mobil','kode_supir','status')->where('status','Proses');

            $checkStatus = $checkStatusDO->unionAll($checkStatusSO)->get();
       

            $supir = Supir::all();
            $so = DeliveryOrder::join('semen', 'semen.id_semen', '=', 'delivery_order.id_semen')
                ->join('mobil', 'mobil.kode_mobil', '=', 'delivery_order.kode_mobil')
                ->join('agen', 'agen.kode_agen', '=', 'delivery_order.kode_agen')
                ->join('supir', 'supir.kode_supir', '=', 'delivery_order.kode_supir')
                ->orderBy("delivery_order.created_at", "DESC")
                ->paginate(10);
            $so_all = DeliveryOrder::all();
            return view('distribusiDeliveryOrder', ['checkStatus' => $checkStatus, 'semenStock' => $Stock, 'so' => $so, 'so_all' => $so_all, 'mobil' => $mobil, 'supir' => $supir, 'semen' => $semen, 'agen' => $agen]);

            // return redirect()->back();
        }
        else {
            return view('login');
        }
    }
    public function cari(Request $request)
    {

        if (Auth::check()) {
            $tanggal_awal = $request->tanggal_awal;
            $tanggal_akhir = $request->tanggal_akhir;
            $Stock = Semen::get();
            $checkStatus = DeliveryOrder::where('status', 'Proses')->get();

            $semen = Semen::all();
            $agen = Agen::all();
            $mobil = Mobil::all();
            $supir = Supir::all();


            
            if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir')) {
                $so = DeliveryOrder::join('semen', 'semen.id_semen', '=', 'delivery_order.id_semen')
                    ->join('mobil', 'mobil.kode_mobil', '=', 'delivery_order.kode_mobil')
                    ->join('agen', 'agen.kode_agen', '=', 'delivery_order.kode_agen')
                    ->join('supir', 'supir.kode_supir', '=', 'delivery_order.kode_supir')
                    ->whereBetween('tanggal', [$tanggal_awal, $tanggal_akhir])
                    ->where('delivery_order.id_semen', $request->semen)
                    ->where('delivery_order.status', $request->status)
                    ->paginate(10);
                $so_all = DeliveryOrder::join('semen', 'semen.id_semen', '=', 'delivery_order.id_semen')
                    ->join('mobil', 'mobil.kode_mobil', '=', 'delivery_order.kode_mobil')
                    ->join('agen', 'agen.kode_agen', '=', 'delivery_order.kode_agen')
                    ->join('supir', 'supir.kode_supir', '=', 'delivery_order.kode_supir')
                    ->whereBetween('tanggal', [$tanggal_awal, $tanggal_akhir])
                    ->where('delivery_order.id_semen', $request->semen)
                    ->where('delivery_order.status', $request->status)
                    ->get();
            }
            else {
                return redirect('/distribusideliveryorder');
            }

            return view('distribusiDeliveryOrder', ['checkStatus' => $checkStatus, 'semenStock' => $Stock, 'so' => $so, 'so_all' => $so_all, 'mobil' => $mobil, 'supir' => $supir, 'semen' => $semen, 'agen' => $agen]);
        }
        else {
            return view('login');
        }
    }
    public function store(Request $request)
    {
        if (Auth::check()) {
            $randomID = random_int(10000000, 99999999);
            $debitVal = null;
            if ($request->filled('debit')) {
                $debitVal = $request->debit;
            }
            else {
                $debitVal = "-";
            }
            try {
                //code...
                DeliveryOrder::create([
                    'kode_do' => $request->kode_do,
                    'tanggal' => $request->tanggal,
                    'kode_agen' => $request->ship_to,
                    'id_semen' => $request->merek_semen,
                    'qty' => $request->qty,
                    'total_harga' => $request->total_harga,
                    'kode_mobil' => $request->mobil,
                    'kode_supir' => $request->supir,
                    'pembayaran' => $request->pembayaran,
                    'biaya_pemesanan' => $request->biaya_pemesanan,
                    'status' => "proses",
                    'debit' => $debitVal,
                ]);
                return redirect()->back();
            }
            catch (QueryException $e) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062) {
                    // houston, we have a duplicate entry problem
                    return redirect()->back()->with('error', "Data Kode DO sudah tercatat di dalam database sistem ");
                }
            }

        }
        else {
            return view('login');
        }
    }
    public function import_excel(Request $request)
    {
        if (Auth::check()) {
            // validasi
            $this->validate($request, [
                'do_excel' => 'required|mimes:csv,txt,xls,xlsx'
            ]);

            // menangkap file excel
            $file = $request->file('do_excel');

            // membuat nama file unik
            $nama_file = rand() . $file->getClientOriginalName();

            // upload ke folder file_siswa di dalam folder public
            $file->move(public_path('excel/do'), $nama_file);

            // import data
            Excel::import(new DeliveryOrderImport, public_path('excel/do/' . $nama_file));

            // notifikasi dengan session
            Session::flash('sukses', 'Data Siswa Berhasil Diimport!');

            // alihkan halaman kembali
            return redirect('/distribusideliveryorder');
        }
        else {
            return view('login');
        }
    }
    public function preview_pdf(Request $request)
    {

        if (Auth::check()) {
            $tanggal_awal = $request->tanggal_awal;
            $tanggal_akhir = $request->tanggal_akhir;


           
                $so = DeliveryOrder::join('semen', 'semen.id_semen', '=', 'delivery_order.id_semen')
                    ->join('mobil', 'mobil.kode_mobil', '=', 'delivery_order.kode_mobil')
                    ->join('agen', 'agen.kode_agen', '=', 'delivery_order.kode_agen')
                    ->join('supir', 'supir.kode_supir', '=', 'delivery_order.kode_supir')
                    ->whereBetween('tanggal', [$tanggal_awal, $tanggal_akhir])
                    ->where('delivery_order.id_semen', $request->semen)
                    ->get();
            
            

            return view('PDF.DeliveryOrderPDF', ['so' => $so]);
        }
        else {
            return view('login');
        }
    }
    public function truncateData()
    {
        if (Auth::check()) {
            DeliveryOrder::truncate();
            return redirect()->back();
        }
        else {
            return view('login');
        }
    }
    public function update(Request $request)
    {
        if (Auth::check()) {

            if ($request->pembayaran == "Cash") {
                DeliveryOrder::where('kode_do', $request->kode_do)->update([
                    'kode_do' => $request->kode_do,
                    'tanggal' => $request->tanggal,
                    'tanggal_sampai' => $request->tanggal_sampai,
                    'kode_agen' => $request->ship_to,
                    'id_semen' => $request->merek_semen,
                    'qty' => $request->qty,
                    'total_harga' => $request->total_harga,
                    'kode_mobil' => $request->mobil,
                    'kode_supir' => $request->supir,
                    'pembayaran' => $request->pembayaran,
                    'biaya_pemesanan' => $request->biaya_pemesanan,
                    'status' => $request->status,
                    'debit' => "-",
                ]);
                // alihka halaman ke halaman DO
                return redirect()->back();
            }
            else {
                DeliveryOrder::where('kode_do', $request->kode_do)->update([
                    'kode_do' => $request->kode_do,
                    'tanggal' => $request->tanggal,
                    'tanggal_sampai' => $request->tanggal_sampai,
                    'kode_agen' => $request->ship_to,
                    'id_semen' => $request->merek_semen,
                    'qty' => $request->qty,
                    'total_harga' => $request->total_harga,
                    'kode_mobil' => $request->mobil,
                    'kode_supir' => $request->supir,
                    'pembayaran' => $request->pembayaran,
                    'biaya_pemesanan' => $request->biaya_pemesanan,
                    'status' => $request->status,
                    'debit' => $request->debit,
                ]);
                // alihka halaman ke halaman DO
                return redirect()->back();
            }



        }
        else {
            return view('login');
        }
    }
    public function destroy($id)
    {
        if (Auth::check()) {
            DeliveryOrder::where('kode_do', $id)->delete();

            return redirect()->back();
        }
        else {
            return view('login');
        }

    }
}
