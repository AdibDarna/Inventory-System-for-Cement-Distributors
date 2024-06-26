<?php

namespace App\Imports;

use App\Models\Agen;
use Maatwebsite\Excel\Concerns\ToModel;


class AgenImport implements ToModel
{
    /**
     * @param Collection $collection
     */
    public function model(array $row)
    {
        return new Agen([
            'kode_agen' => $row[0],
            'nama_agen' => $row[1],
            'nama_toko' => $row[2],
            'alamat' => $row[3],
            'no_hp' => $row[4],
        ]);
    }
}
