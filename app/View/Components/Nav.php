<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Nav extends Component
{
    public $selectedTab;

    public function __construct(string $selectedTab = '')
    {
        $this->selectedTab = $selectedTab;
    }

    public function render()
    {
        return view('components.nav');
    }
}
