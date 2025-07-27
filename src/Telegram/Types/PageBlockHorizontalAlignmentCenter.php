<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The content must be center-aligned.
 */
class PageBlockHorizontalAlignmentCenter extends PageBlockHorizontalAlignment implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockHorizontalAlignmentCenter',
        ];
    }
}
