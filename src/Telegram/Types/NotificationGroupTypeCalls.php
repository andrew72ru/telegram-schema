<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A group containing notifications of type notificationTypeNewCall.
 */
class NotificationGroupTypeCalls extends NotificationGroupType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationGroupTypeCalls',
        ];
    }
}
