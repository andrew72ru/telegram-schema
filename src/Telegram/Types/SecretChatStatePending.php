<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The secret chat is not yet created; waiting for the other user to get online
 */
class SecretChatStatePending extends SecretChatState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'secretChatStatePending',
        ];
    }
}
