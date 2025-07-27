<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A Telegram Passport element containing the user's temporary registration.
 */
class PassportElementTypeTemporaryRegistration extends PassportElementType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementTypeTemporaryRegistration',
        ];
    }
}
