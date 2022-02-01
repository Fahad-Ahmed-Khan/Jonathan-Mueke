<?php

namespace App\Exports;

use App\Models\Backend\DonorSetting;
use Maatwebsite\Excel\Concerns\FromCollection;

class DonationExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DonorSetting::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'name',
            'email',
            'phone',
            'amount',
            'created_by',
            'created_on',
            'updated_on'
        ];
    }
}
