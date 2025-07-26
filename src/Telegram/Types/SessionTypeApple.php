<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The session is running on a generic Apple device
 */
class SessionTypeApple extends SessionType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sessionTypeApple',
        ];
    }
}
