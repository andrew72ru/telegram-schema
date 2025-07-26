<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The front side of the document contains an error. The error will be considered resolved when the file with the front side changes
 */
class PassportElementErrorSourceFrontSide extends PassportElementErrorSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementErrorSourceFrontSide',
        ];
    }
}
