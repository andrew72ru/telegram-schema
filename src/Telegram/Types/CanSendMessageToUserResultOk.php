<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user can be messaged.
 */
class CanSendMessageToUserResultOk extends CanSendMessageToUserResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canSendMessageToUserResultOk',
        ];
    }
}
