<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * An object of this type is returned on a successful function call for certain functions.
 */
class Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'ok',
        ];
    }
}
