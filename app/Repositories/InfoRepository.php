<?php

namespace App\Repositories;

class InfoRepository
{
    /**
     * Return an array with the loaded status of the required PHP extensions of the application.
     *
     * @return array
     */
    public static function getApplicationExtensionsStatus(): array
    {
        $status = [];

        foreach (self::getApplicationRequiredExtensions() as $extension) {
            $status[$extension] = self::is_extension_loaded($extension);
        }

        return $status;
    }

    /**
     * Return an array with the required PHP extensions for the application.
     *
     * @return string[]
     */
    public static function getApplicationRequiredExtensions(): array
    {
        return [
            'snmp'
        ];
    }

    /**
     * Return an array with the loaded status of the required PHP extensions of the Laravel Framework.
     *
     * @return array
     */
    public static function getFrameworkExtensionsStatus(): array
    {
        $status = [];

        foreach (self::getFrameworkRequiredExtensions() as $extension) {
            $status[$extension] = self::is_extension_loaded($extension);
        }

        return $status;
    }

    /**
     * Return an array with the required PHP extensions for Laravel Framework.
     *
     * @return string[]
     */
    public static function getFrameworkRequiredExtensions(): array
    {
        return [
            'bcmath',
            'ctype',
            'fileinfo',
            'json',
            'mbstring',
            'openssl',
            'pdo',
            'pgsql',
            'redis',
            'tokenizer',
        ];
    }

    /**
     * Return an array with the PHP extensions loaded.
     *
     * @return array
     */
    public static function getLoadedExtensions(): array
    {
        $extensions = get_loaded_extensions();

        sort($extensions, SORT_STRING | SORT_FLAG_CASE);

        return $extensions;
    }

    /**
     * Return an array with the PHP extensions loaded and his version.
     *
     * @return array
     */
    public static function getLoadedExtensionsWithVersion(): array
    {
        $versions = [];

        foreach (self::getLoadedExtensions() as $extension) {
            $versions[$extension] = phpversion($extension);
        }

        return $versions;
    }

    /**
     * Return the loaded status of the PHP extension.
     *
     * @param string $extension
     *
     * @return string
     */
    public static function is_extension_loaded(string $extension): string
    {
        return extension_loaded($extension) ? 'OK' : 'KO';
    }

    /**
     * Return an array with the debug information of the application.
     *
     * @return array
     */
    public static function debug(): array
    {
        return [
            'php' => [
                'loaded_extensions' => self::getLoadedExtensionsWithVersion(),
                'version' => PHP_VERSION,
                'zend_version' => zend_version(),
            ],
            'framework' => self::getFrameworkExtensionsStatus(),
            'application' => self::getApplicationExtensionsStatus(),
        ];
    }
}
