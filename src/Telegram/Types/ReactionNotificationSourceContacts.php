<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Notifications for reactions are shown only for reactions from contacts
 */
class ReactionNotificationSourceContacts extends ReactionNotificationSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reactionNotificationSourceContacts',
        ];
    }
}
