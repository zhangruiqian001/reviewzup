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
        $itunesService = App::make('ItunesService');
        $result= $itunesService->getInfo($url);
        Log::info("httpresult".$result);
        $resultObj = json_decode($result,true);
	Log::info($resultObj);	
	$name = $resultObj['results'][0]['trackCensoredName'];
	$sellerUrl = $resultObj['results'][0]['sellerUrl'];
	$icon= $resultObj['results'][0]['artworkUrl100'];
        $info = [
            'info' => ['name' => $name, 'icon' => $icon, 'url' => $sellerUrl],
            'items' => [
                ['country' => 'China', 'unitServicePrice' => 10, 'appPrice' => 1],
                ['country' => 'USA', 'unitServicePrice' => 20, 'appPrice' => 2],
                ['country' => 'UK', 'unitServicePrice' => 15, 'appPrice' => 1.4]
            ]
        ];
        return $info;
    }


    public function prepareOrder(Request $request)
    {

    }

}
