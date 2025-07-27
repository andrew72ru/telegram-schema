<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns available upgraded gift emoji statuses for self status.
 */
class GetUpgradedGiftEmojiStatuses extends EmojiStatuses implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getUpgradedGiftEmojiStatuses',
        ];
    }
}
