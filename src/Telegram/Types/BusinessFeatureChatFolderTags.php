<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to display folder names for each chat in the chat list.
 */
class BusinessFeatureChatFolderTags extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureChatFolderTags',
        ];
    }
}
