<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 16/8/30
 * Time: 下午11:20
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ActiveController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function showEmailActivePage()
    {
        if (property_exists($this, 'sendActiveEmailView')) {
            return view($this->sendActiveEmailView);
        }
        return view('auth.active.active');
    }

    public function activeAccount($token)
    {
        $user = User::where('token', $token)->first();
        Log::info('Showing user profile for user: ' . $user);
        if ($user) {
            $user->active = 1;
            $user->save();
            echo "Active success";
            Auth::login($user);
            return redirect('/home');
        } else {
            abort(404);
        }
    }

    public function sendActiveEmail()
    {
        $user = Auth::user();
        $user->generateToken();
        $user->sendActiveEmail();
        return view('auth.active.email-send');
    }
}