<?php

namespace App\Http\Livewire\Frontend\Homepage\Agendas\More;

use App\Models\Backend\Agenda;
use Livewire\Component;

class MoreOnAgendas extends Component
{
    public Agenda $agenda;

    public function render()
    {
        return view('livewire.frontend.homepage.agendas.more.more-on-agendas')
                ->extends('layouts.frontend');
    }
}
