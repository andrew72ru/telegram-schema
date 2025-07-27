<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * An underlined text.
 */
class TextEntityTypeUnderline extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeUnderline',
        ];
    }
}
