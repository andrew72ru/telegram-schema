<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The secret chat is ready to use
 */
class SecretChatStateReady extends SecretChatState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'secretChatStateReady',
        ];
    }
}
