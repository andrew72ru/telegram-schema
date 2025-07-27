<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user has canceled the previous action.
 */
class ChatActionCancel extends ChatAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionCancel',
        ];
    }
}
