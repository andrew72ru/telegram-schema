<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Topic containing messages sent by the current user of forwarded from an unknown chat.
 */
class SavedMessagesTopicTypeMyNotes extends SavedMessagesTopicType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'savedMessagesTopicTypeMyNotes',
        ];
    }
}
