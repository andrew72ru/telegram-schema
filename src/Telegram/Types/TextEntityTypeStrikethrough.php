<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A strikethrough text.
 */
class TextEntityTypeStrikethrough extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeStrikethrough',
        ];
    }
}
