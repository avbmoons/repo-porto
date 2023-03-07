<?php

namespace App\Enums;

enum UserStatus: string
{
    case DRAFT = 'draft';
    case ACTIVE = 'active';
    case BLOCKED = 'blocked';

    public static function all(): array
    {
        return [
            self::DRAFT->value,
            self::ACTIVE->value,
            self::BLOCKED->value,
        ];
    }
}
