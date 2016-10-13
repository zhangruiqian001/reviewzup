<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 16/10/13
 * Time: 下午7:40
 */
namespace App\Service;
use GuzzleHttp\Client;
class ItunesService {

    public function getInfo($url){
        $client = new Client();
        $res = $client->request('GET', 'https://itunes.apple.com/cn/lookup?id=451108668');
        return $res->getBody()->getContents();
    }
}