<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns only messages with mentions of the current user, or messages that are replies to their messages
 */
class SearchMessagesFilterMention extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterMention',
        ];
    }
}
