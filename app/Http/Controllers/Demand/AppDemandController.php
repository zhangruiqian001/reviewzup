<?php

namespace App\Http\Controllers\Demand;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\AppDemand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Log;

class AppDemandController extends Controller
{
    //
//    public function post(Request $request)
//    {
//        if (Auth::check()) {
//            $input = $request->all();
//            $info = $request->info;
//            Log::info(json_encode($input));
//
//            $size = count($info['appUrl']);
//            Log::info('size:' . $size);
//            for ($i = 0; $i < $size; ++$i) {
//                Log::info($i . ':' . $info['appUrl'][$i] . ':' . $info['country'][$i]);
//                $demand = new AppDemand();
//                $demand->user_id = $request->user()->id;
//                $demand->app_url = $info['appUrl'][$i];
//                $demand->country = $info['country'][$i];
//                $demand->save();
//            }
//        }
//    }

    public function preview(Request $request)
    {
        if (Auth::check()) {
            $appUrl = $request->app_url;
            $info = $this->getAppInfo($appUrl);
            return view('demand.demand-charge', ['data' => $info]);
        }
    }


    private function getAppInfo($url)
    {
        //TODO 去itunes获取信息
        $info = [
            'info' => ['name' => 'whatsapp', 'icon' => 'abc', 'url' => $url],
            'items' => [
                ['country' => 'China', 'unitServicePrice' => 10, 'appPrice' => 1],
                ['country' => 'USA', 'unitServicePrice' => 20, 'appPrice' => 2],
                ['country' => 'UK', 'unitServicePrice' => 15, 'appPrice' => 1.4]
            ]
        ];
        return $info;
    }


    public function addOrder(Request $request){

    }

}
