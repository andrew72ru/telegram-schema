<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A group containing notifications of type notificationTypeNewCall
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
