<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of basic group and supergroup chats, which can be used as a discussion group for a channel. Returned basic group chats must be first upgraded to supergroups before they can be set as a discussion group.
 */
class GetSuitableDiscussionChats extends Chats implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSuitableDiscussionChats',
        ];
    }
}
