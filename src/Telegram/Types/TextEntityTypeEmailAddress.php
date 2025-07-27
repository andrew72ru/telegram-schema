<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * An email address.
 */
class TextEntityTypeEmailAddress extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypeEmailAddress',
        ];
    }
}
