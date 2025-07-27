<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user is picking a location or venue to send.
 */
class ChatActionChoosingLocation extends ChatAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionChoosingLocation',
        ];
    }
}
