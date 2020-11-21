<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class Editor extends Component
{
    public $name;
    public $id;
    public $label;
    public $error;

    public function __construct(?string $name = null, ?string $label = null, ?string $error = null)
    {
        $this->name = $name;
        $this->id = uniqid();
        $this->label = $label;
        $this->error = $error;
    }

    public function render()
    {
        return view('components.input.editor');
    }
}
