<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message is from chat, message thread or forum topic history preview.
 */
class MessageSourceHistoryPreview extends MessageSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSourceHistoryPreview',
        ];
    }
}
