<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $tag;
    public $outlined;
    public $colorClass;

    public function __construct(string $tag = 'button', ?string $color = null, bool $outlined = false)
    {
        $this->tag = $tag;
        $this->outlined = $outlined;
        $this->colorClass = $this->resolveColorClass($color);
    }

    public function resolveColorClass(?string $color)
    {
        return [
            'blue' => $this->outlined
                ? 'border border-blue-500 hover:bg-blue-500 text-blue-500 hover:text-white focus:shadow-outline-blue-400'
                : 'bg-blue-500 hover:bg-blue-600 text-white border border-blue-500 hover:border-blue-600 focus:shadow-outline-blue-400',
            'teal' => $this->outlined
                ? 'border border-teal-600 hover:bg-teal-600 text-teal-600 hover:text-white focus:shadow-outline-teal-400'
                : 'bg-teal-600 hover:bg-teal-700 text-white border border-teal-600 hover:border-teal-700 focus:shadow-outline-teal-400',
            'green' => $this->outlined
                ? 'border border-green-500 hover:bg-green-500 text-green-500 hover:text-white focus:shadow-outline-green-400'
                : 'bg-green-500 hover:bg-green-600 text-white border border-green-500 hover:border-green-600 focus:shadow-outline-green-400',
            'purple' => $this->outlined
                ? 'border border-purple-600 hover:bg-purple-600 text-purple-600 hover:text-white focus:shadow-outline-purple-400'
                : 'bg-purple-600 hover:bg-purple-700 text-white border border-purple-600 hover:border-purple-700 focus:shadow-outline-purple-400',
            'indigo' => $this->outlined
                ? 'border border-indigo-600 hover:bg-indigo-600 text-indigo-600 hover:text-white focus:shadow-outline-indigo-400'
                : 'bg-indigo-600 hover:bg-indigo-700 text-white border border-indigo-600 hover:border-indigo-700 focus:shadow-outline-indigo-400',
            'red' => $this->outlined
                ? 'border border-red-600 hover:bg-red-600 text-red-600 hover:text-white focus:shadow-outline-red-400'
                : 'bg-red-600 hover:bg-red-700 text-white border border-red-600 hover:border-red-700 focus:shadow-outline-red-400',
            'pink' => $this->outlined
                ? 'border border-pink-500 hover:bg-pink-500 text-pink-500 hover:text-white focus:shadow-outline-pink-400'
                : 'bg-pink-500 hover:bg-pink-600 text-white border border-pink-500 hover:border-pink-600 focus:shadow-outline-pink-400',
            'yellow' => $this->outlined
                ? 'border border-yellow-600 hover:bg-yellow-600 text-yellow-600 hover:text-white focus:shadow-outline-yellow-500'
                : 'bg-yellow-500 hover:bg-yellow-600 text-gray-800 border border-yellow-500 hover:border-yellow-600 focus:shadow-outline-yellow-500',
            'orange' => $this->outlined
                ? 'border border-orange-500 hover:bg-orange-500 text-orange-500 hover:text-white focus:shadow-outline-orange-400'
                : 'bg-orange-500 hover:bg-orange-600 text-white border border-orange-500 hover:border-orange-600 focus:shadow-outline-orange-400',
            'light' => $this->outlined
                ? 'bg-white hover:bg-gray-200 text-gray-700 border border-gray-300 focus:shadow-outline-gray-300'
                : 'bg-gray-100 hover:bg-gray-200 text-gray-900 border border-gray-300 focus:shadow-outline-gray-300'
        ][$color] ?? '';
    }

    public function render()
    {
        return view('components.button');
    }
}
