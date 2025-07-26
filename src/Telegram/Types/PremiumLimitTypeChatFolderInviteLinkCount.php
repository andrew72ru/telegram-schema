<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The maximum number of invite links for a chat folder
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
