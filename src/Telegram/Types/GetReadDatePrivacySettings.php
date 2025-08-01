<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns privacy settings for message read date.
 */
class GetReadDatePrivacySettings extends ReadDatePrivacySettings implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getReadDatePrivacySettings',
        ];
    }
}
