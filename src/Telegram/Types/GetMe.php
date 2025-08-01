<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the current user.
 */
class GetMe extends User implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMe',
        ];
    }
}
