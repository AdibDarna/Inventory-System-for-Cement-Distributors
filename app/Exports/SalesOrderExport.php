<?php

namespace App\Exports;

use App\Models\SalesOrder;
use Maatwebsite\Excel\Concerns\FromCollection;


class SalesOrderExport implements FromCollection
{

    public function collection()
    {
        return SalesOrder::all();
    }
}
