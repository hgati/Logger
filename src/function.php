<?php
/**
 * @category    CleatSquad
 * @package     CleatSquad_Logger
 * @copyright   Copyright (c) 2022 CleatSquad, Inc. (https://www.cleatsquad.com)
 */

if (!function_exists('_log')) {
    /**
     * Send log to the defined file in var/log
     *
     * @param mixed $text
     * @param string $filename
     * @param int $type
     * @throws \Exception                If a missing directory is not buildable
     * @throws \InvalidArgumentException If stream is not a resource or string
     */
    function _log($text, string $filename = 'logger.log', int $type = \Monolog\Logger::DEBUG): void
    {
        $original_timezone = date_default_timezone_get();
        date_default_timezone_set('Asia/Seoul');
        \CleatSquad\Logger::log($text, $filename, $type);
        date_default_timezone_set($original_timezone);
    }
}
