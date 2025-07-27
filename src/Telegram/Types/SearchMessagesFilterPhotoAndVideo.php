<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns only photo and video messages.
 */
class SearchMessagesFilterPhotoAndVideo extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterPhotoAndVideo',
        ];
    }
}
