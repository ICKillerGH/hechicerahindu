<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ContactMessage;

class ListContactMessages extends Component
{
    use WithPagination;

    public function deleteMessage($messageId)
    {
        ContactMessage::destroy($messageId);
    }

    public function markAsSeen($messageId)
    {
        ContactMessage::where('id', $messageId)->update(['is_seen' => true]);
    }

    public function render()
    {
        return view('livewire.admin.list-contact-messages', [
            'messages' => ContactMessage::orderByDesc('id')->paginate(10),
        ])
            ->extends('layouts.admin');
    }
}
