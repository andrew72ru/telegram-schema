<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A message content that is not supported in the current TDLib version.
 */
class MessageUnsupported extends MessageContent implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageUnsupported',
        ];
    }
}
