<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of invite links for a chat folder.
 */
class PremiumLimitTypeChatFolderInviteLinkCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeChatFolderInviteLinkCount',
        ];
    }
}
