<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The message is from search results, including file downloads, local file list, outgoing document messages, calendar.
 */
class MessageSourceSearch extends MessageSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSourceSearch',
        ];
    }
}
