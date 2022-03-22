<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class CurrencyRates
{
    /**
     * @throws Exception
     */
    public static function getRates()
    {
        $baseCurrency = CurrencyConversion::getBaseCurrency();

        $url = config('currency_rates.api_url') . '?base=' . $baseCurrency->code;
        $response = Http::get($url);

        if (!$response->getStatusCode() == 200) {
            throw new Exception('There is a problem with currency rate service');
        }

        $rates = $response->json('rates');

        foreach (CurrencyConversion::getCurrencies() as $currency) {
            if (!$currency->isMain()) {
                if (!isset($rates[$currency->code])) {
                    throw new Exception('There is a problem with currency ' . $currency->code);
                } else {
                    $currency->update(['rate' => $rates[$currency->code]]);
                    $currency->touch();
                }
            }
        }
    }
}
