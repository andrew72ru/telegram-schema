<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The block list that disallows viewing of stories of the current user.
 */
class BlockListStories extends BlockList implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'blockListStories',
        ];
    }
}
