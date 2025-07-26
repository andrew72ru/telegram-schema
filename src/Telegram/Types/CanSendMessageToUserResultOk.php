<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user can be messaged
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
