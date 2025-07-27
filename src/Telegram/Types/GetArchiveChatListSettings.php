<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns settings for automatic moving of chats to and from the Archive chat lists.
 */
class GetArchiveChatListSettings extends ArchiveChatListSettings implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getArchiveChatListSettings',
        ];
    }
}
