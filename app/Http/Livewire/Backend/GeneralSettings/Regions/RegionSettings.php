<?php

namespace App\Http\Livewire\Backend\GeneralSettings\Regions;

use App\Models\Backend\Constituency;
use App\Models\Backend\County;
use Livewire\Component;

class RegionSettings extends Component
{
    public function render()
    {
        $showInRegion = [
            'countCounties' =>  County::count(),
            'countConstituencies' => Constituency::count()
        ];
        return view('livewire.backend.general-settings.regions.region-settings',
                compact('showInRegion'))
                ->extends('layouts.backend');
    }
}
