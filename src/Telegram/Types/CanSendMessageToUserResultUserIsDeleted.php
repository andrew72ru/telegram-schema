<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user can't be messaged, because they are deleted or unknown.
 */
class CanSendMessageToUserResultUserIsDeleted extends CanSendMessageToUserResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canSendMessageToUserResultUserIsDeleted',
        ];
    }
}
