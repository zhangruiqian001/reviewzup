<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
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

    public function generateToken()
    {
        $now = time();
        $token = bcrypt($this->name . $this->password . $this->email . $now);
        $this->token = $token;
        $this->save();
    }

    public function sendActiveEmail()
    {
        $user = $this;
        Mail::queue('auth.emails.active', ['name' => $this->name, 'token' => $this->token],
            function ($message) use ($user) {
                $message->from(env('MAIL_USERNAME','ReviewZup'));
                $message->to($user->email)->subject('Active your account');
            }
        );
    }
}
