<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;
use App\Models\ContactMessage;

class ContactForm extends Component
{
    public $name;
    public $phone;
    public $subject;
    public $message;

    protected $rules = [
        'name' => 'required|max:100',
        'phone' => 'required|max:50',
        'subject' => 'required|max:50',
        'message' => 'required|max:500',
    ];

    public function save()
    {
        ContactMessage::create($this->validate());

        session()->flash('alert', 'El mensaje ha sido enviado, nos pondremos en contacto lo más pronto posible');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.web.contact-form');
    }
}
