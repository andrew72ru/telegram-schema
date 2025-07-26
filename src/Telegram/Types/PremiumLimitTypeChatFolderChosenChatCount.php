<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The maximum number of pinned and always included, or always excluded chats in a chat folder
 */
class PremiumLimitTypeChatFolderChosenChatCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeChatFolderChosenChatCount',
        ];
    }
}
