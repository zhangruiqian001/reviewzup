<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 16/8/30
 * Time: 下午11:20
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

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
        return view('auth.active');
    }
}