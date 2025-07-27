<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * An italic text.
 */
class TextEntityTypeItalic extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeItalic',
        ];
    }
}
