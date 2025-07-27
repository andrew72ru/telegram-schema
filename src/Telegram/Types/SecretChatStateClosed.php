<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The secret chat is closed.
 */
class SecretChatStateClosed extends SecretChatState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'secretChatStateClosed',
        ];
    }
}
