<?php

namespace App\View\Composers;

use App\Models\User;
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
                    'admin.users.create',
                ]),
                'show' => $this->request->user()->can('viewAny', User::class),
            ],
            [
                'text' => 'Mensajes de contacto',
                'icon' => 'icon.chat',
                'url' => route('admin.contactMessages.index'),
                'active' => $this->request->route()->named([
                    'admin.contactMessages.index',
                ]),
                'show' => true,
            ],
            [
                'text' => 'Horóscopos',
                'icon' => 'icon.calendar',
                'url' => route('admin.horoscopes.index'),
                'active' => $this->request->route()->named([
                    'admin.horoscopes.index',
                    'admin.horoscopes.create',
                ]),
                'show' => true,
            ],
        ]);
    }
}
