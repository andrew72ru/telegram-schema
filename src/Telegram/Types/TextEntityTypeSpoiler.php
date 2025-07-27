<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A spoiler text.
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
