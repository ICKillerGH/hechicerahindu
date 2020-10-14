<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ListUsers extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.list-users', [
            'users' => User::orderByDesc('id')->paginate(10)
        ])
            ->extends('layouts.admin');
    }
}
