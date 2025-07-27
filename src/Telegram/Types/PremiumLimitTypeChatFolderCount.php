<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The maximum number of chat folders.
 */
class PremiumLimitTypeChatFolderCount extends PremiumLimitType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'premiumLimitTypeChatFolderCount',
        ];
    }
}
