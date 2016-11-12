<?php

namespace App\Http\Controllers\Demand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
        $result = $itunesService->getInfo($url);
        Log::info("httpresult" . $result);
        $resultObj = json_decode($result, true);
        Log::info($resultObj);
        $name = $resultObj['results'][0]['trackCensoredName'];
        $sellerUrl = "";
//        $sellerUrl = $resultObj['results'][0]['sellerUrl'];
        $icon = $resultObj['results'][0]['artworkUrl100'];
        $info = [
            'info' => ['name' => $name, 'icon' => $icon, 'url' => $sellerUrl],
            'items' => App::make('PriceTableService')->getPriceTable()
        ];
        return $info;
    }


    public function createDemand(Request $request)
    {
        $priceTable = App::make('PriceTableService')->getPriceTable();
        foreach ($priceTable as $item) {
            $value = $request->input($item['country']);
            Log::info("############" . $value);
        }
    }

}
