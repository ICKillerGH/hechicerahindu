<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public const ROLE_ADMIN = 'administrador';
    public const ROLE_EDITOR = 'editor';

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //----- Methods -----//
    public function isAdmin()
    {
        return $this->role === static::ROLE_ADMIN;
    }

    public function defaultLoginRedirect()
    {
        return [
            static::ROLE_ADMIN => route('admin.users.index'),
            static::ROLE_EDITOR => route('admin.contactMessages.index'),
        ][$this->role];
    }

    public function canBeDeleted()
    {
        return $this->id === 1;
    }

    //----- Static Methods -----//
    public static function roles()
    {
        return [
            static::ROLE_ADMIN,
            static::ROLE_EDITOR,
        ];
    }
}
