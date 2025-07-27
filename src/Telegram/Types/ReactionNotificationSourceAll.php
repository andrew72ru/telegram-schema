<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Notifications for reactions are shown for all reactions.
 */
class ReactionNotificationSourceAll extends ReactionNotificationSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reactionNotificationSourceAll',
        ];
    }
}
