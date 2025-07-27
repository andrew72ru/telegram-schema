<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The session is running on the Opera browser.
 */
class SessionTypeOpera extends SessionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sessionTypeOpera',
        ];
    }
}
