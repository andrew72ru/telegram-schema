<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The session is running on a Windows device.
 */
class SessionTypeWindows extends SessionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sessionTypeWindows',
        ];
    }
}
