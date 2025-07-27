<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message is from some other source.
 */
class MessageSourceOther extends MessageSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSourceOther',
        ];
    }
}
