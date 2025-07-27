<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The session is running on the Safari browser.
 */
class SessionTypeSafari extends SessionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sessionTypeSafari',
        ];
    }
}
