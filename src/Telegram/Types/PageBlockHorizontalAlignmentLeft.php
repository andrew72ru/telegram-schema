<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The content must be left-aligned.
 */
class PageBlockHorizontalAlignmentLeft extends PageBlockHorizontalAlignment implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockHorizontalAlignmentLeft',
        ];
    }
}
