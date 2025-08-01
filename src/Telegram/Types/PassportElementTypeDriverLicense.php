<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A Telegram Passport element containing the user's driver license.
 */
class PassportElementTypeDriverLicense extends PassportElementType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementTypeDriverLicense',
        ];
    }
}
