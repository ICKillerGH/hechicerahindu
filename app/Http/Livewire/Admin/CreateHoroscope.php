<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Horoscope;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class CreateHoroscope extends Component
{
    public $zodiacSign = 'invalid';
    public $from;
    public $to;
    public $content;

    public function getZodiacSignsProperty()
    {
        return config('custom.zodiac_signs');
    }

    public function rules()
    {
        return [
            'zodiacSign' => [
                'required',
                Rule::in(Arr::pluck($this->zodiacSigns, 'name')),
            ],
            'from' => 'required|date',
            'to' => 'required|date|after:from',
            'content' => 'required|max:20000',
        ];
    }

    public function save($leave = true)
    {
        $data = $this->validate();

        Horoscope::create([
            'zodiac_sign' => $this->zodiacSign,
            'from' => $this->from,
            'to' => $this->to,
            'content' => $this->content,
        ]);

        session()->flash('success', 'El horóscopo ha sido creado.');

        if ($leave) {
            return redirect()->route('admin.horoscopes.index');
        }

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.create-horoscope')
            ->extends('layouts.admin');
    }
}
