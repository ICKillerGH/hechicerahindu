<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

abstract class Input extends Component
{
    public $name;
    public $id;
    public $label;
    public $fullWidth;
    public $error;
    public $errorClass;

    public function __construct(
        ?string $name = null,
        ?string $id = null,
        ?string $label = null,
        bool $fullWidth = false,
        ?string $error = null)
    {
        $this->name = $name;
        $this->id = $id ? $id : $name;
        $this->label = $label;
        $this->fullWidth = $fullWidth;
        $this->error = $error;
        $this->errorClass = $error ? 'border-red-500 focus:shadow-outline-red-500' : 'focus:shadow-outline-blue-500';
    }
}
