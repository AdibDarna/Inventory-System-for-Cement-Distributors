<?php

namespace App\Imports;

use App\Models\Mobil;
use Maatwebsite\Excel\Concerns\ToModel;

class MobilImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Mobil([
            'kode_mobil' => $row[0],
            'status_kepemilikan' => $row[1],
            'transportir' => $row[2],
            'plat_nomor' => $row[3],
            'jenis_truk' => $row[4],
            'merek_truk' => $row[5],
            'kapasitas' => $row[6],
            'nomor_stnk' => $row[7],
            'nomor_rangka' => $row[8],
            'nomor_gps' => $row[9],
        ]);
    }
}
