<?php

namespace App\View\Components\Input;

class Check extends Input
{
    public function __construct(
        ?string $name = null,
        ?string $id = null,
        ?string $label = null,
        bool $fullWidth = false,
        ?string $error = null)
    {
        if ($name === null && $id === null) {
            $id = uniqid();
        }

        parent::__construct($name, $id, $label, $fullWidth, $error);
    }

    public function render()
    {
        return view('components.input.check');
    }
}
