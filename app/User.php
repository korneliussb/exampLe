<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request; //anyar
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function age()
    {
        return 32;
    }

    public function foo()
    {
        # code...
    }
    public function myM()
    {
        return "good";
    }

    public function one()
    {
        return "one";
    }

    protected function two()
    {
        return 2;
    }

    protected function three(Request $request)
    {
        return "hehe";
    }

    public function myFoobar()
    {
        return "foobar"; //foo
    }
}
