<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A profile photo was suggested to the user.
 */
class PushMessageContentSuggestProfilePhoto extends PushMessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentSuggestProfilePhoto',
        ];
    }
}
