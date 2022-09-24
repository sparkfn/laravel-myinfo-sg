<?php

namespace Ziming\LaravelMyinfoSg\Enums;

/**
 * For my personal use, don't use it
 * @internal
 */
enum MaritalStatusEnum: string
{
    case SINGLE = 'SINGLE';
    case MARRIED = 'MARRIED';
    case WIDOWED = 'WIDOWED';
    case DIVORCED = 'DIVORCED';

    public static function getOptions(): array
    {
        return array_column(self::cases(), 'value', 'value');
    }
}
