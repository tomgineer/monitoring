<?php

if (!function_exists('formatNumber')) {
    function formatNumber(float $number, int $maxDecimals = 2): string {
        $locale = service('request')->getLocale();

        $fmt = new \NumberFormatter($locale, \NumberFormatter::DECIMAL);
        $fmt->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, $maxDecimals);
        $fmt->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 0);

        return $fmt->format($number);
    }
}
