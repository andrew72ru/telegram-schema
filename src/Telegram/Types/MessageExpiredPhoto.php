<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A self-destructed photo message
 */
class MessageExpiredPhoto extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageExpiredPhoto',
        ];
    }
}
