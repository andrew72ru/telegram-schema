<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The element contains an error in an unspecified place. The error will be considered resolved when new data is added.
 */
class PassportElementErrorSourceUnspecified extends PassportElementErrorSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementErrorSourceUnspecified',
        ];
    }
}
