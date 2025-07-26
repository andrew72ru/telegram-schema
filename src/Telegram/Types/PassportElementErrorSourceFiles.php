<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of attached files contains an error. The error will be considered resolved when the list of files changes
 */
class PassportElementErrorSourceFiles extends PassportElementErrorSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementErrorSourceFiles',
        ];
    }
}
