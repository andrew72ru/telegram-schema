<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Text that must be formatted as if inside a code HTML tag.
 */
class TextEntityTypeCode extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeCode',
        ];
    }
}
