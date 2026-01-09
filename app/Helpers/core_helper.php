<?php

if (!function_exists('formatNumber')) {
    /**
     * Format a number based on the browser's Accept-Language header.
     *
     * @param float $number      Number to format.
     * @param int   $maxDecimals Maximum fraction digits to display.
     */
    function formatNumber(float $number, int $maxDecimals = 2): string {
        $acceptLanguage = service('request')->getHeaderLine('Accept-Language');
        $locale = \Locale::acceptFromHttp($acceptLanguage) ?: 'en_US';

        $locale = str_replace('-', '_', $locale);

        $fmt = new \NumberFormatter($locale, \NumberFormatter::DECIMAL);
        $fmt->setAttribute(\NumberFormatter::MAX_FRACTION_DIGITS, $maxDecimals);
        $fmt->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, 0);

        return $fmt->format($number);
    }
}
