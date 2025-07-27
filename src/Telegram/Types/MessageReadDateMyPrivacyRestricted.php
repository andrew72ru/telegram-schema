<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The read date is unknown due to privacy settings of the current user, but will be known if the user subscribes to Telegram Premium.
 */
class MessageReadDateMyPrivacyRestricted extends MessageReadDate implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageReadDateMyPrivacyRestricted',
        ];
    }
}
