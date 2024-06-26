<?php

namespace App\Http\Controllers;

use App\Models\SalesOrder;
use App\Models\DeliveryOrder;
use App\Models\Semen;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DataDashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $now = new DateTime();

            $Stock = Semen::get();
            $SODay = SalesOrder::where('tanggal', $now->format('Y-m-d'))->get();
            $SOCountDay = $SODay->count();
            $SOMonth = SalesOrder::whereMonth("tanggal", $now->format('m'))->whereYear('tanggal', $now->format('Y-m-d'))->get();
            $SOCountMonth = $SOMonth->count();
            $SOYear = SalesOrder::whereYear('tanggal', $now->format('Y-m-d'))->get();
            $SOCountYear = $SOYear->count();


            $DODay = DeliveryOrder::where('tanggal', $now->format('Y-m-d'))->get();
            $DOCountDay = $DODay->count();
            $DOMonth = DeliveryOrder::whereMonth("tanggal", $now->format('m'))->whereYear('tanggal', $now->format('Y-m-d'))->get();
            $DOCountMonth = $DOMonth->count();
            $DOYear = DeliveryOrder::whereYear('tanggal', $now->format('Y-m-d'))->get();
            $DOCountYear = $DOYear->count();

            $stokCount = 0;
            foreach ($Stock as $stok) {
                $stokCount += $stok->jumlah;
            }

            // for($m=1; $m<=12; ++$m){
            //     echo date('F', mktime(0, 0, 0, $m, 1)).'<br>';
            // }
            $penPerBulan = DeliveryOrder::select(
                DB::raw('SUM(qty) as `count`'),
                DB::raw("DATE_FORMAT(tanggal,'%M') as month"),
                DB::raw('min(tanggal) as createdAt')
            )
                ->whereYear("tanggal", Carbon::today())
                ->orderBy('createdAt', 'asc')
                ->groupBy('month')
                ->get();

            $curYear = Carbon::today()->year;

            $penSemen = DeliveryOrder::select(
                DB::raw('SUM(delivery_order.qty) as `delivery`'),
                DB::raw("semen.merek_semen as semen")

            )
                ->join('semen', 'semen.id_semen', '=', 'delivery_order.id_semen')
                ->whereYear("tanggal", Carbon::today())
                ->groupBy('semen')
                ->get();
            ;
            $supirTop = DeliveryOrder::select(
                DB::raw('supir.nama_supir'),
                DB::raw('COUNT(*) as total')
            )->join('supir', 'supir.kode_supir', '=', 'delivery_order.kode_supir')->groupBy('supir.nama_supir')->orderBy('total', 'DESC')->take(10)->get();

            $mobilTop = DeliveryOrder::select(
                DB::raw('mobil.plat_nomor'),
                DB::raw('COUNT(*) as total')
            )->join('mobil', 'mobil.kode_mobil', '=', 'delivery_order.kode_mobil')->groupBy('mobil.plat_nomor')->orderBy('total', 'DESC')->take(10)->get();

            $agenTop = DeliveryOrder::select(
                DB::raw('agen.nama_toko'),
                DB::raw('COUNT(*) as total')
            )->join('agen', 'agen.kode_agen', '=', 'delivery_order.kode_agen')->groupBy('agen.nama_toko')->orderBy('total', 'DESC')->take(10)->get();

            $DOStatus = DeliveryOrder::join('mobil', 'mobil.kode_mobil', '=', 'delivery_order.kode_mobil')
                ->join('supir', 'supir.kode_supir', '=', 'delivery_order.kode_supir')
                ->where('status', 'proses')->get();
            $SOStatus = SalesOrder::join('mobil', 'mobil.kode_mobil', '=', 'sales_order.kode_mobil')
                ->join('supir', 'supir.kode_supir', '=', 'sales_order.kode_supir')
                ->where('status', 'proses')
                ->get();


            // dd($supirTop);
            return view('index', ['DOStatus' => $DOStatus, 'SOStatus' => $SOStatus, 'agenTop' => $agenTop, 'mobilTop' => $mobilTop, 'supirTop' => $supirTop, 'stokCount' => $stokCount, 'SODay' => $SOCountDay, 'SOMonth' => $SOCountMonth, 'SOYear' => $SOCountYear, 'DODay' => $DOCountDay, 'DOMonth' => $DOCountMonth, 'DOYear' => $DOCountYear, 'perBulan' => $penPerBulan, 'curYear' => $curYear, 'penSem' => $penSemen, 'semenStock' => $Stock]);
        }
        else {
            return view('login');
        }
    }
}
