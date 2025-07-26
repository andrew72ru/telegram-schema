<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A category containing frequently used private chats with non-bot users
 */
class TopChatCategoryUsers extends TopChatCategory implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'topChatCategoryUsers',
        ];
    }
}
