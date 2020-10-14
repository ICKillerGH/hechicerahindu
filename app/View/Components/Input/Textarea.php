<?php

namespace App\View\Components\Input;

class Textarea extends Input
{
    public $rows;

    public function __construct(
        ?string $name = null,
        ?string $id = null,
        ?string $label = null,
        bool $fullWidth = false,
        ?string $error = null,
        int $rows = 3)
    {
        parent::__construct($name, $id, $label, $fullWidth, $error);

        $this->rows = $rows;
    }

    public function render()
    {
        return view('components.input.textarea');
    }
}
