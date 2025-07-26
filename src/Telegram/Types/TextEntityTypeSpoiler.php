<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A spoiler text
 */
class TextEntityTypeSpoiler extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeSpoiler',
        ];
    }
}
