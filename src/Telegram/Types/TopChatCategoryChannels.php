<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A category containing frequently used channels.
 */
class TopChatCategoryChannels extends TopChatCategory implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'topChatCategoryChannels',
        ];
    }
}
