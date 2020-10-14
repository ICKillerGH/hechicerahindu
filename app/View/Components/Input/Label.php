<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class Label extends Component
{
    public $text;
    public $for;

    public function __construct(?string $text, $for = null)
    {
        $this->text = $text;
        $this->for = $for;
    }

    public function shouldRender()
    {
        return ! empty($this->text);
    }

    public function render()
    {
        return <<<'blade'
            <label @if ($for) for="{{ $for }}" @endif class="block">{{ $text }}</label>
        blade;
    }
}
