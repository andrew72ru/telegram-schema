<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A regular user.
 */
class UserTypeRegular extends UserType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userTypeRegular',
        ];
    }
}
