<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The session is running on an Android device.
 */
class SessionTypeAndroid extends SessionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sessionTypeAndroid',
        ];
    }
}
