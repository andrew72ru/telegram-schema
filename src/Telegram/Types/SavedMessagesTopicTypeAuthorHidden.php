<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Topic containing messages forwarded from a user with hidden privacy.
 */
class SavedMessagesTopicTypeAuthorHidden extends SavedMessagesTopicType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'savedMessagesTopicTypeAuthorHidden',
        ];
    }
}
