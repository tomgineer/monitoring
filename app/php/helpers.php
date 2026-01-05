<?php

declare(strict_types=1);

/**
 * Escape a value for safe HTML output.
 *
 * @param mixed $value Value to escape.
 * @return string Escaped string.
 */
function esc($value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/**
 * Define the MONITORING_VERSION constant from the /VERSION file.
 */
function define_monitoring_version(): void {
    if (defined('MONITORING_VERSION')) {
        return;
    }

    $root = dirname(__DIR__, 2);
    $versionFile = $root . DIRECTORY_SEPARATOR . 'VERSION';
    $version = is_file($versionFile) ? trim((string) file_get_contents($versionFile)) : '';

    if ($version === '') {
        $version = 'dev';
    }

    define('MONITORING_VERSION', $version);
}
