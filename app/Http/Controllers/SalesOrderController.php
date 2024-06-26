<?php

namespace App\Http\Controllers;

use App\Exports\SalesOrderExport;
use App\Models\Mobil;
use App\Models\SalesOrder;
use App\Models\Semen;
use App\Models\Supir;
use App\Models\Supplier;
use App\Imports\SalesOrderImport;
use App\Models\DeliveryOrder;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class SalesOrderController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $Stock = Semen::get();
            $checkStatusDO = DeliveryOrder::select('kode_do AS id', 'tanggal', 'kode_mobil', 'kode_supir', 'status')->where('status', 'Proses');
            $checkStatusSO = SalesOrder::select('kode_so AS id', 'tanggal', 'kode_mobil', 'kode_supir', 'status')->where('status', 'Proses');

            $checkStatus = $checkStatusDO->unionAll($checkStatusSO)->get();
            $semen = Semen::all();
            $supplier = Supplier::all();
            $mobil = Mobil::all();
            $supir = Supir::all();
            $so = SalesOrder::join('semen', 'semen.id_semen', '=', 'sales_order.id_semen')
                ->join('mobil', 'mobil.kode_mobil', '=', 'sales_order.kode_mobil')
                ->join('supplier', 'supplier.kode_supplier', '=', 'sales_order.kode_supplier')
                ->join('supir', 'supir.kode_supir', '=', 'sales_order.kode_supir')
                ->orderBy("sales_order.created_at", "DESC")
                ->paginate(10);
            $so_all = SalesOrder::all();
            //  dd($so_all);
            return view('distribusiSalesOrder', ['checkStatus' => $checkStatus, 'semenStock' => $Stock, 'so' => $so, 'so_all' => $so_all, 'mobil' => $mobil, 'supir' => $supir, 'semen' => $semen, 'supplier' => $supplier]);

            return redirect()->back();
        }
        else {
            return view('login');
        }
    }

    public function cari(Request $request)
    {
        if (Auth::check()) {
            $Stock = Semen::get();
            $checkStatus = SalesOrder::where('status', 'Proses')->get();

            $tanggal_awal = $request->tanggal_awal;
            $tanggal_akhir = $request->tanggal_akhir;
            $semen = Semen::all();
            $supplier = Supplier::all();
            $mobil = Mobil::all();
            $supir = Supir::all();

            if ($request->filled('tanggal_awal') && $request->filled('tanggal_akhir') && $request->filled('semen')) {
                $so = SalesOrder::join('semen', 'semen.id_semen', '=', 'sales_order.id_semen')
                    ->join('mobil', 'mobil.kode_mobil', '=', 'sales_order.kode_mobil')
                    ->join('supplier', 'supplier.kode_supplier', '=', 'sales_order.kode_supplier')
                    ->join('supir', 'supir.kode_supir', '=', 'sales_order.kode_supir')
                    ->whereBetween('tanggal', [$tanggal_awal, $tanggal_akhir])
                    ->where('sales_order.id_semen', "$request->semen")
                    ->where('sales_order.status', "$request->status")->paginate(10);
                $so_all = SalesOrder::join('semen', 'semen.id_semen', '=', 'sales_order.id_semen')
                    ->join('mobil', 'mobil.kode_mobil', '=', 'sales_order.kode_mobil')
                    ->join('supplier', 'supplier.kode_supplier', '=', 'sales_order.kode_supplier')
                    ->join('supir', 'supir.kode_supir', '=', 'sales_order.kode_supir')
                    ->whereBetween('tanggal', [$tanggal_awal, $tanggal_akhir])
                    ->where('sales_order.id_semen', "$request->semen")
                    ->where('sales_order.status', "$request->status")->get();
            
            }
            
            else {
                return redirect('/distribusisalesorder');
            }

            return view('distribusiSalesOrder', ['checkStatus' => $checkStatus, 'semenStock' => $Stock, 'so' => $so, 'so_all' => $so_all, 'mobil' => $mobil, 'supir' => $supir, 'semen' => $semen, 'supplier' => $supplier]);
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
                SalesOrder::create([
                    'kode_so' => $request->kode_so,
                    'tanggal' => $request->tanggal,
                    'kode_supplier' => $request->supplier,
                    'id_semen' => $request->merek_semen,
                    'qty' => $request->qty,
                    'total_harga' => $request->total_harga,
                    'kode_mobil' => $request->mobil,
                    'kode_supir' => $request->supir,
                    'pembayaran' => $request->pembayaran,
                    'biaya_pemesanan_semen' => $request->biaya_pemesanan_semen,
                    'status' => "proses",
                    'debit' => $debitVal,
                ]);
                return redirect()->back();
            }
            catch (QueryException $e) {
                $errorCode = $e->errorInfo[1];
                if ($errorCode == 1062) {
                    // houston, we have a duplicate entry problem
                    return redirect()->back()->with('error', "Data Kode SO sudah tercatat di dalam database sistem ");
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
                'so_excel' => 'required|mimes:csv,txt,xls,xlsx'
            ]);


            // menangkap file excel
            $file = $request->file('so_excel');
            // membuat nama file unik
            $nama_file = rand() . $file->getClientOriginalName();

            // upload ke folder file_siswa di dalam folder public
            $file->move(public_path('excel/so'), $nama_file);

            // import data
            Excel::import(new SalesOrderImport, public_path('excel/so/' . $nama_file));
            // notifikasi dengan session
            Session::flash('sukses', 'Data Berhasil Diimport!');

            // alihkan halaman kembali
            return redirect('/distribusisalesorder');
        }
        else {
            return view('login');
        }
    }

    public function export()
    {
        return Excel::download(new SalesOrderExport, 'SalesOrder.xlsx');
    }

    public function preview_pdf(Request $request)
    {
        if (Auth::check()) {
            $tanggal_awal = $request->tanggal_awal;
            $tanggal_akhir = $request->tanggal_akhir;


            $so = SalesOrder::join('semen', 'semen.id_semen', '=', 'sales_order.id_semen')
                    ->join('mobil', 'mobil.kode_mobil', '=', 'sales_order.kode_mobil')
                    ->join('supplier', 'supplier.kode_supplier', '=', 'sales_order.kode_supplier')
                    ->join('supir', 'supir.kode_supir', '=', 'sales_order.kode_supir')
                    ->whereBetween('tanggal', [$tanggal_awal, $tanggal_akhir])
                    ->where('sales_order.id_semen', "$request->semen")
                    ->get();
            return view('PDF.SalesOrderPDF', ['so' => $so]);
        }
        else {
            return view('login');
        }
    }

    public function cetak_pdf($awal, $akhir, $semen)
    {

        if ($awal->isEmpty()) {
        }
        $so = SalesOrder::all();
        $so_all = SalesOrder::all();

        $pdf = PDF::loadview('PDF.SalesOrderPDF', ['so' => $so, 'so_all' => $so_all]);
        return $pdf->download('SalesOrder.pdf');
    }

    public function truncateData()
    {
        if (Auth::check()) {
            SalesOrder::truncate();
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
                SalesOrder::where('kode_so', $request->kode_so)->update([
                    'kode_so' => $request->kode_so,
                    'tanggal' => $request->tanggal,
                    'tanggal_sampai' => $request->tanggal_sampai,
                    'kode_supplier' => $request->supplier,
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
                // alihka halaman ke halaman mobil
                return redirect()->back();
            }
            else {
                SalesOrder::where('kode_so', $request->kode_so)->update([
                    'kode_so' => $request->kode_so,
                    'tanggal' => $request->tanggal,
                    'tanggal_sampai' => $request->tanggal_sampai,
                    'kode_supplier' => $request->supplier,
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
                // alihka halaman ke halaman mobil
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
            SalesOrder::where('kode_so', $id)->delete();

            return redirect()->back();
        }
        else {
            return view('login');
        }
    }
}
