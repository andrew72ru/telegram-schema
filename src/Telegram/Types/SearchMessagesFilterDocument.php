<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns only document messages
 */
class SearchMessagesFilterDocument extends SearchMessagesFilter implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchMessagesFilterDocument',
        ];
    }
}
