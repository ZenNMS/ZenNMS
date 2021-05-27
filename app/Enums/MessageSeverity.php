<?php

namespace App\Enums;

use Exception;

class MessageSeverity
{
    /**
     * @const int defined from the BSD Syslog message severities
     * @link http://tools.ietf.org/html/rfc3164
     *
     * 0 :: Emergency: system is unusable
     * 1 :: Alert: action must be taken immediately
     * 2 :: Critical: critical conditions
     * 3 :: Error: error conditions
     * 4 :: Warning: warning conditions
     * 5 :: Notice: normal but significant condition
     * 6 :: Informational: informational messages
     * 7 :: Debug: debug-level messages
     */
    const EMERGENCY = 0;
    const ALERT = 1;
    const CRITICAL = 2;
    const ERROR = 3;
    const WARNING = 4;
    const NOTICE = 5;
    const INFORMATIONAL = 6;
    const DEBUG = 7;

    /**
     * Returns the name of the severity.
     *
     * @param int $severity
     * @return string
     * @throws Exception
     */
    public static function SeverityName(int $severity): string
    {
        return match ($severity) {
            self::EMERGENCY => 'EMERGENCY',
            self::ALERT => 'ALERT',
            self::CRITICAL => 'CRITICAL',
            self::ERROR => 'ERROR',
            self::WARNING => 'WARNING',
            self::NOTICE => 'NOTICE',
            self::INFORMATIONAL => 'INFORMATIONAL',
            self::DEBUG => 'DEBUG',
            default => throw new Exception('Unknown Severity code'),
        };
    }

    /**
     * Returns a description of the severity code.
     *
     * @param int $severity
     * @return string
     * @throws Exception
     */
    public function SeverityDescription(int $severity): string
    {
        return match ($severity) {
            self::EMERGENCY => 'system is unusable',
            self::ALERT => 'action must be taken immediately',
            self::CRITICAL => 'critical conditions',
            self::ERROR => 'error conditions',
            self::WARNING => 'warning conditions',
            self::NOTICE => 'normal but significant condition',
            self::INFORMATIONAL => 'informational messages',
            self::DEBUG => 'debug-level messages',
            default => throw new Exception('Unknown Severity code'),
        };
    }
}
