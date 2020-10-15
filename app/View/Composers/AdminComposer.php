<?php

namespace App\View\Composers;

use Illuminate\Http\Request;

class AdminComposer
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function compose($view)
    {
        $view->with('links', [
            [
                'text' => 'Usuarios',
                'icon' => 'icon.users',
                'url' => route('admin.users.index'),
                'active' => $this->request->route()->named([
                    'admin.users.index',
                ]),
            ],
            [
                'text' => 'Mensajes de contacto',
                'icon' => 'icon.chat',
                'url' => route('admin.contactMessages.index'),
                'active' => $this->request->route()->named([
                    'admin.contactMessages.index',
                ]),
            ],
        ]);
    }
}
