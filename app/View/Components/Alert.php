<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $colorClass;
    public $message;

    public function __construct(?string $message = null, ?string $color = null)
    {
        $this->message = $message;
        $this->colorClass = $this->resolveColorClass($color);
    }

    public function resolveColorClass(?string $color)
    {
        return [
            'blue' => 'bg-blue-300 text-blue-800 font-medium',
            'teal' => 'bg-teal-300 text-teal-800 font-medium',
            'green' => 'bg-green-300 text-green-800 font-medium',
            'purple' => 'bg-purple-300 text-purple-800 font-medium',
            'indigo' => 'bg-indigo-300 text-indigo-800 font-medium',
            'red' => 'bg-red-300 text-red-800 font-medium',
            'pink' => 'bg-pink-300 text-pink-800 font-medium',
            'yellow' => 'bg-yellow-300 text-yellow-800 font-medium',
            'orange' => 'bg-orange-300 text-orange-800 font-medium',
            'light' => 'bg-light-300 text-light-800 font-medium',
        ][$color] ?? '';
    }

    public function render()
    {
        return view('components.alert');
    }
}
