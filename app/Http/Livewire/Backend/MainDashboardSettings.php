<?php

namespace App\Http\Livewire\Backend;

use App\Http\Livewire\Frontend\ModalForms\Volunteer;
use App\Models\Backend\DonorSetting;
use App\Models\Backend\RequestForGreeting;
use App\Models\Backend\Subscription;
use App\Models\Backend\Volunteers;
use App\Models\User;
use Livewire\Component;
use Lava;

class MainDashboardSettings extends Component
{
    public $message;

    public function render()
    {
        $showAll = [
            'subscribers' => Subscription::count(),
            'donors' => DonorSetting::count(),
            'volunteers' => Volunteers::count(),
            'volunteerShow' => Volunteers::latest()->limit(4)->get(),
            'volunteerGenderIsMale' => Volunteers::where('gender', 'male')->count(),
            'volunteerGenderIsFemale' => Volunteers::where('gender', 'female')->count(),
            'shout-out' => RequestForGreeting::count(),
            'users' => User::count(),
            'latest-donations' => DonorSetting::latest()->limit(2)->get()
        ];

    //==========================lavachart =================================
        $data = Lava::DataTable();
        $data->addStringColumn('Statistics')
            ->addNumberColumn('Statistics')
            ->addRow( ['Subscribers', $showAll['subscribers']] )
            ->addRow( ['Donors', $showAll['donors']] )
            ->addRow( ['Volunteers', $showAll['volunteers']] )
            ->addRow( ['Shoutout', $showAll['shout-out']] );

            Lava::DonutChart('Population',$data,[
                'title'=>'Statistics',
                'titleTextStyle'=>[
                    'color' => 'green',
                    'fontSize'=>14,
                ],
                'is3D'=>true
            ]);
    //=====================End LavaChart ================================

    //====================volunteers by gender ====================
    $data3 = Lava::DataTable();
        $data3->addStringColumn('Volunteer By Gender')
            ->addNumberColumn('Gender')
            ->addRow( ['Male', $showAll['volunteerGenderIsMale']])
            ->addRow( ['Female', $showAll['volunteerGenderIsFemale']]);

            Lava::BarChart('Volunteer By Gender',$data3,[
                'title'=>'Volunteer By Gender',
                'titleTextStyle'=>[
                    'color' => 'green',
                    'fontSize'=>14,
                ],
                'is3D'=>true
            ]);

        return view('livewire.backend.main-dashboard-settings', compact('showAll'))
                ->extends('layouts.backend');
    }
}
