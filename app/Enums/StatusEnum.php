<?php

namespace App\Enums;

class StatusEnum
{
    public const UNKNOWN = 0;
    public const UP = 1;
    public const DOWN = 2;
    public const WARNING = 3;
    public const CRITICAL = 4;
    public const SILENCED = 5;
    public const UNMANAGED = 6;
}
