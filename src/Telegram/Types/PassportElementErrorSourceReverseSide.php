<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The reverse side of the document contains an error. The error will be considered resolved when the file with the reverse side changes
 */
class PassportElementErrorSourceReverseSide extends PassportElementErrorSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementErrorSourceReverseSide',
        ];
    }
}
