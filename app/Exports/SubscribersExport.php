<?php

namespace App\Exports;

use App\Models\Backend\Subscription;
use Maatwebsite\Excel\Concerns\FromCollection;

class SubscribersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subscription::all();
    }
    public function headings(): array
    {
        return [
            '#',
            'name',
            'email',
            'Subscribed at',
            'Updated On'
        ];
    }

}
