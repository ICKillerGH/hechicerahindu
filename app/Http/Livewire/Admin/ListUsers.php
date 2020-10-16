<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ListUsers extends Component
{
    use WithPagination, AuthorizesRequests;

    public function deleteUser($userId)
    {
        if (! $user = User::find($userId)) {
            return false;
        }

        $this->authorize('delete', $user);

        return $user->delete();
    }

    public function render()
    {
        return view('livewire.admin.list-users', [
            'users' => User::orderByDesc('id')->paginate(10)
        ])
            ->extends('layouts.admin');
    }
}
