<?php
namespace App\Services;

use Illuminate\Support\Str;

class UuidRegistry
{
    protected static array $uuids = [];

    public static function get(string $key): string
    {
        if (!isset(self::$uuids[$key])) {
            self::$uuids[$key] = (string) Str::uuid();
        }

        return self::$uuids[$key];
    }

    public static function all(): array
    {
        return self::$uuids;
    }
}