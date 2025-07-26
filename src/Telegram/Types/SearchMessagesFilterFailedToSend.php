<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns only failed to send messages. This filter can be used only if the message database is used
 */
class SearchMessagesFilterFailedToSend extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterFailedToSend',
        ];
    }
}
