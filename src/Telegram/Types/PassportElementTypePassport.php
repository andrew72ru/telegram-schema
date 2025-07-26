<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's passport
 */
class PassportElementTypePassport extends PassportElementType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementTypePassport',
        ];
    }
}
