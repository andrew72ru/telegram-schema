<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Notifications for reactions are disabled
 */
class ReactionNotificationSourceNone extends ReactionNotificationSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reactionNotificationSourceNone',
        ];
    }
}
