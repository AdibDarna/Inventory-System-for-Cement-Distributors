<?php

namespace App\Imports;

use App\Models\Supir;
use Maatwebsite\Excel\Concerns\ToModel;

class SupirImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Supir([
            'nama_supir' => $row[0],
            'no_hp' => $row[1], 
            'alamat' => $row[2],
            'no_sim' => $row[3], 
        ]);
    }
}
