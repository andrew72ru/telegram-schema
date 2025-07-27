<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns recommended chat folders for the current user.
 */
class GetRecommendedChatFolders extends RecommendedChatFolders implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getRecommendedChatFolders',
        ];
    }
}
