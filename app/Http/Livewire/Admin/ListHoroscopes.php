<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Horoscope;

class ListHoroscopes extends Component
{
    public function deleteHoroscope($horoscopeId)
    {
        return Horoscope::destroy($horoscopeId);
    }

    public function render()
    {
        return view('livewire.admin.list-horoscopes', [
            'horoscopes' => Horoscope::latest('id')->paginate(10)
        ])
            ->extends('layouts.admin');
    }
}
