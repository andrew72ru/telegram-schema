<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns a list of channel chats, which can be used as a personal chat.
 */
class GetSuitablePersonalChats extends Chats implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSuitablePersonalChats',
        ];
    }
}
