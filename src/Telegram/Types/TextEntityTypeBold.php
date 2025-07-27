<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A bold text.
 */
class TextEntityTypeBold extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeBold',
        ];
    }
}
