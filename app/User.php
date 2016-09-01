<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
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
        $content = $this->name . $this->email . $now;
        Log::info('content '.$content);
        $token = hash_hmac('sha256', $content, 'secret');
        $this->token = $token;
        $this->save();
    }

    public function sendActiveEmail()
    {
        $user = $this;
        Mail::queue('auth.emails.active', ['name' => $this->name, 'token' => $this->token],
            function ($message) use ($user) {
                $message->from(env('MAIL_SENDER','ReviewZup@example.com'));
                $message->to($user->email)->subject('Active your account');
            }
        );
    }
}
