<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The user is picking a sticker to send.
 */
class ChatActionChoosingSticker extends ChatAction implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatActionChoosingSticker',
        ];
    }
}
