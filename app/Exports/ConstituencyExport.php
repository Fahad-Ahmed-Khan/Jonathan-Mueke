<?php

namespace App\Exports;

use App\Models\Backend\Constituency;
use Maatwebsite\Excel\Concerns\FromCollection;

class ConstituencyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Constituency::all();
    }
}
