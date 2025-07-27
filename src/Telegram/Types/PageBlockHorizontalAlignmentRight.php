<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The content must be right-aligned.
 */
class PageBlockHorizontalAlignmentRight extends PageBlockHorizontalAlignment implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockHorizontalAlignmentRight',
        ];
    }
}
