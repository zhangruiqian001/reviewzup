<?php
/**
 * Created by PhpStorm.
 * User: richard
 * Date: 16/10/13
 * Time: 下午7:40
 */
namespace App\Service;
use GuzzleHttp\Client;
use Log;
class ItunesService {

    public function getInfo($url){
	Log::info("appID:".$this->substr_between($url,"/id","?"));
        $client = new Client();
        $res = $client->request('GET', 'https://itunes.apple.com/lookup?id='.$this->substr_between($url,"/id","?"));
        return $res->getBody()->getContents();
    }

   /**
    * Returns the substring between two strings, delimiters not included
    * @param string $string Haystack
    * @param string $start Starting delimiter
    * @param string|null $end Ending delimiter, if omitted will return the rest of the string
    * @return bool|string The substring between $start and $end or false if either string is not found
    */
    function substr_between($string, $start, $end=null) {
    	if(($start_pos = strpos($string, $start)) !== false) {
            if($end) {
            		if(($end_pos = strpos($string, $end, $start_pos + strlen($start))) !== false) {
                		return substr($string, $start_pos + strlen($start), $end_pos - ($start_pos + strlen($start)));
            		}
            } else {
            	return substr($string, $start_pos);
            }
    	}
    	return false;
    }
}
