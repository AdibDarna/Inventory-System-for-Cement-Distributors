<?php

namespace App\Imports;

use App\Models\SalesOrder;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use App\Models\Semen;
use App\Models\Supplier;
use App\Models\Mobil;
use App\Models\Supir;

class SalesOrderImport implements ToModel, WithBatchInserts, WithChunkReading
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (!array_filter($row)) {
            return null;
        }
        return new SalesOrder([
            'kode_so' => $row[0],
            'tanggal' => $row[1],
            'tanggal_sampai' => $row[2],
            'kode_supplier' => $this->supplier($row[3]),
            'id_semen' => $this->merek_semen($row[4]),
            'qty' => $row[5],
            'total_harga' => str_replace('.', '', $row[6]),
            'kode_mobil' => $this->plat_nomor($row[7]),
            'kode_supir' => $this->nama_supir($row[8]),
            'biaya_pemesanan' => str_replace('.', '', $row[9]),
            'pembayaran' => $row[10],
            'debit' => $row[11],
            'status' => $row[12],

        ]);
    }

    public function merek_semen($merek_semen)
    {
        $id_semen = Semen::where('merek_semen', $merek_semen)->value('id_semen');
        if ($id_semen !== null) {
            return $id_semen;

        }
        else {
            return 999999;
        }
    }

    public function supplier($supplier)
    {
        $kode_supplier = Supplier::where('supplier', $supplier)->value('kode_supplier');
        if ($kode_supplier !== null) {

            return $kode_supplier;

        }
        else {
            return 999999;
        }
    }

    public function plat_nomor($plat_nomor)
    {
        $kode_mobil = Mobil::where('plat_nomor', $plat_nomor)->value('kode_mobil');
        if ($kode_mobil !== null) {
            return $kode_mobil;


        }
        else {
            return 999999;
        }
    }

    public function nama_supir($nama_supir)
    {
        $kode_supir = Supir::where('nama_supir', $nama_supir)->value('kode_supir');
        if ($kode_supir !== null) {
            return $kode_supir;

        }
        else {
            return 999999;
        }
    }

    public function batchSize(): int
    {
        return 10;
    }

    public function chunkSize(): int
    {
        return 10;
    }
}
