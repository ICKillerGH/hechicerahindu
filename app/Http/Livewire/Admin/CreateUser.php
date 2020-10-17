<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CreateUser extends Component
{
    use AuthorizesRequests;

    public $name;
    public $role = 'invalid';
    public $email;
    public $password;
    public $password_confirmation;

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'role' => 'required|in:'. implode(',', User::roles()),
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function save($leave = true)
    {
        $this->authorize('create', User::class);

        $data = $this->validate();

        $user = User::create([
            'name' => $data['name'],
            'role' => $data['role'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'email_verified_at' => now(),
        ]);

        session()->flash('success', 'El usuario ha sido creado.');

        if ($leave) {
            return redirect()->route('admin.users.index');
        }

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.create-user', [
            'roles' => User::roles(),
        ])
            ->extends('layouts.admin');
    }
}
