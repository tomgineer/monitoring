<?php

declare(strict_types=1);

$config = require __DIR__ . '/config.php';
require __DIR__ . '/cache.php';
require __DIR__ . '/api_client.php';
require __DIR__ . '/helpers.php';
require __DIR__ . '/controller.php';

define_monitoring_version();

$urls = $config['api_urls'] ?? [];
$token = $config['api_token'] ?? '';
$cacheTtlSeconds = (int) ($config['cache_ttl'] ?? 60);
$results = fetch_monitoring_batch($urls, $token, $cacheTtlSeconds);
