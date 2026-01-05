<?php

declare(strict_types=1);

/**
 * Cache monitoring API responses for a short time to reduce load.
 *
 * @param string $url API endpoint URL.
 * @param string $token Bearer token for authentication.
 * @param int $ttlSeconds Cache lifetime in seconds.
 * @return array{error: string|null, status: int, data: array|null, raw: string|null}
 */
function fetch_monitoring_data_cached(string $url, string $token, int $ttlSeconds = 60): array {
    $cacheDir = dirname(__DIR__) . '/cache';

    if (!is_dir($cacheDir)) {
        if (!mkdir($cacheDir, 0775, true) && !is_dir($cacheDir)) {
            return fetch_monitoring_data($url, $token);
        }
    }

    $cacheKey = sha1($url . '|' . $token);
    $cacheFile = $cacheDir . '/' . $cacheKey . '.json';

    if (is_file($cacheFile)) {
        $age = time() - (int) filemtime($cacheFile);
        if ($age >= 0 && $age < $ttlSeconds) {
            $cached = file_get_contents($cacheFile);
            if ($cached !== false) {
                $decoded = json_decode($cached, true);
                if (is_array($decoded)) {
                    return $decoded;
                }
            }
        }
    }

    $response = fetch_monitoring_data($url, $token);
    $payload = json_encode($response);

    if ($payload !== false) {
        file_put_contents($cacheFile, $payload, LOCK_EX);
    }

    return $response;
}
