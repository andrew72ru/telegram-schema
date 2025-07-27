<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The main block list that disallows writing messages to the current user, receiving their status and photo, viewing of stories, and some other actions.
 */
class BlockListMain extends BlockList implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'blockListMain',
        ];
    }
}
