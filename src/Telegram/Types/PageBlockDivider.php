<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * An empty block separating a page.
 */
class PageBlockDivider extends PageBlock implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockDivider',
        ];
    }
}
