<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The session is running on an unknown type of device.
 */
class SessionTypeUnknown extends SessionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sessionTypeUnknown',
        ];
    }
}
