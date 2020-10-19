<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Delete extends Component
{
    public $title;
    public $resourceId;

    public function __construct(string $title = 'Eliminar', ?int $resourceId = null)
    {
        $this->title = $title;
        $this->resourceId = $resourceId;
    }

    public function render()
    {
        return view('components.button.delete');
    }
}
