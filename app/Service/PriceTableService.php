<?php
/**
 * Created by PhpStorm.
 * User: zhangruiqian
 * Date: 2016/11/12
 * Time: 20:57
 */

namespace App\Service;


class PriceTableService
{
    public function getPriceTable()
    {
        $table = [
            ['country' => 'China', 'strategies' => [
                ['amount' => 5, 'servicePrice' => 5, 'off' => '0'],
                ['amount' => 10, 'servicePrice' => 9.8, 'off' => '20%'],
                ['amount' => 20, 'servicePrice' => 19, 'off' => '25%']
            ]],
            ['country' => 'USA', 'strategies' => [
                ['amount' => 5, 'servicePrice' => 10, 'off' => '0'],
                ['amount' => 10, 'servicePrice' => 15, 'off' => '21%'],
                ['amount' => 20, 'servicePrice' => 25, 'off' => '26%']
            ]],
            ['country' => 'UK', 'strategies' => [
                ['amount' => 5, 'servicePrice' => 1, 'off' => '0'],
                ['amount' => 10, 'servicePrice' => 1.5, 'off' => '21%'],
                ['amount' => 20, 'servicePrice' => 2, 'off' => '22%']
            ]],
        ];
        return $table;
    }
}