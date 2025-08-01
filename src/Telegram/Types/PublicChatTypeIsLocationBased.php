<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The chat is public, because it is a location-based supergroup.
 */
class PublicChatTypeIsLocationBased extends PublicChatType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'publicChatTypeIsLocationBased',
        ];
    }
}
