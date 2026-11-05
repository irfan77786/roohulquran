<?php

namespace App\Helpers;

class CurrencyHelper
{
    public static function getCurrencyFromCountry($country)
    {
        if (!$country) {
            return config('currencies.default_currency', 'USD');
        }

        $countryToCurrency = config('currencies.country_to_currency', []);
        return $countryToCurrency[$country] ?? config('currencies.default_currency', 'USD');
    }

    public static function getCurrencySymbol($currencyCode)
    {
        $currencies = config('currencies.currencies', []);
        return $currencies[$currencyCode]['symbol'] ?? '$';
    }

    public static function format($amount, $currencyCode = 'USD')
    {
        $symbol = self::getCurrencySymbol($currencyCode);
        return $symbol . number_format($amount, 2);
    }
}

