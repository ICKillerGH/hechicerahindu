<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class ErrorMsg extends Component
{
    public $message;

    public function __construct(?string $message)
    {
        $this->message = $message;
    }

    public function shouldRender()
    {
        return ! empty($this->message);
    }

    public function render()
    {
        return <<<'blade'
            <span class="block text-xs text-red-600">{{ $message }}</span>
        blade;
    }
}
