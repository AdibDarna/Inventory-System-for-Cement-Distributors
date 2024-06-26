<?php

namespace App\Http\Controllers;

use App\Models\DeliveryOrder;
use App\Models\SalesOrder;
use App\Models\Semen;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataSemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $Stock = Semen::get();

            $semen = Semen::join('supplier', 'supplier.kode_supplier', 'semen.kode_supplier')->paginate(10);
            $supplier = Supplier::get();
            $query = "SELECT month, merek_semen, MAX(quantity) AS stok FROM (SELECT MONTH(tanggal) AS month, merek_semen, SUM(qty) AS quantity FROM delivery_order WHERE YEAR(tanggal) =  " . (Carbon::today()->year - 1) . " GROUP BY month, merek_semen ) delivery_order GROUP BY merek_semen;";
            // untuk ngecek bulan apa aja yg ada di tahun tsb
            $indikatorBulan = DeliveryOrder::select(DB::raw('MONTHNAME(tanggal) as bulan'))->whereYear('tanggal', Carbon::today()->year - 1)->distinct()->get()->count();
            // untuk jumlah dari semen
            $Qty = DeliveryOrder::select(DB::raw('id_semen'), DB::raw('SUM(qty) as Quantity'), DB::raw('SUM(biaya_pemesanan) as Biaya'), DB::raw('COUNT(*) as totaldata'))->groupBy('id_semen')->whereYear('tanggal', Carbon::today()->year - 1)->get();
            // untuk stok ROP
            $QtyTest = DB::select('SELECT bulan,id_semen,MAX(Quantity) Max FROM (SELECT MONTH(tanggal) bulan, id_semen, SUM(qty) Quantity FROM `delivery_order` WHERE YEAR(tanggal) =  ' . (Carbon::today()->year - 1) . ' GROUP BY id_semen,bulan) delivery_order GROUP BY id_semen');

            // Deklarasi Quantitiy Order
            $qtyDO = DeliveryOrder::select(DB::raw('id_semen'), DB::raw('SUM(qty) as Quantity'))->groupBy('id_semen')
                // ->whereYear('tanggal', Carbon::today())
                ->get();
            $qtySO = SalesOrder::select(DB::raw('id_semen'), DB::raw('SUM(qty) as Quantity'))->groupBy('id_semen')
                // ->whereYear('tanggal', Carbon::today())
                ->get();


            //waktu tunggu
            $LeadTime = 2;
            // deklarasi utk perhitungan
            $MaxQty = 0;
            $MaksimumStock = 0;
            $SS = 0;

            $refreshDate = date('Y-m-d', mktime(0, 0, 0, 1, 1, date('Y')));
            $dateNow = date('Y-m-d');
            if ($dateNow == $refreshDate) {
                foreach ($Qty as $D) {
                    //Biaya setiap melakukan pesanan
                    $S = $D->biaya / $D->totaldata;

                    Semen::where('id_semen', $D->id_semen)->update([
                        'biaya_pemesanan' => $S
                    ]);

                    //hasil setiap melakukan pesanan
                    $H = $S * 0.05;

                    //Perhitungan EOQ Pertahun dan PerMerek
                    // round(membulatkan)
                    // sqrt (akar)

                    $EOQ = round(sqrt((2 * ($D->Quantity * $S)) / $H));

                    // maksimal stok
                    $MaksimumStock = $SS + $EOQ;

                    //rata" stok
                    $AverageStock = round($D->Quantity / $indikatorBulan);
                    foreach ($QtyTest as $Q) {

                        //Safety Stock
                        if ($D->id_semen == $Q->id_semen) {
                            $SS = ($Q->Max - $AverageStock) * $LeadTime;
                            $dROP = $Q->Max / 30;
                        }
                    }
                    // Perhitungan Pesanan dalam setahun
                    $F = round($D->Quantity / $EOQ);

                    // ROP
                    $ROP = round(($LeadTime * $dROP) + $SS);

                    // Refresh Quantity Semen
                    Semen::where('id_semen', $D->id_semen)->update([
                        'eoq' => $EOQ,
                        'rop' => $ROP,
                        'safety_stock' => $SS
                    ]);

                    // Dalam Setahun Perusahaan Memiliki 365 hari kerja, Maka 365/$F =
                    $HariKerja = 365 / $F;
                    echo "<script>console.log('Debug Objects: " . $D->id_semen . " |Qty :" . $D->Quantity . " |Rata :" . $AverageStock . " |ROP :" . $ROP . "' );</script>";
                }
            }


            // Penambhan Stock
            foreach ($qtySO as $sumqtyD) {
                Semen::where('id_semen', $sumqtyD->id_semen)->update([
                    'jumlah' => $sumqtyD->Quantity,

                ]);
            }
            // Pengurangan Stock
            foreach ($qtyDO as $sumqtyS) {
                $checkQtySemen = Semen::where('id_semen', $sumqtyS->id_semen)->first()->jumlah;

                $PenguranganStock = ($checkQtySemen - $sumqtyS->Quantity);

                Semen::where('id_semen', $sumqtyS->id_semen)->update([
                    'jumlah' => $PenguranganStock,

                ]);
            }



            return view('dataSemen', ['supplier' => $supplier, 'semenStock' => $Stock, 'semen' => $semen]);
        }
        else {
            return view('login');
        }
    }
    public function refreshRopEoq()
    {
        // untuk ngecek bulan apa aja yg ada di tahun tsb
        $indikatorBulan = DeliveryOrder::select(DB::raw('MONTHNAME(tanggal) as bulan'))->whereYear('tanggal', Carbon::today()->year - 1)->distinct()->get()->count();
        // untuk jumlah dari semen
        $Qty = DeliveryOrder::select(DB::raw('id_semen'), DB::raw('SUM(qty) as Quantity'), DB::raw('SUM(biaya_pemesanan) as Biaya'), DB::raw('COUNT(*) as totaldata'))->groupBy('id_semen')->whereYear('tanggal', Carbon::today()->year - 1)->get();
        // untuk stok ROP
        $QtyTest = DB::select('SELECT bulan,id_semen,MAX(Quantity) Max FROM (SELECT MONTH(tanggal) bulan, id_semen, SUM(qty) Quantity FROM `delivery_order` WHERE YEAR(tanggal) = ' . (Carbon::today()->year - 1) . ' GROUP BY id_semen,bulan) delivery_order GROUP BY id_semen');

        //waktu tunggu

        // deklarasi utk perhitungan
        $MaxQty = 0;
        $MaksimumStock = 0;
        $SS = 0;
        // dd($Qty);
        foreach ($Qty as $D) {


            //Biaya setiap melakukan pesanan
            $S = $D->Biaya / $D->totaldata;

            Semen::where('id_semen', $D->id_semen)->update([
                'biaya_pemesanan_semen' => $S
            ]);
            $LeadTime = Semen::where('id_semen', $D->id_semen)->value('lead_time');
            $biaya_penyimpanan = Semen::where('id_semen', $D->id_semen)->value('biaya_penyimpanan');


            //hasil setiap melakukan pesanan
            $H = $biaya_penyimpanan * 0.05;
            // $H = $biaya_penyimpanan;


            // echo $H;

            //Perhitungan EOQ Pertahun dan PerMerek
            // round(membulatkan)
            // sqrt (akar)
            $EOQ_Val = (2 * $D->Quantity * $S) / $H;
            $EOQ = round(sqrt($EOQ_Val));

            // maksimal stok
            $MaksimumStock = $SS + $EOQ;

            //rata" stok
            $AverageStock = round($D->Quantity / $indikatorBulan);
            foreach ($QtyTest as $Q) {

                //Safety Stock
                if ($D->id_semen == $Q->id_semen) {
                    $SS = ($Q->Max - $AverageStock) * $LeadTime;
                    $dROP = $Q->Max / 30;
                }
            }
            // Perhitungan Pesanan dalam setahun
            $F = round($D->Quantity / $EOQ);

            // ROP
            $ROP = round(($LeadTime * $dROP) + $SS);

            Semen::where('id_semen', $D->id_semen)->update([
                'eoq' => $EOQ,
                'rop' => $ROP,
                'safety_stock' => $SS
            ]);

            // Dalam Setahun Perusahaan Memiliki 365 hari kerja, Maka 365/$F =
            $HariKerja = 365 / $F;
            echo "<script>console.log('Debug Objects: " . $D->id_semen . " |Qty :" . $D->Quantity . " |Rata :" . $AverageStock . " |ROP :" . $ROP . "|EOQ :" . $EOQ . "|EOQ_val :" . intval($EOQ_Val) . "' );</script>";
        }
        return redirect('datasemen');
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
            Semen::create([
                'kode_supplier' => $request->supplier,
                'merek_semen' => $request->merek_semen,
                'jumlah' => $request->jumlah,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'eoq' => 0,
                'rop' => 0,
                'lead_time' => 2,
                'safety_stock' => 0,

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
            Semen::where('id_semen', $request->id_semen)->update([
                'kode_supplier' => $request->supplier,
                'merek_semen' => $request->merek_semen,
                'jumlah' => $request->jumlah,
                'harga_beli' => $request->harga_beli,
                'harga_jual' => $request->harga_jual,
                'biaya_penyimpanan' => $request->biaya_penyimpanan,
                'lead_time' => $request->lead_time,

                // 'eoq' => $request->eoq,
                // 'rop' => $request->rop,
                // 'safety_stock' => $request->safety_stock
            ]);
            $this->refreshRopEoq();
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
            Semen::where('id_semen', $id)->delete();
            // alihkan halaman ke halaman pegawai
            return redirect()->back();
        }
        else {
            return view('login');
        }
    }
}
