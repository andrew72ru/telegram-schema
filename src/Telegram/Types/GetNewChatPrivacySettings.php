<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns privacy settings for new chat creation.
 */
class GetNewChatPrivacySettings extends NewChatPrivacySettings implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getNewChatPrivacySettings',
        ];
    }
}
